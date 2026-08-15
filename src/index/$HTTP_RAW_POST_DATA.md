# $HTTP\_RAW\_POST\_DATA
``$HTTP_RAW_POST_DATA`` used to contain the raw POST data of an HTTP request. 

``$HTTP_RAW_POST_DATA`` was removed in version 7.0: it is replaced by ``php://input``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24HTTP_RAW_POST_DATA.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24HTTP_RAW_POST_DATA.html","name":"$HTTP_RAW_POST_DATA","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"$HTTP_RAW_POST_DATA used to contain the raw POST data of an HTTP request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/$HTTP_RAW_POST_DATA.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"$HTTP_RAW_POST_DATA"}]}]}</script>
```php
<?php

    // $a->file was filled with $_FILES at some point
    move_uploaded_file($a->file['tmp_name'], $target);

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.files.php)**
## Related

+ [php://input](php-input.html)
+ [php://output](php-output.html)
+ [php://memory](php-memory.html)
