.. _closure-binding:
.. meta::
	:description:
		Closure Binding: A closure acquires values from its context of creation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Closure Binding
	:twitter:description: Closure Binding: A closure acquires values from its context of creation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Closure Binding
	:og:type: article
	:og:description: A closure acquires values from its context of creation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/closure-binding.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Closure Binding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"A closure acquires values from its context of creation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Closure Binding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Closure Binding
---------------

A closure acquires values from its context of creation. When the closure is created in a different context that wished, one may rebind the closure to another context.

This is done with the two methods Closure::bind() and Closure::bintTo().


.. code-block:: php
   
   <?php
   class A {
       private static function foo() { return 1;}
   }
   
   $closure = function() {
       // Self is undefined here, since it is not inside a class
       return self::foo();
   };
   
   // Self now defined, and set to A
   $bcl1 = Closure::bind($closure, null, 'A');
   
   ?>


`Documentation <https://www.php.net/manual/en/closure.bind.php>`__

Related : :ref:`Closure <closure>`
