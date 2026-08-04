.. _rdf:
.. _resource-description-framework:
.. meta::
	:description:
		RDF (Resource Description Framework): RDF, Resource Description Framework, is a W3C standard model for describing and exchanging data on the Web.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: RDF (Resource Description Framework)
	:twitter:description: RDF (Resource Description Framework): RDF, Resource Description Framework, is a W3C standard model for describing and exchanging data on the Web
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: RDF (Resource Description Framework)
	:og:type: article
	:og:description: RDF, Resource Description Framework, is a W3C standard model for describing and exchanging data on the Web
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/rdf.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/rdf.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/rdf.ini.html","name":"RDF (Resource Description Framework)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 02 Aug 2026 19:56:14 +0000","dateModified":"Sun, 02 Aug 2026 19:56:14 +0000","description":"RDF, Resource Description Framework, is a W3C standard model for describing and exchanging data on the Web","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/RDF (Resource Description Framework).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


RDF (Resource Description Framework)
------------------------------------

RDF, Resource Description Framework, is a W3C standard model for describing and exchanging data on the Web. Data is expressed as triples of the form subject-predicate-object, such as 'PHP hasType Language', which together form a directed graph of statements.

RDF underpins the Semantic Web and Linked Data initiatives: resources are identified by URIs, statements can be serialized in several formats such as RDF/XML, Turtle, N-Triples and JSON-LD, and collections of triples are queried with SPARQL.

Libraries such as EasyRdf provide an API to parse, build, and serialize RDF data, and to query a remote or local triple store.

.. code-block:: php
   
   <?php
   
       $graph = new EasyRdf\Graph('http://example.com/data');
       $graph->add('http://example.com/data#me', 'foaf:name', 'Alice');
       echo $graph->serialise('turtle');
   
   ?>


`Documentation <https://www.w3.org/RDF/>`__

See also `RDF 1.1 Primer <https://www.w3.org/TR/rdf11-primer/>`_ and `EasyRdf <https://www.easyrdf.org/>`_.

Related : :ref:`RDF Triple Store <rdf-triple-store>`, :ref:`Triple <triple>`, :ref:`SPARQL <sparql>`, :ref:`Graph Database <graph-database>`, :ref:`Semantic Analysis <semantic-analysis>`, :ref:`Extensible Markup Language (XML) <xml>`

Related packages : `easyrdf/easyrdf <https://packagist.org/packages/easyrdf/easyrdf>`_
