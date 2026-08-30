---
type: "acronym"
title: "Internet Protocol (IP)"
description: "Internet Protocol: in the context of networking, IP often refers to Internet Protocol, which is a set of rules governing the format of data sent over the internet or other networks."
resource: "https://en.wikipedia.org/wiki/IP_address"
tags: ["network", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Internet Protocol (IP)

Internet Protocol: in the context of networking, IP often refers to Internet Protocol, which is a set of rules governing the format of data sent over the internet or other networks. IP addresses are unique numerical labels assigned to each device connected to a network, allowing them to communicate with each other.

PHP usually handles IP addresses as strings. It also has dedicated functions to manage them, in particular converting IPs to integer, with ``ip2long()``, or solving them with DNS, with ``gethostbyaddr()``. 

PHP also provides IP in its configuration, such as ``$_SERVER['SERVER_ADDR']``, which is the IP of the current webserver.

IP also stands for intellectual property.

```php
<?php

    echo $_SERVER['SERVER_ADDR']; 

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/IP_address](https://en.wikipedia.org/wiki/IP_address)

## See Also
- [How to get IP Address of clients machine in PHP ?](https://www.geeksforgeeks.org/php/how-to-get-ip-address-of-clients-machine-in-php/)

## Related
- [$_SERVER](/features/$_server.md)
- [Domain Name System (DNS)](/features/dns.md)
- [Lightweight Directory Access Protocol (LDAP)](/features/ldap.md)
- [User Datagram Protocol (UDP)](/features/udp.md)
- [OSI Model](/features/osi-model.md)

## Details
- Extension: ext-geoip

