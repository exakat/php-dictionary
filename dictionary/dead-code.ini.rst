.. _dead-code:
.. _unused-code:
.. meta::
	:description:
		Dead Code: Dead code refers to sections of code that are no longer executed or reachable during the program's execution.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dead Code
	:twitter:description: Dead Code: Dead code refers to sections of code that are no longer executed or reachable during the program's execution
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dead Code
	:og:type: article
	:og:description: Dead code refers to sections of code that are no longer executed or reachable during the program's execution
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dead-code.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Dead Code","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 11:11:32 +0000","dateModified":"Mon, 26 Jan 2026 11:11:32 +0000","description":"Dead code refers to sections of code that are no longer executed or reachable during the program's execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dead Code.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dead Code
---------

Dead code refers to sections of code that are no longer executed or reachable during the program's execution. It includes any lines or blocks of code that do not contribute to the program's functionality or produce any observable results. Dead code can be the result of code modifications, changes in requirements, or mistakes during development.

Dead code is also known as unused code. It happens to any defined structure. Variables, methods, functions, classes, interfaces, etc..

.. code-block:: php
   
   <?php
   
   // bar is dead code : never executed
   function bar() { echo 'World'; }
   
   // foo() is alive code : it is executed
   function foo() { echo 'Hello'; }
   
   echo foo();
   ?>


See also https://understandlegacycode.com/blog/delete-unused-code/

Related : :ref:`Zombie Code <zombie-code>`
