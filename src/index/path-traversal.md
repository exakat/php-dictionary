# Path Traversal
A path traversal vulnerability is a security flaw that allows an attacker to access files or directories outside the intended location on a server.

It happens when an application uses user input to build file paths without properly validating or restricting it.

Path traversal is also called directory traversal.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/path-traversal.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/path-traversal.html","name":"Path Traversal","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:50:10 +0000","dateModified":"Wed, 19 Aug 2026 06:50:10 +0000","description":"A path traversal vulnerability is a security flaw that allows an attacker to access files or directories outside the intended location on a server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/path-traversal.html"]}],"alternateName":["directory-traversal"],"keywords":["vulnerability"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vulnerability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/leak.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sast.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/owasp.org\/www-community\/attacks\/Path_Traversal"},{"@type":"CreativeWork","name":"Path traversal","url":"https:\/\/portswigger.net\/web-security\/file-path-traversal"},{"@type":"CreativeWork","name":"How to prevent exploitation of Path Traversal vulnerabilities","url":"https:\/\/www.ubikasec.com\/en\/posts\/how-to-prevent-exploitation-of-path-traversal-vulnerabilities\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"path-traversal"}]}]}</script>
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

+ [Vulnerability](vulnerability.html)
+ [Attack](attack.html)
+ [Leak](leak.html)
+ [Static Application Security Testing (SAST)](sast.html)
