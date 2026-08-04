# RDF Triple Store
An RDF triple store is a database purpose-built to store and query RDF, Resource Description Framework, data: statements made of a subject, a predicate, and an object, such as 'Alice knows Bob'. A collection of triples naturally forms a graph, which is queried with SPARQL, RDF's dedicated query language, instead of SQL.

Triple stores are the backbone of Semantic Web and Linked Data applications, and of many knowledge-graph systems: they excel at representing loosely structured, highly interconnected data, and at answering questions involving arbitrary chains of relationships, which tend to be costly to express as a series of SQL joins.

Popular triple stores include Apache Jena / Fuseki, Virtuoso, Blazegraph and GraphDB; libraries, such as EasyRdf, exist to build RDF data and query a triple store over HTTP.
## See Also

+ [SPARQL Query Language 1.2](https://www.w3.org/TR/sparql12-query/)

Related : [Triple](Triple), [SPARQL](SPARQL)
