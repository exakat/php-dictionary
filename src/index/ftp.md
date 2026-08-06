# File Transfer Protocol (FTP)
FTP stands for File Transfer Protocol. It is a protocol to transfer files between servers. 

PHP supports FTP and FTPS, through the ext/ftp extension, the ext/curl extension and the internal wrappers.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ftp.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ftp.html","name":"File Transfer Protocol (FTP)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"FTP stands for File Transfer Protocol","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/File Transfer Protocol (FTP).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php
    $ftp = ftp_connect($ftpAddress); 
    
    $upload = ftp_put($ftp, $destinationPath, $sourceFile, FTP_BINARY); 
    
    if (!$upload) { 
        echo "FTP upload has failed!";
    } else {
        echo "Uploaded $source_file to $ftp_server as $destination_file";
    }
    
    ftp_close($ftp);
?>
```

**[Documentation](https://www.php.net/manual/en/book.ftp.php)**
## See Also

+ [RFC 765](https://datatracker.ietf.org/doc/html/rfc959)

## Related

+ [Wrapper](wrapper.ini.html)
+ [File Transfer Protocol Secure (FTPS)](ftps.ini.html)
+ [Connection](connection.ini.html)
+ [RFC](rfc.ini.html)
