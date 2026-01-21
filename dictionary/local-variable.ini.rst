.. _local-variable:
.. meta::
	:description:
		Local Variable: A local variable is a variable in a method or a function.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Local Variable
	:twitter:description: Local Variable: A local variable is a variable in a method or a function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Local Variable
	:og:type: article
	:og:description: A local variable is a variable in a method or a function
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/local-variable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot mix keyed and unkeyed array entries in assignments.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot mix keyed and unkeyed array entries in assignments.html","name":"Local Variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:11:49 +0000","dateModified":"Mon, 19 Jan 2026 14:11:49 +0000","description":"A local variable is a variable in a method or a function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Local Variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Local Variable
--------------

A local variable is a variable in a method or a function. It is in the local scope, and is not available anywhere else.

A local variable is created by assigning it a value in a method, using the ``static`` keyword, or using the extract() function. It might be removed by the ``unset()`` function.

.. code-block:: php
   
   <?php
   
   function foo() {
       $localVariable = 1;
       // ... more code
   }
   
   function goo() {
       // this variable is distinct from the one in foo()
       $localVariable = 2;
       // ... more code
   }
   
   ?>


Related : :ref:`Static Variables <static-variable>`, :ref:`extract() <extract>`, :ref:`unset() <unset>`
