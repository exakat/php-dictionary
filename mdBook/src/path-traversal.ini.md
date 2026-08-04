# Path Traversal
A path traversal vulnerability is a security flaw that allows an attacker to access files or directories outside the intended location on a server.

It happens when an application uses user input to build file paths without properly validating or restricting it.

Path traversals are also called directory traversal.
```php
<?php

    $file = $_GET['file'];
    include('pages/' . $file);

?>
```

## See Also

+ [Path traversal](https://portswigger.net/web-security/file-path-traversal)
+ [How to prevent exploitation of Path Traversal vulnerabilities](https://www.ubikasec.com/en/posts/how-to-prevent-exploitation-of-path-traversal-vulnerabilities/)

Related : [Vulnerability](Vulnerability), [Attack](Attack), [Leak](Leak), [Static Application Security Testing (SAST)](Static Application Security Testing (SAST))
