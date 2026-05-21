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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Type Coverage","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 19 May 2026 05:51:40 +0000","dateModified":"Tue, 19 May 2026 05:51:40 +0000","description":"Type coverage reports how much of the PHP code has types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Type Coverage.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Type Coverage
-------------

Type coverage reports how much of the PHP code has types. The elements that can be typed are: 

+ Arguments in methods
+ Return type
+ Properties
+ Class constants

Some elements cannot be typed: 

+ Arrays
+ Lexical variables
+ Yield values
+ Local variables.

Type coverage is used as a metrics, to ensure that every line of code is used at least once during the tests. While it is a necessary feature, this is not always sufficient to ensure that the application is well tested, as lines of code are reused in several situations, and would require multiple tests.

.. code-block:: php
   
   <?php
   
       function foo($i = 0) : int {
           return $i + 1;
       }
   
   ?>


See also `How to Measure Your Type Coverage <https://tomasvotruba.com/blog/how-to-measure-your-type-coverage>`_, `phpunit/php-code-coverage <https://github.com/sebastianbergmann/php-code-coverage>`_ and `PHP code coverage tool <https://php.watch/articles/php-code-coverage-comparison>`_.

Related : :ref:`Type System <type>`, :ref:`Coverage <coverage>`

Related packages : `tomasvotruba/type-coverage <https://packagist.org/packages/tomasvotruba/type-coverage>`_
