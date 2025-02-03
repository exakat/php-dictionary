.. _special-type:
.. _special-typehint:
.. meta::
	:description:
		Special Types: PHP defines some special types.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Special Types
	:twitter:description: Special Types: PHP defines some special types
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Special Types
	:og:type: article
	:og:description: PHP defines some special types
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/special-type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Special Types","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"PHP defines some special types","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Special Types.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Special Types
-------------

PHP defines some special types.

+ mixed : any type
+ void : no returned value
+ callable : may be used as a callback
+ iterable : may be used with foreach(), including array
+ never : never returns
+ object : object of any class
+ parent : any of the parent class of the current class, excluding it
+ self : the current class
+ static : the current called class

Other special types are the scalar types. 



.. code-block:: php
   
   <?php
   function foo(iterable $i) : never {
       foreach ($i as $j) {
           echo $j;
       }
   
       die();
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.declarations.php>`__

Related : :ref:`Type System <type>`, :ref:`Type System <typehint>`, :ref:`Mixed <mixed>`, :ref:`Void <void>`, :ref:`Callables <callable>`, :ref:`Iterable <iterable>`, :ref:`Never Type <never>`, :ref:`Object <object>`, :ref:`parent <parent>`, :ref:`static <static>`, :ref:`Self <self>`

Added in PHP 7.0
