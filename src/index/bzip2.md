# bzip2 Extension
The ``bzip2`` extension handles the bzip2 compression format: read, write and access arbitrary part of files. It also provides a compression format for the output of PHP.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bzip2.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bzip2.html","name":"bzip2 Extension","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 08:29:26 +0000","dateModified":"Tue, 01 Sep 2026 08:29:26 +0000","description":"The bzip2 extension handles the bzip2 compression format: read, write and access arbitrary part of files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bzip2.html"]}],"keywords":["extension"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zlib.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zip.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.bzip2.php"},{"@type":"CreativeWork","name":"Compress Files with bzip2 in PHP","url":"https:\/\/ssojet.com\/compression\/compress-files-with-bzip2-in-php\/"},{"@type":"CreativeWork","name":"bzip2","url":"https:\/\/sourceware.org\/bzip2\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"bzip2"}]}]}</script>
```php
<?php

    // open file for reading
    $bz = bzopen($filename, r);
    
    // output until end of the file
    echo bzread($bz);
    
    bzclose($bz);

?>
```

**[Documentation](https://www.php.net/manual/en/book.bzip2.php)**
## See Also

+ [Compress Files with bzip2 in PHP](https://ssojet.com/compression/compress-files-with-bzip2-in-php/)
+ [bzip2](https://sourceware.org/bzip2/)

## Related

+ [zlib extension](zlib.html)
+ [zip Extension](zip.html)
