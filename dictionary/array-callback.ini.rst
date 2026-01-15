.. _array-callback:
.. meta::
	:description:
		Array Callback: An array callback, is an array of two elements, which may be used as a callback function.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array Callback
	:twitter:description: Array Callback: An array callback, is an array of two elements, which may be used as a callback function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Array Callback
	:og:type: article
	:og:description: An array callback, is an array of two elements, which may be used as a callback function
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array-callback.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Array Callback","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 15 Jan 2026 11:04:51 +0000","dateModified":"Thu, 15 Jan 2026 11:04:51 +0000","description":"An array callback, is an array of two elements, which may be used as a callback function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Array Callback.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Array Callback
--------------

An array callback, is an array of two elements, which may be used as a callback function. 

The array must have only two elements: the first one is a class name or an object, and the second one is a method name. Then, the method on the class or object will be called, when used with the class functioncall syntax.

The array should not use any string keys. It should only use index 1 and 0, although they may be in wrong order.

.. code-block:: php
   
   <?php
   
   class X {
       function foo() { echo __METHOD__; }
       static function goo() { echo __METHOD__; }
   }
   
   $method = [new X, 'foo']; 
   $method(); // X::foo
   
   $method = [1 => 'foo', 0 => new X]; // 1 and 0 keys, but wrong order
   $method(); // X::foo
   
   $staticMethod = [X::class, 'goo']; 
   $staticMethod(); // X::goo
   
   $staticMethod2 = ['\X', 'goo']; 
   $staticMethod2(); // X::goo
   
   ?>


Related : :ref:`Callbacks <callback>`, :ref:`Closure <closure>`
