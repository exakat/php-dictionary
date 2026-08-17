# Port
In computer networking, a port is a communication endpoint that facilitates the transfer of data between different processes or devices over a network.

A port is identified by a number, known as the port number, which is part of the addressing information used to direct the data to its destination. Port numbers are standardized across different systems and protocols.

Ports are categorized into two types: ``TCP``, Transmission Control Protocol, ports and ``UDP``, User Datagram Protocol, ports. TCP and UDP are both protocols used in the Internet Protocol Suite for transmitting data across networks, but they have different characteristics.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/port.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/port.html","name":"Port","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"In computer networking, a port is a communication endpoint that facilitates the transfer of data between different processes or devices over a network","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Port.html"]}],"keywords":["network"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tcp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/udp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssh.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Port_(computer_networking)"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"port"}]}]}</script>
```php
<?php

    $url = 'http://www.sample.com/';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_PORT, 8088);
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Port_(computer_networking))**
## Related

+ [TCP](tcp.html)
+ [User Datagram Protocol (UDP)](udp.html)
+ [Secure Shell (SSH)](ssh.html)
