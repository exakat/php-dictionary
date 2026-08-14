# Client URL (CURL)
``Curl`` is both a PHP extension and a multiprotocol file transfer library. 

The ``cURL``, for client URL, extension is a powerful library that allows to transfer data to and from servers using various protocols. It enables to make HTTP requests, handle responses, and perform various network-related tasks from within source code.

The cURL extension provides a set of functions that can be used to perform different tasks, such as making GET and POST requests, sending custom headers, handling cookies, and more. 

cURL is used to access remote resources, using various protocols such as DICT, FILE, FTP, FTPS, GOPHER, GOPHERS, HTTP, HTTPS, IMAP, IMAPS, LDAP, LDAPS, MQTT, POP3, POP3S, RTMP, RTMPS, RTSP, SCP, SFTP, SMB, SMBS, SMTP, SMTPS, TELNET and TFTP.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/curl.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/curl.html","name":"Client URL (CURL)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Curl is both a PHP extension and a multiprotocol file transfer library","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Client URL (CURL).html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"curl"}]}]}</script>
```php
<?php

// Example from the PHP manual
$ch = curl_init("http://www.example.com/");
$fp = fopen("example_homepage.txt\, \w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
if(curl_error($ch)) {
    fwrite($fp, curl_error($ch));
}
curl_close($ch);
fclose($fp);
?>
```

**[Documentation](https://www.php.net/manual/en/book.curl.php)**
## See Also

+ [curl.se](https://curl.se/)
+ [How to use cURL in PHP](https://dev.to/serpapi/how-to-use-curl-in-php-2aga)
+ [Batch curl requests in PHP using multi handles](https://dev.to/danrot90/batch-curl-requests-in-php-using-multi-handles-3jg6)

## Related

+ [Webscraping](webscraping.html)
+ [Handle](handle.html)

## Related packages

+ [symfony/panther](https://packagist.org/packages/symfony/panther)
+ [roach-php/core](https://packagist.org/packages/roach-php/core)
