.. _attribute-class:
.. meta::
	:description:
		Attribute Class: This is a native PHP attribute, which tells the engine that a class is a PHP attribute.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Attribute Class
	:twitter:description: Attribute Class: This is a native PHP attribute, which tells the engine that a class is a PHP attribute
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Attribute Class
	:og:type: article
	:og:description: This is a native PHP attribute, which tells the engine that a class is a PHP attribute
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/attribute-class.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Attribute Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"This is a native PHP attribute, which tells the engine that a class is a PHP attribute","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Attribute Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Attribute Class
---------------

This is a native PHP attribute, which tells the engine that a class is a PHP attribute.

This attribute (sic) is not necessary to make a class a valid attribute. Yet, it is recommended to use it and make the classes explicitly attributes.


.. code-block:: php
   
   <?php
   
   #[Attribute]
   class MyAttribute { }
   
   #[MyAttribute]
   class MyClass { }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.attributes.classes.php>`__

See also `Attributes in PHP 8 <https://php.watch/articles/php-attributes>`_

Added in PHP 8.1+
