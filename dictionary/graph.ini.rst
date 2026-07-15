.. _graph:
.. meta::
	:description:
		Graph: A graph is a data structure consisting of a set of nodes, also called vertices, and edges that connect pairs of nodes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Graph
	:twitter:description: Graph: A graph is a data structure consisting of a set of nodes, also called vertices, and edges that connect pairs of nodes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Graph
	:og:type: article
	:og:description: A graph is a data structure consisting of a set of nodes, also called vertices, and edges that connect pairs of nodes
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/graph.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/graph.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/graph.ini.html","name":"Graph","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A graph is a data structure consisting of a set of nodes, also called vertices, and edges that connect pairs of nodes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Graph.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Graph
-----

A graph is a data structure consisting of a set of nodes, also called vertices, and edges that connect pairs of nodes. Graphs can be directed or undirected, weighted or unweighted.

Graphs are used to model many real-world problems: social networks, dependency trees, network topology, and code analysis tools such as call graphs and control flow graphs.

PHP has no built-in graph data structure, but several libraries provide graph implementations and algorithms.

.. code-block:: php
   
   <?php
   
   // Simple adjacency list representation
   $graph = [
       'A' => ['B', 'C'],
       'B' => ['A', 'D'],
       'C' => ['A'],
       'D' => ['B'],
   ];
   
   // Traverse neighbors of A
   foreach ($graph['A'] as $neighbor) {
       echo $neighbor, PHP_EOL; // B, C
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Graph_(abstract_data_type)>`__

Related : :ref:`Call Graph <call-graph>`, :ref:`Control Flow Graph (CFG) <control-flow-graph>`, :ref:`Graph Database <graph-database>`, :ref:`GraphQL <graphql>`, :ref:`Tree <tree>`, :ref:`Network <network>`, :ref:`Treemap <treemap>`

Related packages : `graphp/graph <https://packagist.org/packages/graphp/graph>`_
