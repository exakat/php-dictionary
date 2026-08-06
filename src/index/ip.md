# Internet Protocol (IP)
Internet Protocol: in the context of networking, IP often refers to Internet Protocol, which is a set of rules governing the format of data sent over the internet or other networks. IP addresses are unique numerical labels assigned to each device connected to a network, allowing them to communicate with each other.

PHP usually handles IP addresses as strings. It also has dedicated functions to manage them, in particular converting IPs to integer, with ``ip2long()``, or solving them with DNS, with ``gethostbyaddr()``. 

PHP also provides IP in its configuration, such as ``$_SERVER['SERVER_ADDR']``, which is the IP of the current webserver.

IP also stands for intellectual property.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ip.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ip.html","name":"Internet Protocol (IP)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 18 Jul 2026 05:19:16 +0000","dateModified":"Sat, 18 Jul 2026 05:19:16 +0000","description":"Internet Protocol: in the context of networking, IP often refers to Internet Protocol, which is a set of rules governing the format of data sent over the internet or other networks","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Internet Protocol (IP).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    echo $_SERVER['SERVER_ADDR']; 

?>
```

**[Documentation](https://en.wikipedia.org/wiki/IP_address)**
## See Also

+ [How to get IP Address of clients machine in PHP ?](https://www.geeksforgeeks.org/php/how-to-get-ip-address-of-clients-machine-in-php/)

## Related

+ [$\_SERVER]($_server.ini.html)
+ [Domain Name System (DNS)](dns.ini.html)
+ [Lightweight Directory Access Protocol (LDAP)](ldap.ini.html)
+ [User Datagram Protocol (UDP)](udp.ini.html)
