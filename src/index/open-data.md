# Open Data
Open data is information, often collected or produced by public bodies, that is made freely available for anyone to access, use, and redistribute, usually under a permissive or open license and with no more than a reasonable reproduction cost.

To qualify as open, data must also be published in a structured, machine-readable format, such as ``CSV``, ``JSON``, or ``XML``, so that it can be processed automatically rather than only read by a human. It is frequently exposed through a public API alongside static file downloads.

PHP applications typically consume open data with an HTTP client, such as ``curl`` or Guzzle, and then parse the response with native functions like ``json_decode()``, or with ``SplFileObject`` for CSV feeds.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/open-data.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/open-data.html","name":"Open Data","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:22:34 +0000","dateModified":"Mon, 17 Aug 2026 09:22:34 +0000","description":"Open data is information, often collected or produced by public bodies, that is made freely available for anyone to access, use, and redistribute, usually under a permissive or open license and with no more than a reasonable reproduction cost","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/open-data.html"]}],"keywords":["concept","data"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dataset.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/csv.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json_decode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/api.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/opendatahandbook.org\/guide\/en\/what-is-open-data\/"},{"@type":"CreativeWork","name":"What is open data","url":"https:\/\/data.europa.eu\/en\/dataeuropa-academy\/what-open-data"},{"@type":"CreativeWork","name":"The 8 Principles of Open Government Data","url":"https:\/\/opengovdata.org\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"open-data"}]}]}</script>
```php
<?php

    $json = file_get_contents('https://data.example.gov/api/dataset.json');
    $dataset = json_decode($json, true);

    foreach ($dataset['records'] as $record) {
        echo $record['name'] . PHP_EOL;
    }

?>
```

**[Documentation](https://opendatahandbook.org/guide/en/what-is-open-data/)**
## See Also

+ [What is open data](https://data.europa.eu/en/dataeuropa-academy/what-open-data)
+ [The 8 Principles of Open Government Data](https://opengovdata.org/)

## Related

+ [Data](data.html)
+ [Dataset](dataset.html)
+ [Comma Separated Values (CSV)](csv.html)
+ [json\_decode()](json_decode.html)
+ [Application Programming Interface (API)](api.html)
