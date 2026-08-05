# Path Traversal
A path traversal vulnerability is a security flaw that allows an attacker to access files or directories outside the intended location on a server.

It happens when an application uses user input to build file paths without properly validating or restricting it.

Path traversals are also called directory traversal.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/path-traversal.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/path-traversal.ini.html","name":"Path Traversal","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A path traversal vulnerability is a security flaw that allows an attacker to access files or directories outside the intended location on a server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Path Traversal.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $file = $_GET['file'];
    include('pages/' . $file);

?>
```

**[Documentation](https://owasp.org/www-community/attacks/Path_Traversal)**
## See Also

+ [Path traversal](https://portswigger.net/web-security/file-path-traversal)
+ [How to prevent exploitation of Path Traversal vulnerabilities](https://www.ubikasec.com/en/posts/how-to-prevent-exploitation-of-path-traversal-vulnerabilities/)

## Related

+ [Vulnerability](vulnerability.ini.html)
+ [Attack](attack.ini.html)
+ [Leak](leak.ini.html)
+ [Static Application Security Testing (SAST)](sast.ini.html)
