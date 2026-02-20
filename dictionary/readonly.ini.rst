.. _readonly:
.. meta::
	:description:
		Readonly: A property can be declared with the readonly modifier, which prevents modification of the property after initialization.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Readonly
	:twitter:description: Readonly: A property can be declared with the readonly modifier, which prevents modification of the property after initialization
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Readonly
	:og:type: article
	:og:description: A property can be declared with the readonly modifier, which prevents modification of the property after initialization
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/readonly.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Readonly","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 18 Feb 2026 18:43:03 +0000","dateModified":"Wed, 18 Feb 2026 18:43:03 +0000","description":"A property can be declared with the readonly modifier, which prevents modification of the property after initialization","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Readonly.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Readonly
--------

A property can be declared with the readonly modifier, which prevents modification of the property after initialization.

Readonly also applies inside the __clone() magic method: cloning doesn't allow for changing a readonly property.

In PHP 8.2, a class may be readonly, making all of of its properties readonly too.

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

See also https://php.watch/versions/8.1/readonly, https://phpfashion.com/en/php-readonly-properties

Related : :ref:`Class <class>`, :ref:`__clone() Method <-__clone>`, :ref:`Properties <property>`

Added in PHP 8.1
