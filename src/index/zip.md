# zip Extension
The zip extension provides functions to handle the zip compression format: read, write and access arbitrary part of files. It also provides a compression format for the output of PHP.

The functions, defined by this extension, are deprecated, and shall be removed in version 9. It is recommended to use the OOP API, and its ``ZipArchive`` class.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zip.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zip.html","name":"zip Extension","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The zip extension provides functions to handle the zip compression format: read, write and access arbitrary part of files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zip.html"]}],"keywords":["extension","format"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zlib.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bzip2.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.zip.php"},{"@type":"CreativeWork","name":"How To Upload And Zip Single Or Multiple Files in PHP","url":"https:\/\/medium.com\/nerd-for-tech\/how-to-upload-and-zip-single-or-multiple-files-in-php-4a6fcb8bbe02"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"zip"}]}]}</script>
```php
<?php

    // Example from the PHP manual 
    // https://www.php.net/manual/en/zip.examples.php
    
    $zip = new ZipArchive();
    $filename = "./test112.zip";
    
    if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
        exit("cannot open <$filename>\n");
    }
    
    $zip->addFromString("testfilephp.txt" . time(), "#1 This is a test string added as testfilephp.txt.\n");
    $zip->addFromString("testfilephp2.txt" . time(), "#2 This is a test string added as testfilephp2.txt.\n");
    $zip->addFile($thisdir . "/too.php","/testfromfile.php");
    echo "numfiles: " . $zip->numFiles . "\n";
    echo "status:" . $zip->status . "\n";
    $zip->close();

?>
```

**[Documentation](https://www.php.net/manual/en/book.zip.php)**
## See Also

+ [How To Upload And Zip Single Or Multiple Files in PHP](https://medium.com/nerd-for-tech/how-to-upload-and-zip-single-or-multiple-files-in-php-4a6fcb8bbe02)

## Related

+ [zlib extension](zlib.html)
+ [bzip2 Extension](bzip2.html)
