.. _get_class_vars:
.. meta::
	:description:
		get_class_vars(): ``get_class_vars()`` is a PHP native function that returns the default properties of a class as an associative array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: get_class_vars()
	:twitter:description: get_class_vars(): ``get_class_vars()`` is a PHP native function that returns the default properties of a class as an associative array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: get_class_vars()
	:og:type: article
	:og:description: ``get_class_vars()`` is a PHP native function that returns the default properties of a class as an associative array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/get_class_vars.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"get_class_vars()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``get_class_vars()`` is a PHP native function that returns the default properties of a class as an associative array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/get_class_vars().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


get_class_vars()
----------------

``get_class_vars()`` is a PHP native function that returns the default properties of a class as an associative array.

Unlike ``get_object_vars()``, which operates on an object instance, ``get_class_vars()`` takes a class name as a string and returns the default values of the class's declared properties, including inherited ones.

Only properties accessible from the current scope are returned.

.. code-block:: php
   
   <?php
   
   class Foo {
       public string $name = 'default';
       protected int $count = 0;
       private bool $active = true;
   }
   
   $vars = get_class_vars(Foo::class);
   print_r($vars);
   // Array ( [name] => default )  // only public properties visible in this scope
   
   ?>


`Documentation <https://www.php.net/manual/en/function.get-class-vars.php>`__

Related : :ref:`get_class() <get_class>`, :ref:`get_object_vars() <get_object_vars>`, :ref:`Reflection <reflection>`, :ref:`Introspection <introspection>`
