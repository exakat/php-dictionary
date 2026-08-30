---
type: "acronym"
title: "RDF (Resource Description Framework)"
description: "RDF, Resource Description Framework, is a W3C standard model for describing and exchanging data on the Web."
resource: "https://www.w3.org/RDF/"
tags: ["standard", "semantic-web", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.w3.org/RDF/](https://www.w3.org/RDF/)

## See Also
- [RDF 1.1 Primer](https://www.w3.org/TR/rdf11-primer/)
- [EasyRdf](https://www.easyrdf.org/)

## Related
- [RDF Triple Store](/features/rdf-triple-store.md)
- [Triple](/features/triple.md)
- [SPARQL](/features/sparql.md)
- [Graph Database](/features/graph-database.md)
- [Semantic Analysis](/features/semantic-analysis.md)
- [Extensible Markup Language (XML)](/features/xml.md)

## Details
- Packagist: [easyrdf/easyrdf](https://packagist.org/packages/easyrdf/easyrdf)

