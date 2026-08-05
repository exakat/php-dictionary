# RDF Triple Store
An RDF triple store is a database purpose-built to store and query RDF, Resource Description Framework, data: statements made of a subject, a predicate, and an object, such as 'Alice knows Bob'. A collection of triples naturally forms a graph, which is queried with SPARQL, RDF's dedicated query language, instead of SQL.

Triple stores are the backbone of Semantic Web and Linked Data applications, and of many knowledge-graph systems: they excel at representing loosely structured, highly interconnected data, and at answering questions involving arbitrary chains of relationships, which tend to be costly to express as a series of SQL joins.

Popular triple stores include Apache Jena / Fuseki, Virtuoso, Blazegraph and GraphDB; libraries, such as EasyRdf, exist to build RDF data and query a triple store over HTTP.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/rdf-triple-store.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/rdf-triple-store.ini.html","name":"RDF Triple Store","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 08:16:27 +0000","dateModified":"Mon, 03 Aug 2026 08:16:27 +0000","description":"An RDF triple store is a database purpose-built to store and query RDF, Resource Description Framework, data: statements made of a subject, a predicate, and an object, such as 'Alice knows Bob'","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/RDF Triple Store.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://www.w3.org/RDF/)**
## See Also

+ [SPARQL Query Language 1.2](https://www.w3.org/TR/sparql12-query/)

## Related

+ [Triple](triple.ini.html)
+ [SPARQL](sparql.ini.html)

## Related packages

+ [easyrdf/easyrdf](https://packagist.org/packages/easyrdf/easyrdf)
