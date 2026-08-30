---
type: "PHP Feature"
title: "SPARQL"
description: "``SPARQL`` is a query language for RDF, Resource Description Framework, data stores."
resource: "https://www.w3.org/TR/sparql11-overview/"
tags: ["query language", "database"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# SPARQL

``SPARQL`` is a query language for RDF, Resource Description Framework, data stores.

``SPARQL`` is used to query and manipulate data stored in RDF format, which represents information as subject-predicate-object triples.

PHP has libraries for interacting with ``SPARQL`` endpoints and RDF databases.

```php
<?php

    use BorderCloud\SPARQL\SparqlClient;
    
    $endpoint = "https://query.example.com/sparql";
    $sc = new SparqlClient();
    $sc->setEndpointRead($endpoint);
    //$sc->setMethodHTTPRead("GET");
    $q = "select *  where {?x ?y ?z.} LIMIT 5";
    $rows = $sc->query($q, 'rows');
    $err = $sc->getErrors();
    if ($err) {
        print_r($err);
        throw new Exception(print_r($err, true));
    }
    
    foreach ($rows["result"]["variables"] as $variable) {
        printf("%-20.20s", $variable);
        echo '|';
    }
    echo "\n";

?>
```

## Documentation
- [https://www.w3.org/TR/sparql11-overview/](https://www.w3.org/TR/sparql11-overview/)

## See Also
- [SPARQL 1.1 Query Language](https://www.w3.org/TR/sparql11-query/)
- [SPARQL Query Language 1.2](https://www.w3.org/TR/sparql12-query/)

## Related
- [Query](/features/query.md)
- [RDF Triple Store](/features/rdf-triple-store.md)
- [RDF (Resource Description Framework)](/features/rdf.md)
- [Graph Database](/features/graph-database.md)
- [Nosql Database](/features/nosql-database.md)

## Details
- Packagist: [easyrdf/easyrdf](https://packagist.org/packages/easyrdf/easyrdf)
- Packagist: [madbob/sparqler](https://packagist.org/packages/madbob/sparqler)

