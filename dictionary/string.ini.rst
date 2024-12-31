.. _string:
.. meta::
	:description:
		String: A string is series of characters, where a character is the same as a byte.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: String
	:twitter:description: String: A string is series of characters, where a character is the same as a byte
	:twitter:creator: @exakat
	:og:title: String
	:og:type: article
	:og:description: A string is series of characters, where a character is the same as a byte
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/string.ini.html
	:og:locale: en


String
------

A string is series of characters, where a character is the same as a byte. This means that PHP only supports a 256-character set, and hence does not offer native Unicode support. 

.. code-block:: php
   
   <?php
   
   $string = 'Hello world';
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.string.php>`__

Related : :ref:`Stringable <stringable>`, :ref:`Single Quotes Strings <single-quote>`, :ref:`Double Quotes Strings <double-quote>`, :ref:`Magic Methods <magic-method>`, :ref:`sprintf <sprintf>`, :ref:`sprintf <vprintf>`, :ref:`Concatenation <concatenation>`, :ref:`Curly Brackets <curly-bracket>`, :ref:`Format <format>`, :ref:`Heredocs <heredoc>`, :ref:`Interpolation <interpolation>`, :ref:`Nowdocs <nowdoc>`, :ref:`Scalar Types <scalar-typehint>`, :ref:`String Interpolation <string-interpolation>`

Related packages : `symfony/string <https://packagist.org/packages/symfony/string>`_, `voku/stringy <https://packagist.org/packages/voku/stringy>`_
