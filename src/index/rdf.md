# RDF (Resource Description Framework)
RDF, Resource Description Framework, is a W3C standard model for describing and exchanging data on the Web. Data is expressed as triples of the form subject-predicate-object, such as 'PHP hasType Language', which together form a directed graph of statements.

RDF underpins the Semantic Web and Linked Data initiatives: resources are identified by URIs, statements can be serialized in several formats such as RDF/XML, Turtle, N-Triples and JSON-LD, and collections of triples are queried with SPARQL.

Libraries such as EasyRdf provide an API to parse, build, and serialize RDF data, and to query a remote or local triple store.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/rdf.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/rdf.html","name":"RDF (Resource Description Framework)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 19:56:14 +0000","dateModified":"Sun, 02 Aug 2026 19:56:14 +0000","description":"RDF, Resource Description Framework, is a W3C standard model for describing and exchanging data on the Web","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/RDF (Resource Description Framework).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $graph = new EasyRdf\Graph('http://example.com/data');
    $graph->add('http://example.com/data#me', 'foaf:name', 'Alice');
    echo $graph->serialise('turtle');

?>
```

**[Documentation](https://www.w3.org/RDF/)**
## See Also

+ [RDF 1.1 Primer](https://www.w3.org/TR/rdf11-primer/)
+ [EasyRdf](https://www.easyrdf.org/)

## Related

+ [RDF Triple Store](rdf-triple-store.ini.html)
+ [Triple](triple.ini.html)
+ [SPARQL](sparql.ini.html)
+ [Graph Database](graph-database.ini.html)
+ [Semantic Analysis](semantic-analysis.ini.html)
+ [Extensible Markup Language (XML)](xml.ini.html)

## Related packages

+ [easyrdf/easyrdf](https://packagist.org/packages/easyrdf/easyrdf)
