# zip Extension
The zip extension provides functions to handle the zip compression format: read, write and access arbitrary part of files. It also provides a compression format for the output of PHP.

The functions, defined by this extension, are deprecated, and shall be removed in version 9. It is recommended to use the OOP API, and its ``ZipArchive`` class.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/zip.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/zip.html","name":"zip Extension","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The zip extension provides functions to handle the zip compression format: read, write and access arbitrary part of files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/zip Extension.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [zlib extension](zlib.ini.html)
+ [bzip2 Extension](bzip2.ini.html)
