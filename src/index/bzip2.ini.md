# bzip2 Extension
The bzip2 extension provides functions to handle the zip compression format: read, write and access arbitrary part of files. It also provide a compression format for the output of PHP.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/bzip2.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/bzip2.ini.html","name":"bzip2 Extension","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The bzip2 extension provides functions to handle the zip compression format: read, write and access arbitrary part of files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/bzip2 Extension.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [zlib extension](zlib.ini.html)
+ [zip Extension](zip.ini.html)
