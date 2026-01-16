.. _duck-typing:
.. _ducktyping:
.. meta::
	:description:
		Duck Typing: In duck typing, an object is of a given type if it has all methods and properties required by that type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Duck Typing
	:twitter:description: Duck Typing: In duck typing, an object is of a given type if it has all methods and properties required by that type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Duck Typing
	:og:type: article
	:og:description: In duck typing, an object is of a given type if it has all methods and properties required by that type
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/duck-typing.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Duck Typing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 17:01:22 +0000","dateModified":"Fri, 16 Jan 2026 17:01:22 +0000","description":"In duck typing, an object is of a given type if it has all methods and properties required by that type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Duck Typing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Duck Typing
-----------

In duck typing, an object is of a given type if it has all methods and properties required by that type. 

It is described by this sentence: 'If it walks like a duck and it quacks like a duck, then it must be a duck'.

This may apply to a class that offers a set of methods, that are listed in an interface, but the class doesn't implement explicitly that interface.

.. code-block:: php
   
   <?php
   
   interface i {
   	function foo() ; 
   }
   
   // class X doesn't implement i, yet it is of type i because it implements foo()
   class X {
   	function foo() {}
   	function bar() {}
   }
   ?>


`Documentation <https://en.wikipedia.org/wiki/Duck_typing>`__

See also https://matthiasnoback.nl/2017/02/convenient-ducktyping-in-php/

Related : :ref:`Rubber Ducking Debugging <rubber-ducking>`
