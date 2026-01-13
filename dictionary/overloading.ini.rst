.. _overloading:
.. meta::
	:description:
		Overloading: Overloading provides means to dynamically create properties and methods.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Overloading
	:twitter:description: Overloading: Overloading provides means to dynamically create properties and methods
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Overloading
	:og:type: article
	:og:description: Overloading provides means to dynamically create properties and methods
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/overloading.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Overloading","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Dec 2025 07:08:01 +0000","dateModified":"Tue, 30 Dec 2025 07:08:01 +0000","description":"Overloading provides means to dynamically create properties and methods","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Overloading.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Overloading
-----------

Overloading provides means to dynamically create properties and methods. These dynamic entities are processed via magic methods one can establish in a class for various action types. 

Property overloading is based on the magic methods ``__get``, ``__set``, ``__isset``, ``__unset``. Method overloading is based on the magic methods ``__call``, ``__callStatic``. There is no way to check if a overloaded method exist or not, unlike with properties.

Overloading does not apply to class constants.

Operator overloading is not supported in PHP. For example, it is not possible to define a ``-`` minus operator between two objects. This still exists for ``+``, which applies to integers, floats and arrays. It may also be supported by specific PHP extensions.



.. code-block:: php
   
   <?php
   
   class X {
       function foo() {
           echo __METHOD__;
       }
       
       function __call($name, $args) {
           echo self::class. '::'. $name;
       }
   }
   
   $x = new X;
   $x->foo(); // x::foo
   $x->goo(); // x::goo
   
   // existence check
   var_dump(method_exists(x::class, 'foo'));    // true
   var_dump(method_exists(x::class, 'goo'));    // false
   var_dump(method_exists(x::class, '__call')); // true
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.overloading.php>`__

Related : :ref:`Magic Methods <magic-method>`, :ref:`Dynamic Method <dynamic-method>`
