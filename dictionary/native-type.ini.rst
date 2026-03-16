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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot redeclare foo() (previously declared in file:3).html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot redeclare foo() (previously declared in file:3).html","name":"PHP Natives","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Mar 2026 17:12:56 +0000","dateModified":"Fri, 06 Mar 2026 17:12:56 +0000","description":"PHP offers a selection of natives, which are not directly derived from a class, interface or enumeration name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PHP Natives.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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

.. code-block:: php
   
   <?php
   
   function foo(int $i, callable $c) : never {
       die();
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.php>`__

Related : :ref:`Null <null>`, :ref:`Boolean <bool>`, :ref:`integer <int>`, :ref:`Floating Point Numbers <float>`, :ref:`String <string>`, :ref:`Array <array>`, :ref:`Object <object>`, :ref:`resource <resource>`, :ref:`Never Type <never>`, :ref:`Void <void>`, :ref:`Self <self>`, :ref:`parent <parent>`, :ref:`static <static>`, :ref:`False <false>`, :ref:`True <true>`, :ref:`Callables <callable>`, :ref:`Iterable <iterable>`, :ref:`Stringable <stringable>`
