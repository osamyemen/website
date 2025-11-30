<?php
# that  work with payloads http://localhost/dvwa/vulnerabilities/fi/?page=../../../../../etc/passwd
# this code when work happing vulnerabilitie
// The page we wish to display
$file = $_GET[ 'page' ];

##Medium 
# here we can use encod %20 as like
/ The page we wish to display
$file = $_GET[ 'page' ];

// Input validation
$file = str_replace( array( "http://", "https://" ), "", $file );
$file = str_replace( array( "../", "..\\" ), "", $file );
?>



#prevent
java
File file = new File(BASE_DIRECTORY, userInput);
if (file.getCanonicalPath().startsWith(BASE_DIRECTORY)) {
    // process file
}


----------------------------python-----------------------
import os

def safe_file_access(file_name, base_directory="/var/www/documents"):
    # Construct the full filepath
    file_path = os.path.join(base_directory, file_name)
    # Resolve the absolute path and ensure it's within the base_directory
    absolute_path = os.path.abspath(file_path)
    if not absolute_path.startswith(base_directory + os.path.sep):
        raise ValueError("Invalid filename")
    # Proceed with file access
    with open(absolute_path, 'r') as file:
        return file.read()

#--------------------------------php-----------------------
<?php

function safeFileAccess($fileName, $baseDirectory = "/var/www/documents") {
    // Ensure the base directory path is absolute
    $baseDirectory = realpath($baseDirectory);
    // Resolve the absolute path of the requested file
    $filePath = realpath($baseDirectory . '/' . $fileName);
    
    // Check if the file is within the base directory
    if (strpos($filePath, $baseDirectory) === 0) {
        // Proceed with file access
        return file_get_contents($filePath);
    } else {
        throw new Exception("Attempted Directory Traversal Detected");
    }
}
?>
<?php

// The page we wish to display
$file = $_GET[ 'page' ];

// Input validation
if( !fnmatch( "file*", $file ) && $file != "include.php" ) {
    // This isn't the page we want!
    echo "ERROR: File not found!";
    exit;
}

?>


<?php
#this use array for filter 
// The page we wish to display
$file = $_GET[ 'page' ];

// Only allow include.php or file{1..3}.php
$configFileNames = [
    'include.php',
    'file1.php',
    'file2.php',
    'file3.php',
];

if( !in_array($file, $configFileNames) ) {
    // This isn't the page we want!
    echo "ERROR: File not found!";
    exit;
}

?>