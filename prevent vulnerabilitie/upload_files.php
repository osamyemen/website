<?php
/*
How to Prevent File Upload Attacks
To avoid these types of file upload attacks, we recommend the following ten best practices:

1. Only allow specific file types. By limiting the list of allowed file types, you can avoid executables, scripts and other potentially malicious content from being uploaded to your application.

2. Verify file types. In addition to restricting the file types, it is important to ensure that no files are ‘masking’ as allowed file types. For instance, if an attacker were to rename an .exe to .docx, and your solution relies entirely on the file extension, it would bypass your check as a Word document which in fact it is not. Therefore, it is important to verify file types before allowing them to be uploaded.

3. Scan for malware. To minimize risk, all files should be scanned for malware. We recommend multiscanning files with multiple anti-malware engines (using a combination of signatures, heuristics, and machine learning detection methods) in order to get the highest detection rate and the shortest window of exposure to malware outbreaks.

4. Remove possible embedded threats. Files such as Microsoft Office, PDF and image files can have embedded threats in hidden scripts and macros that are not always detected by anti-malware engines. To remove risk and make sure that files contain no hidden threats, it is best practice to remove any possible embedded objects by using a methodology called content disarm and reconstruction (CDR).

5. Authenticate users. To increase security, it is good practice to require users to authenticate themselves before uploading a file. However, that doesn’t guarantee the user’s machine itself wasn’t compromised.

6. Set a maximum name length and maximum file size. Make sure to set a maximum name length (restrict allowed characters if possible) and file size in order to prevent a potential service outage.

7. Randomize uploaded file names. Randomly alter the uploaded file names so that attackers cannot try to access the file with the file name they uploaded. When using Deep CDR, you can configure the sanitized file to be a random identifier (e.g. the analysis data_id).

8. Store uploaded files outside the web root folder. The directory to which files are uploaded should be outside of the website’s public directory so that the attackers cannot execute the file via the assigned path URL.

9. Check for vulnerabilities in files. Make sure that you check for vulnerabilities in software and firmware files before they are uploaded.

10. Use simple error messages. When displaying file upload errors, do not include directory paths, server configuration settings, or other information that attackers could potentially use to gain further entry into your systems.
*/




if( isset( $_POST[ 'Upload' ] ) ) {
    // Where are we going to be writing to?
    $target_path  = DVWA_WEB_PAGE_TO_ROOT . "hackable/uploads/";
    $target_path .= basename( $_FILES[ 'uploaded' ][ 'name' ] );

    // Can we move the file to the upload folder?
    if( !move_uploaded_file( $_FILES[ 'uploaded' ][ 'tmp_name' ], $target_path ) ) {
        // No
        echo '<pre>Your image was not uploaded.</pre>';
    }
    else {
        // Yes!
        echo "<pre>{$target_path} succesfully uploaded!</pre>";
    }
}


#----------------------------------------
  // File information
    $uploaded_name = $_FILES[ 'uploaded' ][ 'name' ];
    $uploaded_type = $_FILES[ 'uploaded' ][ 'type' ];
    $uploaded_size = $_FILES[ 'uploaded' ][ 'size' ];

    // Is it an image?
    if( ( $uploaded_type == "image/jpeg" || $uploaded_type == "image/png" ) &&
        ( $uploaded_size < 100000 ) ) {

  // File information
    $uploaded_name = $_FILES[ 'uploaded' ][ 'name' ];
    $uploaded_ext  = substr( $uploaded_name, strrpos( $uploaded_name, '.' ) + 1);
    $uploaded_size = $_FILES[ 'uploaded' ][ 'size' ];
    $uploaded_tmp  = $_FILES[ 'uploaded' ][ 'tmp_name' ];

    // Is it an image?
    if( ( strtolower( $uploaded_ext ) == "jpg" || strtolower( $uploaded_ext ) == "jpeg" || strtolower( $uploaded_ext ) == "png" ) &&
        ( $uploaded_size < 100000 ) &&
        getimagesize( $uploaded_tmp ) ) {
