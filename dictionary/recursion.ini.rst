.. _recursion:
.. _recursive:
.. _infinite-recursion:
.. meta::
	:description:
		Recursion: Recursion is a method or a function which calls itself.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Recursion
	:twitter:description: Recursion: Recursion is a method or a function which calls itself
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Recursion
	:og:type: article
	:og:description: Recursion is a method or a function which calls itself
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/recursion.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Recursion","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:04:15 +0000","dateModified":"Sat, 11 Jul 2026 09:04:15 +0000","description":"Recursion is a method or a function which calls itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Recursion.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Recursion
---------

Recursion is a method or a function which calls itself. 

While the method calls itself, it also must have branch where it doesnot call itself: otherwise, the call will never end and result in infinite recursion.

Functions, methods, closures and arrowfunctions may be recursive.

Recursion is an abstract notion. It is also used in the PHP name itself: ``PHP: Hypertext Preprocessor``.

.. code-block:: php
   
   <?php
   
       function factorial(int $number) { 
           if ($number < 2) { 
               return 1; 
           }
       
           return ($number * factorial($number - 1)); 
       }
       
       // recursive closure
       $factorial = function( $n ) use ( &$factorial ) {
           if( $n == 1 ) return 1;
           return $factorial( $n - 1 ) * $n;
       };
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Recursion>`__

See also `All the recursive Functions in PHP <https://www.exakat.io/all-the-recursive-functions-in-php/>`_.

Related : :ref:`Functions <function>`, :ref:`DirectoryIterator <directoryiterator>`, :ref:`Recursive Array <recursive-array>`, :ref:`RecursiveArrayIterator <recursivearrayiterator>`, :ref:`Arrow Functions <arrow-function>`, :ref:`Method <method>`, :ref:`Closure <closure>`, :ref:`Infinite <infinite>`
