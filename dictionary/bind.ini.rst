.. _bind:
.. meta::
	:description:
		Bind: A closure, when build on a method, is bound to an object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Bind
	:twitter:description: Bind: A closure, when build on a method, is bound to an object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Bind
	:og:type: article
	:og:description: A closure, when build on a method, is bound to an object
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/bind.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Bind","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 03 Aug 2025 20:27:01 +0000","dateModified":"Sun, 03 Aug 2025 20:27:01 +0000","description":"A closure, when build on a method, is bound to an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Bind.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Bind
----

A closure, when build on a method, is bound to an object. When the closure is executed, it will be with that object. Unless the closure is rebound with another object: in that case, the new object will be used as context for the closure execution.

.. code-block:: php
   
   <?php
   
   class A {
           public function __construct(private int $a) {    }
   
       public function method() {  echo $this->a;  }
   }
   
   $fn = Closure::fromCallable([new A(10), 'method']);
   $fn();
   
   $fn2 = $fn->bindTo(new A(99), A::class);
   $fn2();
   
   // $fn is called with another object
   $fn->call(new A (100));
   
   ?>


`Documentation <https://www.php.net/manual/en/closure.bindto.php>`__

Related : :ref:`Closure <closure>`
