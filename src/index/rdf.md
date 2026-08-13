# RDF (Resource Description Framework)
RDF, Resource Description Framework, is a W3C standard model for describing and exchanging data on the Web. Data is expressed as triples of the form subject-predicate-object, such as 'PHP hasType Language', which together form a directed graph of statements.

RDF underpins the Semantic Web and Linked Data initiatives: resources are identified by URIs, statements can be serialized in several formats such as RDF/XML, Turtle, N-Triples and JSON-LD, and collections of triples are queried with SPARQL.

Libraries such as EasyRdf provide an API to parse, build, and serialize RDF data, and to query a remote or local triple store.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rdf.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rdf.html","name":"RDF (Resource Description Framework)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 19:56:14 +0000","dateModified":"Sun, 02 Aug 2026 19:56:14 +0000","description":"RDF, Resource Description Framework, is a W3C standard model for describing and exchanging data on the Web","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/RDF (Resource Description Framework).html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"rdf"}]}]}</script>
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

+ [RDF Triple Store](rdf-triple-store.html)
+ [Triple](triple.html)
+ [SPARQL](sparql.html)
+ [Graph Database](graph-database.html)
+ [Semantic Analysis](semantic-analysis.html)
+ [Extensible Markup Language (XML)](xml.html)

## Related packages

+ [easyrdf/easyrdf](https://packagist.org/packages/easyrdf/easyrdf)
