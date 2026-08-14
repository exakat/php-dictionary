# bzip2 Extension
The bzip2 extension provides functions to handle the zip compression format: read, write and access arbitrary part of files. It also provide a compression format for the output of PHP.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bzip2.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bzip2.html","name":"bzip2 Extension","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The bzip2 extension provides functions to handle the zip compression format: read, write and access arbitrary part of files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bzip2 Extension.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"bzip2"}]}]}</script>
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

## Related

+ [zlib extension](zlib.html)
+ [zip Extension](zip.html)
