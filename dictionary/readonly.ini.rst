.. _readonly:
.. _readonly-class:
.. _readonly-property:
.. meta::
	:description:
		Readonly: A property or a class can be declared readonly, which prevents modification of the property or all properties after initialization.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Readonly
	:twitter:description: Readonly: A property or a class can be declared readonly, which prevents modification of the property or all properties after initialization
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Readonly
	:og:type: article
	:og:description: A property or a class can be declared readonly, which prevents modification of the property or all properties after initialization
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/readonly.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/readonly.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/readonly.ini.html","name":"Readonly","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 14:26:32 +0000","dateModified":"Mon, 13 Jul 2026 14:26:32 +0000","description":"A property or a class can be declared readonly, which prevents modification of the property or all properties after initialization","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Readonly.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Readonly
--------

A property or a class can be declared readonly, which prevents modification of the property or all properties after initialization.

``readonly`` also applies inside the ``__clone()`` magic method: cloning doesn't allow for changing a readonly property.

A class may be readonly since version 8.2, making all of of its properties readonly too. The children classes must also be readonly.

.. code-block:: php
   
   <?php
   
       class Test {
          public readonly string $prop;
       
          public function __construct(string $prop) {
              // Legal initialization.
              $this->prop = $prop;
          }
       }
       
       $test = new Test(foobar);
       // Legal read.
       var_dump($test->prop); // string(6) foobar 
       
       // Illegal reassignment. It does not matter that the assigned value is the same.
       $test->prop = foobar;
       // Error: Cannot modify readonly property Test::$prop
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties>`__

See also `PHP 8.1: Readonly Properties <https://php.watch/versions/8.1/readonly>`_ and `The Hidden Surprises of PHP Readonly Properties <https://phpfashion.com/en/php-readonly-properties>`_.

Related : :ref:`Class <class>`, :ref:`__clone() Method <-__clone>`, :ref:`Properties <property>`, :ref:`Clone <clone>`, :ref:`Property Type Declaration <type-declaration-property>`, :ref:`Var <var>`, :ref:`Writeable <writeable>`, :ref:`Ownership <borrow-checking>`, :ref:`Record Type <record-type>`, :ref:`Struct Type <struct-type>`, :ref:`Type System <type-system>`, :ref:`Modifier <modifier>`

Added in PHP 8.1
