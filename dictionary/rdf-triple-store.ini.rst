.. _rdf-triple-store:
.. _triplestore:
.. _triple-store:
.. meta::
	:description:
		RDF Triple Store: An RDF triple store is a database purpose-built to store and query RDF, Resource Description Framework, data: statements made of a subject, a predicate, and an object, such as 'Alice knows Bob'.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: RDF Triple Store
	:twitter:description: RDF Triple Store: An RDF triple store is a database purpose-built to store and query RDF, Resource Description Framework, data: statements made of a subject, a predicate, and an object, such as 'Alice knows Bob'
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: RDF Triple Store
	:og:type: article
	:og:description: An RDF triple store is a database purpose-built to store and query RDF, Resource Description Framework, data: statements made of a subject, a predicate, and an object, such as 'Alice knows Bob'
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/rdf-triple-store.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"RDF Triple Store","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 10:27:53 +0000","dateModified":"Thu, 09 Jul 2026 10:27:53 +0000","description":"An RDF triple store is a database purpose-built to store and query RDF, Resource Description Framework, data: statements made of a subject, a predicate, and an object, such as 'Alice knows Bob'","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/RDF Triple Store.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


RDF Triple Store
----------------

An RDF triple store is a database purpose-built to store and query RDF, Resource Description Framework, data: statements made of a subject, a predicate, and an object, such as 'Alice knows Bob'. A collection of triples naturally forms a graph, which is queried with SPARQL, RDF's dedicated query language, instead of SQL.

Triple stores are the backbone of Semantic Web and Linked Data applications, and of many knowledge-graph systems: they excel at representing loosely structured, highly interconnected data, and at answering questions involving arbitrary chains of relationships, which tend to be costly to express as a series of SQL joins.

Popular triple stores include Apache Jena / Fuseki, Virtuoso, Blazegraph and GraphDB; libraries, such as EasyRdf, exist to build RDF data and query a triple store over HTTP.

`Documentation <https://www.w3.org/RDF/>`__

See also `RDF - Resource Description Framework <https://www.w3.org/RDF/>`_ and `SPARQL Query Language <https://www.w3.org/TR/sparql11-query/>`_.

Related : :ref:`Triple <triple>`, 

Related packages : `easyrdf/easyrdf <https://packagist.org/packages/easyrdf/easyrdf>`_
