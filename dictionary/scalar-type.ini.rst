.. _scalar-type:
.. _scalar:
.. _scalar-typehint:
.. _primitive-type:
.. meta::
	:description:
		Scalar Types: Scalar types refer to the basic data types that hold a single value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Scalar Types
	:twitter:description: Scalar Types: Scalar types refer to the basic data types that hold a single value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Scalar Types
	:og:type: article
	:og:description: Scalar types refer to the basic data types that hold a single value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/scalar-type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Scalar Types","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 12:47:20 +0000","dateModified":"Thu, 22 Jan 2026 12:47:20 +0000","description":"Scalar types refer to the basic data types that hold a single value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Scalar Types.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Scalar Types
------------

Scalar types refer to the basic data types that hold a single value. 

PHP scalar types include the following:

Integer (``int``): integers are whole numbers without decimal points. 

Float (``float``): floats, also known as floating-point numbers or doubles, represent decimal numbers. 

String  (``string``): strings are sequences of characters enclosed in quotes (single or double).

Boolean  (``bool``): booleans have two possible values: true or false. 

Note that ``null`` is not considered a scalar type, and is often behaving differently.

.. code-block:: php
   
   <?php
   function gen_one_to_three() {
       for ($i = 1; $i <= 3; $i++) {
           // Note that $i is preserved between yields.
           yield $i;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.generators.syntax.php#control-structures.yield>`__

See also https://www.etutorialspoint.com/index.php/tutorial/php-scalar-type-declaration

Related : :ref:`Type System <type>`, :ref:`Special Types <special-type>`, :ref:`String <string>`, :ref:`Boolean <boolean>`, :ref:`Floating Point Numbers <float>`, :ref:`integer <integer>`, :ref:`Alias Types <alias-types>`, :ref:`Constant Scalar Expression <constant-scalar-expression>`, :ref:`Literal Types <literal-types>`, :ref:`Primitive Obsession <primitive-obsession>`, :ref:`Relative Types <relative-types>`

Added in PHP 7.0
