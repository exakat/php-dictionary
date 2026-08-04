# zip Extension
The zip extension provides functions to handle the zip compression format: read, write and access arbitrary part of files. It also provides a compression format for the output of PHP.

The functions, defined by this extension, are deprecated, and shall be removed in version 9. It is recommended to use the OOP API, and its ``ZipArchive`` class.
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

## See Also

+ [How To Upload And Zip Single Or Multiple Files in PHP](https://medium.com/nerd-for-tech/how-to-upload-and-zip-single-or-multiple-files-in-php-4a6fcb8bbe02)

Related : [zlib extension](zlib extension), [bzip2 Extension](bzip2 Extension)
