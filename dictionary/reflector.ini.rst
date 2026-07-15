.. _reflector:
.. meta::
	:description:
		Reflector: ``Reflector`` is the base interface that all PHP Reflection classes implement.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Reflector
	:twitter:description: Reflector: ``Reflector`` is the base interface that all PHP Reflection classes implement
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Reflector
	:og:type: article
	:og:description: ``Reflector`` is the base interface that all PHP Reflection classes implement
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/reflector.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/reflector.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/reflector.ini.html","name":"Reflector","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``Reflector`` is the base interface that all PHP Reflection classes implement","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Reflector.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Reflector
---------

``Reflector`` is the base interface that all PHP Reflection classes implement. It declares ``__toString()``, providing a common type for all reflection objects.

All reflection classes, ``ReflectionClass``, ``ReflectionMethod``, ``ReflectionFunction``, ``ReflectionProperty``, ``ReflectionParameter``, etc., implement this interface, allowing code to accept any reflector generically.

.. code-block:: php
   
   <?php
   
       function describeReflector(Reflector $r): void {
           echo (string) $r . PHP_EOL;
       }
       
       describeReflector(new ReflectionClass(DateTime::class));
       describeReflector(new ReflectionFunction('array_map'));
   
   ?>


`Documentation <https://www.php.net/manual/en/class.reflector.php>`__

See also `ReflectionClass Class <https://www.php.net/manual/en/class.reflectionclass.php>`_.

Related : :ref:`Reflection <reflection>`, :ref:`Interface <interface>`, :ref:`PHP Native Interfaces <php-interface>`, :ref:`Introspection <introspection>`, :ref:`SplSubject <splsubject>`

Added in PHP 5.1
