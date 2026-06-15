.. _static-class:
.. meta::
	:description:
		Static Class: A static class is a class that only holds static methods, properties or constants.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Static Class
	:twitter:description: Static Class: A static class is a class that only holds static methods, properties or constants
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Static Class
	:og:type: article
	:og:description: A static class is a class that only holds static methods, properties or constants
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/static-class.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Static Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A static class is a class that only holds static methods, properties or constants","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Static Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Static Class
------------

A static class is a class that only holds static methods, properties or constants. 

There is no special syntax for such a class: it is simply created with the abovementioned structures. Other programming languages have a dedicated syntax for them.

A static class is usually used by direct call, with the ``::`` operator. A static class may still be instantiated, though there is little usage for such an object.


.. code-block:: php
   
   <?php
   
       class X {
           public static int $p = 0;
           
           public static function increment(): int {
               return self::$p++;
           }
       }
       
       echo X::increment(); // 1
   
   ?>


Related : :ref:`Scope Resolution Operator :: <scope-resolution-operator>`, :ref:`Static Method <static-method>`, :ref:`Static Constant <static-constant>`, :ref:`Static Property <static-property>`, :ref:`Colon <colon>`
