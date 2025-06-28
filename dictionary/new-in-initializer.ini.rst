.. _new-in-initializer:
.. _new-initializer:
.. meta::
	:description:
		New In Initializers: It is possible to use a new expression for default values of static variables, parameter and constants.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: New In Initializers
	:twitter:description: New In Initializers: It is possible to use a new expression for default values of static variables, parameter and constants
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: New In Initializers
	:og:type: article
	:og:description: It is possible to use a new expression for default values of static variables, parameter and constants
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/new-in-initializer.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"New In Initializers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 28 Jun 2025 15:09:43 +0000","dateModified":"Sat, 28 Jun 2025 15:09:43 +0000","description":"It is possible to use a new expression for default values of static variables, parameter and constants","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/New In Initializers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


New In Initializers
-------------------

It is possible to use a new expression for default values of static variables, parameter and constants. 

It is not possible to use a new operator in a property definition. All elements of the instantiation must be constants (literal or constants) and available at calling time.



.. code-block:: php
   
   <?php
   
   class B {
       function __construct(private int $i) {}
   }
   
   function headers($a = new B(3)) : B {
       return $a;
   }
   
   ?>


`Documentation <https://wiki.php.net/rfc/new_in_initializers>`__

See also `PHP RFC: New in initializers <https://wiki.php.net/rfc/new_in_initializers>`_

Related : :ref:`new <new>`, :ref:`Static Variables <static-variable>`, :ref:`Constants <constant>`, :ref:`Static Constant <class-constant>`, :ref:`Parameter <parameter>`

Added in PHP 8.1+
