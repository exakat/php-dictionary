.. _introspection:
.. meta::
	:description:
		Introspection: Introspection in PHP is the ability to examine the properties and behavior of objects, classes, and functions at runtime.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Introspection
	:twitter:description: Introspection: Introspection in PHP is the ability to examine the properties and behavior of objects, classes, and functions at runtime
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Introspection
	:og:type: article
	:og:description: Introspection in PHP is the ability to examine the properties and behavior of objects, classes, and functions at runtime
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/introspection.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Introspection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Introspection in PHP is the ability to examine the properties and behavior of objects, classes, and functions at runtime","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Introspection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Introspection
-------------

Introspection in PHP is the ability to examine the properties and behavior of objects, classes, and functions at runtime. It allows code to discover and inspect its own structure.

PHP provides many native introspection functions: ``get_class()``, ``get_object_vars()``, ``get_class_vars()``, ``get_class_methods()``, ``method_exists()``, ``property_exists()``, ``function_exists()``, ``is_a()``, ``instanceof``, and others.

For deeper introspection, the Reflection API provides programmatic access to class hierarchies, method signatures, parameter types, and attributes.

.. code-block:: php
   
   <?php
   
   class Dog {
       public string $name = 'Rex';
       public function bark(): void {}
   }
   
   $dog = new Dog();
   
   var_dump(get_class($dog));             // string(3) "Dog" 
   var_dump(get_object_vars($dog));       // Array ( [name] => Rex )
   var_dump(get_class_methods($dog));     // Array ( [0] => bark )
   var_dump(method_exists($dog, 'bark')); // bool(true)
   
   ?>


`Documentation <https://www.php.net/manual/en/book.reflection.php>`__

Related : :ref:`Reflection <reflection>`, :ref:`get_class() <get_class>`, :ref:`get_class_vars() <get_class_vars>`, :ref:`get_object_vars() <get_object_vars>`, :ref:`class_implements() <class_implements>`, :ref:`Reflector <reflector>`
