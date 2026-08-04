.. _native-type:
.. meta::
	:description:
		PHP Natives: PHP offers a selection of natives, which are not directly derived from a class, interface or enumeration name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP Natives
	:twitter:description: PHP Natives: PHP offers a selection of natives, which are not directly derived from a class, interface or enumeration name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PHP Natives
	:og:type: article
	:og:description: PHP offers a selection of natives, which are not directly derived from a class, interface or enumeration name
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/native-type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/native-type.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/native-type.ini.html","name":"PHP Natives","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:12:39 +0000","dateModified":"Tue, 04 Aug 2026 11:12:39 +0000","description":"PHP offers a selection of natives, which are not directly derived from a class, interface or enumeration name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PHP Natives.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


PHP Natives
-----------

PHP offers a selection of natives, which are not directly derived from a class, interface or enumeration name. They cover cases that are not object related, or not even data related.

+ null
+ bool
+ int
+ float
+ string
+ array
+ object
+ resource
+ never
+ void
+ self
+ parent
+ static
+ false
+ true
+ callable
+ iterable
+ stringable.

Natives fall into two broad groups. Scalar and compound types: ``null``, ``bool``, ``int``, ``float``, ``string``, ``array``, ``object``, ``resource``, which describe the shape of a value; Pseudo-types and contextual types, such as ``never``, ``void``, ``self``, ``parent``, ``static``, ``false``, ``true``, ``callable``, ``iterable``, ``stringable``, which are mostly meaningful in type declarations and don't correspond to a single concrete kind of value: ``self`` and ``static`` refer to the enclosing or called class, ``callable`` and ``iterable`` describe a capability rather than a structure, and ``never``/``void`` describe what a function does not return.

Since PHP 7.0, most of these names can be used as parameter and return type declarations, and PHP 8.0 added support for union types, allowing a single declaration such as ``int|string`` to accept more than one native type. Because these are reserved words tied directly to the engine's type system, they cannot be reused as class or interface names.

.. code-block:: php
   
   <?php
   
       function foo(int $i, callable $c) : never {
           die();
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.php>`__

Related : :ref:`Null <null>`, :ref:`Boolean <bool>`, :ref:`integer <int>`, :ref:`Floating Point Numbers <float>`, :ref:`String <string>`, :ref:`Array, [] <array>`, :ref:`Object <object>`, :ref:`resource <resource>`, :ref:`Never Type <never>`, :ref:`Void <void>`, :ref:`Self <self>`, :ref:`parent <parent>`, :ref:`static <static>`, :ref:`False <false>`, :ref:`True <true>`, :ref:`Callables <callable>`, :ref:`Iterable <iterable>`, :ref:`Stringable <stringable>`
