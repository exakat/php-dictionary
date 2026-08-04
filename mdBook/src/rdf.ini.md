# RDF (Resource Description Framework)
RDF, Resource Description Framework, is a W3C standard model for describing and exchanging data on the Web. Data is expressed as triples of the form subject-predicate-object, such as 'PHP hasType Language', which together form a directed graph of statements.

RDF underpins the Semantic Web and Linked Data initiatives: resources are identified by URIs, statements can be serialized in several formats such as RDF/XML, Turtle, N-Triples and JSON-LD, and collections of triples are queried with SPARQL.

Libraries such as EasyRdf provide an API to parse, build, and serialize RDF data, and to query a remote or local triple store.
```php
<?php

    $graph = new EasyRdf\Graph('http://example.com/data');
    $graph->add('http://example.com/data#me', 'foaf:name', 'Alice');
    echo $graph->serialise('turtle');

?>
```

## See Also

+ [RDF 1.1 Primer](https://www.w3.org/TR/rdf11-primer/)
+ [EasyRdf](https://www.easyrdf.org/)

Related : [RDF Triple Store](RDF Triple Store), [Triple](Triple), [SPARQL](SPARQL), [Graph Database](Graph Database), [Semantic Analysis](Semantic Analysis), [Extensible Markup Language (XML)](Extensible Markup Language (XML))
