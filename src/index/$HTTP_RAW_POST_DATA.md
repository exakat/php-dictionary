# $HTTP\_RAW\_POST\_DATA
``$HTTP_RAW_POST_DATA`` used to contain the raw POST data of an HTTP request. 

``$HTTP_RAW_POST_DATA`` was removed in version 7.0: it is replaced by ``php://input``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24HTTP_RAW_POST_DATA.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24HTTP_RAW_POST_DATA.html","name":"$HTTP_RAW_POST_DATA","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 08:33:08 +0000","dateModified":"Mon, 24 Aug 2026 08:33:08 +0000","description":"$HTTP_RAW_POST_DATA used to contain the raw POST data of an HTTP request","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24HTTP_RAW_POST_DATA.html"]}],"keywords":["php variable"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-input.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-output.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-memory.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/reserved.variables.files.php"},{"@type":"CreativeWork","name":"PHP $HTTP_RAW_POST_DATA is deprecated","url":"https:\/\/www.bram.us\/2014\/10\/26\/php-5-6-automatically-populating-http_raw_post_data-is-deprecated-and-will-be-removed-in-a-future-version\/"},{"@type":"CreativeWork","name":"PHP Protocol","url":"https:\/\/www.php.net\/manual\/en\/wrappers.php.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"$HTTP_RAW_POST_DATA"}]}]}</script>
```php
<?php

    // $a->file was filled with $_FILES at some point
    move_uploaded_file($a->file['tmp_name'], $target);

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.variables.files.php)**
## See Also

+ [PHP $HTTP_RAW_POST_DATA is deprecated](https://www.bram.us/2014/10/26/php-5-6-automatically-populating-http_raw_post_data-is-deprecated-and-will-be-removed-in-a-future-version/)
+ [PHP Protocol](https://www.php.net/manual/en/wrappers.php.php)

## Related

+ [php://input](php-input.html)
+ [php://output](php-output.html)
+ [php://memory](php-memory.html)
