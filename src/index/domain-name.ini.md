# Domain Name
A domain name is a human-readable label that identifies a network resource, such as a web server. It is mapped to an IP address through the Domain Name System DNS.

Domain names appear in URLs, are parsed with ``parse_url()``, and validated with the ``filter`` extension using ``FILTER_VALIDATE_DOMAIN``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/domain-name.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/domain-name.ini.html","name":"Domain Name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:41:47 +0000","dateModified":"Fri, 10 Jul 2026 09:41:47 +0000","description":"A domain name is a human-readable label that identifies a network resource, such as a web server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Domain Name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $host = parse_url('https://www.example.com/path', PHP_URL_HOST);
    // $host = 'www.example.com'
    
    $isValid = filter_var('example.com', FILTER_VALIDATE_DOMAIN);

?>
```

**[Documentation](https://www.php.net/manual/en/function.parse-url.php)**
## See Also

+ [Domain Name System](https://en.wikipedia.org/wiki/Domain_Name_System)

## Related

+ [Universal Resource Locator (URL)](url.ini.html)
+ [Domain Name System (DNS)](dns.ini.html)
+ [Hyper Text Transfer Protocol (HTTP)](http.ini.html)
+ [parse\_url()](parse_url.ini.html)
+ [Domain](domain.ini.html)
+ [SplSubject](splsubject.ini.html)
