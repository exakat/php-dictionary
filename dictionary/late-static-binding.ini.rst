.. _late-static-binding:
.. _late-binding:
.. meta::
	:description:
		Late Static Binding: PHP implements a feature called late static bindings which can be used to reference the called class in a context of static inheritance.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Late Static Binding
	:twitter:description: Late Static Binding: PHP implements a feature called late static bindings which can be used to reference the called class in a context of static inheritance
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Late Static Binding
	:og:type: article
	:og:description: PHP implements a feature called late static bindings which can be used to reference the called class in a context of static inheritance
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/late-static-binding.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Late Static Binding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"PHP implements a feature called late static bindings which can be used to reference the called class in a context of static inheritance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Late Static Binding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Late Static Binding
-------------------

PHP implements a feature called late static bindings which can be used to reference the called class in a context of static inheritance.

.. code-block:: php
   
   <?php
   class A {
       public static function who() {
           echo __CLASS__;
       }
       public static function test() {
           static::who(); // Here comes Late Static Bindings
       }
   }
   
   class B extends A {
       public static function who() {
           echo __CLASS__;
       }
   }
   
   B::test();
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.late-static-bindings.php>`__

See also `Late static binding in PHP - What, How & When <https://www.amitmerchant.com/late-static-binding-php-what-how-when/>`_, `A real life example of using Late Static Binding in PHP <https://dev.to/asifzcpe/a-real-life-example-of-using-late-static-binding-in-php-h6b/>`_

Related : :ref:`Self <self>`, :ref:`static <static>`, :ref:`parent <parent>`, :ref:`Early Binding <early-binding>`
