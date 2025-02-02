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
+ local variables



.. code-block:: php
   
   <?php
   
   function foo($i = 0) : int {
       return $i + 1;
   }
   
   ?>


See also https://tomasvotruba.com/blog/how-to-measure-your-type-coverage

Related : :ref:`Type System <type>`, :ref:`Coverage <coverage>`

Related packages : `tomasvotruba/type-coverage <https://packagist.org/packages/tomasvotruba/type-coverage>`_
