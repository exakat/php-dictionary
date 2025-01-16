.. _pcre:
.. meta::
	:description:
		Perl Compatible Regular Expressions (PCRE): PCRE is the library that supports regular expressions in PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Perl Compatible Regular Expressions (PCRE)
	:twitter:description: Perl Compatible Regular Expressions (PCRE): PCRE is the library that supports regular expressions in PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Perl Compatible Regular Expressions (PCRE)
	:og:type: article
	:og:description: PCRE is the library that supports regular expressions in PHP
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pcre.ini.html
	:og:locale: en


Perl Compatible Regular Expressions (PCRE)
------------------------------------------

PCRE is the library that supports regular expressions in PHP. It offers functions to search and replace in strings, and arrays of strings.

.. code-block:: php
   
   <?php
   
   preg_match('/PHP is (.*?)\./', 'PHP is fantastic.', $r);
   
   print $r[1]; // fantastic
   
   ?>


`Documentation <https://www.php.net/manual/en/book.pcre.php>`__

See also https://www.pcre.org/
