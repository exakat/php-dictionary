.. _control-flow-graph:
.. meta::
	:description:
		Control Flow Graph: The Control Flow Graph is a logical representation of the execution of a source code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Control Flow Graph
	:twitter:description: Control Flow Graph: The Control Flow Graph is a logical representation of the execution of a source code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Control Flow Graph
	:og:type: article
	:og:description: The Control Flow Graph is a logical representation of the execution of a source code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/control-flow-graph.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Control Flow Graph","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 30 Mar 2026 19:40:55 +0000","dateModified":"Mon, 30 Mar 2026 19:40:55 +0000","description":"The Control Flow Graph is a logical representation of the execution of a source code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Control Flow Graph.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Control Flow Graph
------------------

The Control Flow Graph is a logical representation of the execution of a source code. It takes into account the path that follow the execution in the source, including:

+ sequential execution: one command at a time
+ goto jumps: from one part of the code to another one
+ branching: where one of two or more sequence of actions are exclusively executed, depending on conditions
+ looping: where the same piece of code is executed recurringly. 

Control Flow Graph is used in code analysis, to audit the modifications of data.

`Documentation <https://www.geeksforgeeks.org/software-engineering/software-engineering-control-flow-graph-cfg/>`__

Related : :ref:`Static Single Assignment Form (SSA) <ssa>`
