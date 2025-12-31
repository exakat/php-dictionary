.. _named-type:
.. meta::
	:description:
		Named Type: A named type is a type with a single name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Named Type
	:twitter:description: Named Type: A named type is a type with a single name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Named Type
	:og:type: article
	:og:description: A named type is a type with a single name
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/named-type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Named Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 11 Dec 2025 20:26:25 +0000","dateModified":"Thu, 11 Dec 2025 20:26:25 +0000","description":"A named type is a type with a single name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Named Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Named Type
----------

A named type is a type with a single name. This means native types, such as ``never``, ``int`` or ``array`` and custom types, such as classes and interfaces. It actually exclude constructed types, such as union types and intersection types (dnf is included in union types).

Named types have a related Reflection class: ``ReflectionNamedType``.

.. code-block:: php
   
   <?php
   
   function foo(A $a) : void {}
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.declarations.php>`__

Related : :ref:`Union Type <union-type>`, :ref:`Intersection Type <intersection-type>`

Added in PHP 7.0
