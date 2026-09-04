# JSON-LD
JSON-LD, short for JSON for Linking Data, is a W3C standard serialization format for RDF: it lets ordinary JSON, the format most PHP applications already produce and consume, carry linked-data meaning by adding a small number of reserved keywords, most notably @context, which maps the document's plain property names to globally unique URIs, and @id and @type, which identify a resource and its class. Because a JSON-LD document is still syntactically valid JSON, it can be parsed with ``json_decode()`` like any other payload, while tools built for linked data can additionally interpret it as a graph of RDF triples, expand or compact it against different contexts, or convert it to other RDF serializations such as Turtle or N-Quads. The lanthaler/JsonLD library provides a fully conforming JSON-LD processor implementing the official expansion, compaction, flattening, and framing algorithms, plus an object-oriented API for building and querying documents programmatically, and it is commonly paired with libraries like EasyRdf when a full RDF toolchain is needed. Its most common real-world use in web applications is embedding structured data inside a ``<script type="application/ld+json">`` tag so that search engines and other crawlers can understand a page's content, such as a product, an article, or an event, without needing to parse the visible HTML.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json-ld.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json-ld.html","name":"JSON-LD","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 03 Sep 2026 09:05:06 +0000","dateModified":"Thu, 03 Sep 2026 09:05:06 +0000","description":"JSON-LD, short for JSON for Linking Data, is a W3C standard serialization format for RDF: it lets ordinary JSON, the format most PHP applications already produce and consume, carry linked-data meaning by adding a small number of reserved keywords, most notably @context, which maps the document's plain property names to globally unique URIs, and @id and @type, which identify a resource and its class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json-ld.html"]}],"alternateName":["jsonld"],"keywords":["standard","format","semantic-web","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json_decode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rdf.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.w3.org\/TR\/json-ld11\/"},{"@type":"CreativeWork","name":"lanthaler\/JsonLD","url":"https:\/\/github.com\/lanthaler\/JsonLD"},{"@type":"CreativeWork","name":"JSON-LD home","url":"https:\/\/json-ld.org\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"json-ld"}]}]}</script>
```php
<?php

    $document = (object) [
        '@context' => 'https://schema.org',
        '@type'    => 'Article',
        'headline' => 'Understanding JSON-LD',
        'author'   => (object) ['@type' => 'Person', 'name' => 'Ada Lovelace'],
    ];
    
    echo json_encode($document, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

?>
```

**[Documentation](https://www.w3.org/TR/json-ld11/)**
## See Also

+ [lanthaler/JsonLD](https://github.com/lanthaler/JsonLD)
+ [JSON-LD home](https://json-ld.org/)

## Related

+ [JavaScript Object Notation (JSON)](json.html)
+ [json\_decode()](json_decode.html)
+ [RDF (Resource Description Framework)](rdf.html)

## Related packages

+ [ml/json-ld](https://packagist.org/packages/ml/json-ld)
