.. _returntypewillchange:
.. meta::
	:description:
		Return Type Will Change: This is a native PHP attribute.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Return Type Will Change
	:twitter:description: Return Type Will Change: This is a native PHP attribute
	:twitter:creator: @exakat
	:og:title: Return Type Will Change
	:og:type: article
	:og:description: This is a native PHP attribute
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/returntypewillchange.ini.html
	:og:locale: en


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
