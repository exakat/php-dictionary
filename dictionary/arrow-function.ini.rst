.. _arrow-function:
.. _fn:
.. meta::
	:description:
		Arrow Functions: Arrow functions are a type of closure with a specific syntax.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Arrow Functions
	:twitter:description: Arrow Functions: Arrow functions are a type of closure with a specific syntax
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Arrow Functions
	:og:type: article
	:og:description: Arrow functions are a type of closure with a specific syntax
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/arrow-function.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Arrow Functions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"Arrow functions are a type of closure with a specific syntax","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Arrow Functions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Arrow Functions
---------------

Arrow functions are a type of closure with a specific syntax. It only accepts one expression, and automatically imports all the variables from the local context of definition. 

Arrow functions may also be marked as ``static``, to prevent this import.

.. code-block:: php
   
   <?php
   
       class X {
           private int $p = 2;
           
           function foo() {
              $b = 10;
              $fn = fn($a) => $a + $b + 2;
              
              $fn = static fn($a) => $a + $b + $this->p;
   
              // $this is not allowed in static arrow function
              $fn = static fn($a) => $a + $b + $this->p;
           }
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arrow.php>`__

See also https://drops-of-php.hi-folks.dev/functions/arrow/#_top, https://dev.to/eddiegoldman/php-arrow-functions-simple-short-and-effective-3lb5, https://oatllo.com/course/php/function/php-variable-scope-guide

Related : :ref:`static <static>`, :ref:`$this <$this>`, :ref:`Functions <function>`, :ref:`Closure <closure>`, :ref:`Anonymous Function <anonymous-function>`, :ref:`First Class Callable <first-class-callable>`, :ref:`Callables <callable>`, :ref:`Callbacks <callback>`

Added in PHP 7.4
