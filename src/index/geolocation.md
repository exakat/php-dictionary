# Geolocation
Geolocation is the process of determining the real-world physical location of a device, a user, or a piece of content. On the web, a browser can report a device's coordinates directly through the HTML5 Geolocation API, using GPS, Wi-Fi positioning, or cell-tower triangulation, and a PHP backend then simply receives and stores the latitude and longitude sent by client-side JavaScript. When no device-reported coordinates are available, an approximate location can instead be inferred server-side from the visitor's IP address, a technique known as GeoIP. Typical uses in PHP applications include localizing content and currency, restricting or redirecting access by country, pre-filling shipping addresses, powering store-locator features, and enriching analytics or fraud-detection signals with a rough location.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/geolocation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/geolocation.html","name":"Geolocation","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 02 Sep 2026 10:23:17 +0000","dateModified":"Wed, 02 Sep 2026 10:23:17 +0000","description":"Geolocation is the process of determining the real-world physical location of a device, a user, or a piece of content","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/geolocation.html"]}],"alternateName":["geolocalisation","geoposition","geopositioning"],"keywords":["concept","web","network"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/geoip.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ip.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/locale.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Geolocation"},{"@type":"CreativeWork","name":"IP address geolocation in PHP","url":"https:\/\/ipinfo.io\/blog\/ip-geolocation-in-php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"geolocation"}]}]}</script>
```php
<?php

// Coordinates sent by the browser's navigator.geolocation API as POST fields
$latitude  = (float) ($_POST['latitude']  ?? 0);
$longitude = (float) ($_POST['longitude'] ?? 0);

if ($latitude !== 0.0 && $longitude !== 0.0) {
    echo "User is near {$latitude}, {$longitude}";
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Geolocation)**
## See Also

+ [IP address geolocation in PHP](https://ipinfo.io/blog/ip-geolocation-in-php)

## Related

+ [GeoIP](geoip.html)
+ [Internet Protocol (IP)](ip.html)
+ [Locale](locale.html)
