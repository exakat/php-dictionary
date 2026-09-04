# File Transfer Protocol (FTP)
FTP stands for File Transfer Protocol. It is a protocol to transfer files between servers. 

PHP supports FTP and FTPS, through the ext/ftp extension, the ext/curl extension and the internal wrappers.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ftp.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ftp.html","name":"File Transfer Protocol (FTP)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:16:56 +0000","dateModified":"Wed, 19 Aug 2026 08:16:56 +0000","description":"FTP stands for File Transfer Protocol","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ftp.html"]}],"keywords":["protocol","acronym","rfc","hosting"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ftps.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/connection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rfc.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.ftp.php"},{"@type":"CreativeWork","name":"RFC 765","url":"https:\/\/datatracker.ietf.org\/doc\/html\/rfc959"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ftp"}]}]}</script>
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

+ [Wrapper](wrapper.html)
+ [File Transfer Protocol Secure (FTPS)](ftps.html)
+ [Connection](connection.html)
+ [RFC](rfc.html)
