.. _literal-types:
.. meta::
	:description:
		Literal Types: Literal types are type which not only check the type of a value but also the value itself.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Literal Types
	:twitter:description: Literal Types: Literal types are type which not only check the type of a value but also the value itself
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Literal Types
	:og:type: article
	:og:description: Literal types are type which not only check the type of a value but also the value itself
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/literal-types.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot mix keyed and unkeyed array entries in assignments.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot mix keyed and unkeyed array entries in assignments.html","name":"Literal Types","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:11:49 +0000","dateModified":"Mon, 19 Jan 2026 14:11:49 +0000","description":"Literal types are type which not only check the type of a value but also the value itself","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Literal Types.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Literal Types
-------------

Literal types are type which not only check the type of a value but also the value itself. PHP has support for two literal types: false as of PHP 8.0.0, and true as of PHP 8.2.0.

.. code-block:: php
   
   <?php
   
   // bool is a type
   // false is a literal type : a bool, which value is false
   function foo(bool $a) : false {
   	return false;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.literal.php>`__

Related : :ref:`Scalar Types <scalar-type>`, :ref:`Union Type <union-type>`

Added in PHP 8.0
