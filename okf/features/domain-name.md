---
type: "PHP Feature"
title: "Domain Name"
description: "A domain name is a human-readable label that identifies a network resource, such as a web server."
resource: "https://www.php.net/manual/en/function.parse-url.php"
tags: ["network", "internet", "url", "dns", "hosting"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Domain Name

A domain name is a human-readable label that identifies a network resource, such as a web server. It is mapped to an IP address through the Domain Name System DNS.

Domain names appear in URLs, are parsed with ``parse_url()``, and validated with the ``filter`` extension using ``FILTER_VALIDATE_DOMAIN``.

```php
<?php

    $host = parse_url('https://www.example.com/path', PHP_URL_HOST);
    // $host = 'www.example.com'
    
    $isValid = filter_var('example.com', FILTER_VALIDATE_DOMAIN);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.parse-url.php](https://www.php.net/manual/en/function.parse-url.php)

## See Also
- [Domain Name System](https://en.wikipedia.org/wiki/Domain_Name_System)

## Related
- [Universal Resource Locator (URL)](/features/url.md)
- [Domain Name System (DNS)](/features/dns.md)
- [Hyper Text Transfer Protocol (HTTP)](/features/http.md)
- [parse_url()](/features/parse_url.md)
- [Domain](/features/domain.md)
- [SplSubject](/features/splsubject.md)

