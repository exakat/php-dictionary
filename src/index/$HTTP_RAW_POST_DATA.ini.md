# $HTTP\_RAW\_POST\_DATA
``$HTTP_RAW_POST_DATA`` used to contain the raw POST data of an HTTP request. 

``$HTTP_RAW_POST_DATA`` was removed in version 7.0: it is replaced by ``php://input``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24HTTP_RAW_POST_DATA.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/%24HTTP_RAW_POST_DATA.ini.html","name":"$HTTP_RAW_POST_DATA","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``$HTTP_RAW_POST_DATA`` used to contain the raw POST data of an HTTP request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/$HTTP_RAW_POST_DATA.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // $a->file was filled with $_FILES at some point
    move_uploaded_file($a->file['tmp_name'], $target);

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.files.php)**
## Related

+ [php://input](php-input.ini.html)
+ [php://output](php-output.ini.html)
+ [php://memory](php-memory.ini.html)
