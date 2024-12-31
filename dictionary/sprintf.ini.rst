.. _sprintf:
.. _vprintf:
.. _printf:
.. meta::
	:description:
		sprintf: sprintf() is a PHP native function, which format a string based on a format string, and one or more values.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: sprintf
	:twitter:description: sprintf: sprintf() is a PHP native function, which format a string based on a format string, and one or more values
	:twitter:creator: @exakat
	:og:title: sprintf
	:og:type: article
	:og:description: sprintf() is a PHP native function, which format a string based on a format string, and one or more values
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sprintf.ini.html
	:og:locale: en


sprintf
-------

sprintf() is a PHP native function, which format a string based on a format string, and one or more values. 

sprintf() returns the formatted string, while printf() displays it immediately, and vprintf() writes the formatted string to a stream. There is also sscanf(), which parse the string, according to the format.

printf() is convenient to display text in command line, as it makes easy to use fillers and justification. 

printf() also supports named arguments, which makes the format string more flexible. 



.. code-block:: php
   
   <?php
   
   // displays 123 with 9 characters, and fills with dots any empty characters
   // ......123
   echo sprintf("%'.9d\n", 123);
   
   // same as above, without the echo command
   printf("%'.9d\n", 123);
   
   // same as above, without the echo command
   vprintf("%'.9d\n", '......123');
   
   ?>


`Documentation <https://www.php.net/manual/fr/function.sprintf.php>`__

See also `PHP Sprintf: Powerful String Formatting <https://marketsplash.com/tutorials/php/php-sprintf/>`_

Related : :ref:`String <string>`, :ref:`Format <format>`
