# file://
The ``file://`` wrapper is a native PHP wrapper, to access files on a local files, on the host system.

It may also be omitted, as the default behavior is to read files on the local system.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-file.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-file.html","name":"file:\/\/","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The ``file:\/\/`` wrapper is a native PHP wrapper, to access files on a local files, on the host system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file:\/\/.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"file:\/\/"}]}]}</script>
```php
<?php

// display the content of a file
// 3 / : two for protocol, one for path
print_r(file_get_content('file:///tmp/file.txt'));

// also possible
print_r(file_get_content('/tmp/file.txt'));

?>
```

**[Documentation](https://www.php.net/manual/en/wrappers.file.php)**
## Related

+ [Wrapper](wrapper.html)
+ [PHP Wrappers](php-wrapper.html)
+ [File](file.html)
+ [Thin Method](thin-method.html)
+ [Wrapper Pattern](wrapper-pattern.html)
