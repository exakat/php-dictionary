---
type: "PHP Feature"
title: "Port"
description: "In computer networking, a port is a communication endpoint that facilitates the transfer of data between different processes or devices over a network."
resource: "https://en.wikipedia.org/wiki/Port_(computer_networking)"
tags: ["network"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Port

In computer networking, a port is a communication endpoint that facilitates the transfer of data between different processes or devices over a network.

A port is identified by a number, known as the port number, which is part of the addressing information used to direct the data to its destination. Port numbers are standardized across different systems and protocols.

Ports are categorized into two types: ``TCP``, Transmission Control Protocol, ports and ``UDP``, User Datagram Protocol, ports. TCP and UDP are both protocols used in the Internet Protocol Suite for transmitting data across networks, but they have different characteristics.

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

## Documentation
- [https://en.wikipedia.org/wiki/Port_(computer_networking)](https://en.wikipedia.org/wiki/Port_(computer_networking))

## See Also
- [IANA Service Name and Transport Protocol Port Number Registry](https://www.iana.org/assignments/service-names-port-numbers/service-names-port-numbers.xhtml)

## Related
- [TCP](/features/tcp.md)
- [User Datagram Protocol (UDP)](/features/udp.md)
- [Secure Shell (SSH)](/features/ssh.md)

