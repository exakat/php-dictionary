.. _scope-resolution-operator:
.. _double-colon:
.. _paamayim-nekudotayim:
.. meta::
	:description:
		Scope Resolution Operator ::: The Scope Resolution Operator ``::`` is a token that allows access to static, constant, and overridden properties or methods of a class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Scope Resolution Operator ::
	:twitter:description: Scope Resolution Operator ::: The Scope Resolution Operator ``::`` is a token that allows access to static, constant, and overridden properties or methods of a class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Scope Resolution Operator ::
	:og:type: article
	:og:description: The Scope Resolution Operator ``::`` is a token that allows access to static, constant, and overridden properties or methods of a class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/scope-resolution-operator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Scope Resolution Operator ::","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"The Scope Resolution Operator ``::`` is a token that allows access to static, constant, and overridden properties or methods of a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Scope Resolution Operator ::.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Scope Resolution Operator ::
----------------------------

The Scope Resolution Operator ``::`` is a token that allows access to static, constant, and overridden properties or methods of a class.

Traditionally, this used to be a feature of the function ``get_class()``. The operator is more modern and faster. 

The double colon operator is used to access class related elements, such as 

+ Static properties, ``X::$property``
+ Static methods, ``X::method()``
+ Static constants, ``X::CONSTANT``
+ Class name, ``X::class``

This operator is often called double-colon, or ``paamayim-nekudotayim``: this means ``double-colon`` in Hebrew. It is said to be a lot easier to google than ``::``.

PHP also has a single colon operator ``:``, used for goto labels, ternary operator, etc. 


.. code-block:: php
   
   <?php
   
   $a = new stdClass();
   
   echo $a::class;
   
   // identical to 
   echo get_class($a);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php>`__

See also `Scope Resolution operator in PHP <https://www.geeksforgeeks.org/php/scope-resolution-operator-in-php/>`_ and `Scope Resolution operator (in PHP) <https://parsifar.com/scope-resolution-operator-in-php/>`_.

Related : :ref:`Object Operator -> <object-operator>`, :ref:`Object Nullsafe Operator ?-> <object-nullsafe-operator>`, :ref:`Static Method <static-method>`, :ref:`Static Constant <static-constant>`, :ref:`Static Class <static-class>`, :ref:`Static Property <static-property>`, :ref:`Colon <colon>`, :ref:`Double <double>`, :ref:`Null Safe Object Operator <nullsafe-object-operator>`
