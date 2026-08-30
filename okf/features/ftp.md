---
type: "acronym"
title: "File Transfer Protocol (FTP)"
description: "FTP stands for File Transfer Protocol."
resource: "https://www.php.net/manual/en/book.ftp.php"
tags: ["protocol", "acronym", "rfc", "hosting"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/book.ftp.php](https://www.php.net/manual/en/book.ftp.php)

## See Also
- [RFC 765](https://datatracker.ietf.org/doc/html/rfc959)

## Related
- [Wrapper](/features/wrapper.md)
- [File Transfer Protocol Secure (FTPS)](/features/ftps.md)
- [Connection](/features/connection.md)
- [RFC](/features/rfc.md)

## Details
- Extension: ext-ftp
- Extension: ext-curl

