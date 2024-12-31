.. _numeric-separator:
.. _integer-separator:
.. meta::
	:description:
		Numeric Separator: Since PHP 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Numeric Separator
	:twitter:description: Numeric Separator: Since PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Numeric Separator
	:og:type: article
	:og:description: Since PHP 7
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/numeric-separator.ini.html
	:og:locale: en


Numeric Separator
-----------------

Since PHP 7.4, it is possible to add underscores as numeric separators within numeric literals to improve their readability. This feature allows to group digits, making them easier to read and understand. Numeric separators have no effect on the value of the number; they're purely for human-friendly formatting.

.. code-block:: php
   
   <?php
   
   $phone_fr = 1_33_61_23_45_67;
   $phone_ca = 1_514_387_9947;
   
   // true;
   var_dump(1_2_3 === 123);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.integer.php#language.types.integer.syntax>`__

Related : :ref:`integer <integer>`

Added in PHP 7.4
