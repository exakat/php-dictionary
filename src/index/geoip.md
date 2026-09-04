# GeoIP
GeoIP is the technique of resolving an IP address to an approximate geographic location, typically a country, region, or city, by looking it up in a database that maps IP address ranges to places, such as MaxMind's GeoLite2 and GeoIP2 databases. PHP historically offered a dedicated geoip PECL extension for querying these lookups natively, but it has since been unbundled and is largely obsolete; modern PHP code instead uses a library such as geoip2/geoip2, which reads a local .mmdb database file, or calls a third-party HTTP API. Because the mapping is based on network allocation records rather than the device itself, GeoIP results are only approximate, accurate at the country level most of the time but often unreliable at the city level, and can be thrown off entirely by VPNs, proxies, or mobile carrier NAT. It is commonly used for content localization, geo-blocking, fraud scoring, and rough analytics, but should not be relied on where precise location is required.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/geoip.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/geoip.html","name":"GeoIP","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 02 Sep 2026 15:00:24 +0000","dateModified":"Wed, 02 Sep 2026 15:00:24 +0000","description":"GeoIP is the technique of resolving an IP address to an approximate geographic location, typically a country, region, or city, by looking it up in a database that maps IP address ranges to places, such as MaxMind's GeoLite2 and GeoIP2 databases","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/geoip.html"]}],"alternateName":["geo-ip","ip-geolocation"],"keywords":["extension","network","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/geolocation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ip.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/curl.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.geoip.php"},{"@type":"CreativeWork","name":"How to Geolocate an IP Address with PHP: The Ultimate Guide","url":"https:\/\/www.abstractapi.com\/guides\/ip-geolocation\/how-to-geolocate-an-ip-address-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"geoip"}]}]}</script>
```php
<?php

    use GeoIp2\Database\Reader;
    
    $reader = new Reader('/path/to/GeoLite2-City.mmdb');
    $record = $reader->city('128.101.101.101');
    
    echo $record->country->isoCode;   // 'US'
    echo $record->city->name;         // 'Minneapolis'

?>
```

**[Documentation](https://www.php.net/manual/en/book.geoip.php)**
## See Also

+ [How to Geolocate an IP Address with PHP: The Ultimate Guide](https://www.abstractapi.com/guides/ip-geolocation/how-to-geolocate-an-ip-address-in-php)

## Related

+ [Geolocation](geolocation.html)
+ [Internet Protocol (IP)](ip.html)
+ [Client URL (CURL)](curl.html)

## Related packages

+ [geoip2/geoip2](https://packagist.org/packages/geoip2/geoip2)
