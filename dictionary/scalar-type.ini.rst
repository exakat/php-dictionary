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

See also `PHP 7 Scalar Type Declaration <https://www.etutorialspoint.com/index.php/tutorial/php-scalar-type-declaration>`_

Related : :ref:`Type System <type>`, :ref:`Special Types <special-type>`, :ref:`String <string>`, :ref:`Boolean <boolean>`, :ref:`Floating Point Numbers <float>`, :ref:`integer <integer>`, :ref:`Alias Types <alias-types>`

Added in PHP 7.0
