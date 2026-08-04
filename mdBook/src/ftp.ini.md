# File Transfer Protocol (FTP)
FTP stands for File Transfer Protocol. It is a protocol to transfer files between servers. 

PHP supports FTP and FTPS, through the ext/ftp extension, the ext/curl extension and the internal wrappers.
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

## See Also

+ [RFC 765](https://datatracker.ietf.org/doc/html/rfc959)

Related : [Wrapper](Wrapper), [File Transfer Protocol Secure (FTPS)](File Transfer Protocol Secure (FTPS)), [Connection](Connection), [RFC](RFC)
