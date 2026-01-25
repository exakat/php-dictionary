.. _stubs:
.. meta::
	:description:
		Stubs Files: Stubs files are PHP code, that contains only the definitions of classic PHP structures (functions, constants, classes, interfaces), without any actual code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Stubs Files
	:twitter:description: Stubs Files: Stubs files are PHP code, that contains only the definitions of classic PHP structures (functions, constants, classes, interfaces), without any actual code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Stubs Files
	:og:type: article
	:og:description: Stubs files are PHP code, that contains only the definitions of classic PHP structures (functions, constants, classes, interfaces), without any actual code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/stubs.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Stubs Files","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 12:47:20 +0000","dateModified":"Thu, 22 Jan 2026 12:47:20 +0000","description":"Stubs files are PHP code, that contains only the definitions of classic PHP structures (functions, constants, classes, interfaces), without any actual code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Stubs Files.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Stubs Files
-----------

Stubs files are PHP code, that contains only the definitions of classic PHP structures (functions, constants, classes, interfaces), without any actual code. They only provide the definitions.

Stubs files are also used for PHP code templates : they are mostly made of PHP code, with placeholders, for later generations.

.. code-block:: php
   
   <?php
   
   $a = 0; // $a is getting overwritten
   $array = extract(['a' => 1, 'b' => 2]);
   
   echo $a + $b; // 2
   ?>


`Documentation <https://www.php.net/manual/en/function.extract.php>`__

Related : :ref:`compact() <compact>`
