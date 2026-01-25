.. _type-coverage:
.. meta::
	:description:
		Type Coverage: Type coverage reports how much of the PHP code has types.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Type Coverage
	:twitter:description: Type Coverage: Type coverage reports how much of the PHP code has types
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Type Coverage
	:og:type: article
	:og:description: Type coverage reports how much of the PHP code has types
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/type-coverage.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Type Coverage","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 12:49:55 +0000","dateModified":"Thu, 22 Jan 2026 12:49:55 +0000","description":"Type coverage reports how much of the PHP code has types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Type Coverage.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Type Coverage
-------------

Type coverage reports how much of the PHP code has types. The elements that can be typed are: 

+ arguments in methods
+ return type
+ properties
+ class constants

Some elements cannot be typed: 

+ arrays
+ lexical variables
+ yield values
+ local variables.

.. code-block:: php
   
   <?php
   
   function foo($i = 0) : int {
       return $i + 1;
   }
   
   ?>


See also https://tomasvotruba.com/blog/how-to-measure-your-type-coverage

Related : :ref:`Type System <type>`, :ref:`Coverage <coverage>`

Related packages : `tomasvotruba/type-coverage <https://packagist.org/packages/tomasvotruba/type-coverage>`_
