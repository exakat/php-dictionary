---
type: "acronym"
title: "File Transfer Protocol Secure (FTPS)"
description: "FTPS stands for File Transfer Protocol Secure."
resource: "https://www.php.net/manual/en/book.ftp.php"
tags: ["protocol", "acronym", "rfc", "hosting"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# File Transfer Protocol Secure (FTPS)

FTPS stands for File Transfer Protocol Secure. It is a protocol to transfer files between servers, over a secure connection. 

PHP supports FTP and FTPS, through the ext/ftp extension, the ext/curl extension and the internal wrappers.

```php
<?php
    $ftp = ftp_connect($ftpAddress); 
    
    $upload = ftp_put($ftp, $destinationPath, $sourceFile, FTP_BINARY); 
    
    if (!$upload) { 
        echo "FTPS upload has failed!";
    } else {
        echo "Uploaded $source_file to $ftp_server as $destination_file";
    }
    
    ftp_close($ftp);
?>
```

## Documentation
- [https://www.php.net/manual/en/book.ftp.php](https://www.php.net/manual/en/book.ftp.php)

## See Also
- [RFC 765](https://datatracker.ietf.org/doc/html/rfc959)

## Related
- [Wrapper](/features/wrapper.md)
- [File Transfer Protocol (FTP)](/features/ftp.md)

## Details
- Extension: ext-ftp
- Extension: ext-curl

