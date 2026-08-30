# Internet Protocol (IP)
Internet Protocol: in the context of networking, IP often refers to Internet Protocol, which is a set of rules governing the format of data sent over the internet or other networks. IP addresses are unique numerical labels assigned to each device connected to a network, allowing them to communicate with each other.

PHP usually handles IP addresses as strings. It also has dedicated functions to manage them, in particular converting IPs to integer, with ``ip2long()``, or solving them with DNS, with ``gethostbyaddr()``. 

PHP also provides IP in its configuration, such as ``$_SERVER['SERVER_ADDR']``, which is the IP of the current webserver.

IP also stands for intellectual property.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ip.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ip.html","name":"Internet Protocol (IP)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:21:44 +0000","dateModified":"Wed, 19 Aug 2026 08:21:44 +0000","description":"Internet Protocol: in the context of networking, IP often refers to Internet Protocol, which is a set of rules governing the format of data sent over the internet or other networks","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ip.html"]}],"keywords":["network","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24_server.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dns.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ldap.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/udp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/osi-model.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/IP_address"},{"@type":"CreativeWork","name":"How to get IP Address of clients machine in PHP ?","url":"https:\/\/www.geeksforgeeks.org\/php\/how-to-get-ip-address-of-clients-machine-in-php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ip"}]}]}</script>
```php
<?php

    echo $_SERVER['SERVER_ADDR']; 

?>
```

**[Documentation](https://en.wikipedia.org/wiki/IP_address)**
## See Also

+ [How to get IP Address of clients machine in PHP ?](https://www.geeksforgeeks.org/php/how-to-get-ip-address-of-clients-machine-in-php/)

## Related

+ [$\_SERVER]($_server.html)
+ [Domain Name System (DNS)](dns.html)
+ [Lightweight Directory Access Protocol (LDAP)](ldap.html)
+ [User Datagram Protocol (UDP)](udp.html)
+ [OSI Model](osi-model.html)
