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

## See Also

+ [Domain Name System](https://en.wikipedia.org/wiki/Domain_Name_System)

Related : [Universal Resource Locator (URL)](Universal Resource Locator (URL)), [Domain Name System (DNS)](Domain Name System (DNS)), [Hyper Text Transfer Protocol (HTTP)](Hyper Text Transfer Protocol (HTTP)), [parse_url()](parse_url()), [Domain](Domain), [SplSubject](SplSubject)
