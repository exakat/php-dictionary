.. _returntypewillchange:
.. meta::
	:description:
		Return Type Will Change: This is a native PHP attribute.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Return Type Will Change
	:twitter:description: Return Type Will Change: This is a native PHP attribute
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Return Type Will Change
	:og:type: article
	:og:description: This is a native PHP attribute
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/returntypewillchange.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Return Type Will Change","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"This is a native PHP attribute","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Return Type Will Change.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Return Type Will Change
-----------------------

This is a native PHP attribute. It tells the engine that method overwriting or implementing a native method will use a different return type.

PHP checks the compatibility of implementing methods versus a custom interface. Until PHP 8.1, it did not report such violation when the interface is a PHP native one: this was for backward compatibility.

To avoid using that attribute, one must made the return type compatible with PHP signatures.

This attributes only works with PHP native methods: it is ignored when used with other methods.


.. code-block:: php
   
   <?php
   
   class Foo implements ArrayAccess {
       #[\ReturnTypeWillChange]
       public function offsetGet(mixed $offset) {}
       // ...
   }
   
   ?>


`Documentation <https://php.watch/versions/8.1/ReturnTypeWillChange>`__

Related : :ref:`PHP Native Attribute <php-native-attribute>`

Added in PHP 8.1+
