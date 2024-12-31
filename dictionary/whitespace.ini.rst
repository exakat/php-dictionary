.. _whitespace:
.. meta::
	:description:
		Whitespace: Whitespace refers to spaces, tabs, and newline characters: those characters are invisible on a white background, hence the name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Whitespace
	:twitter:description: Whitespace: Whitespace refers to spaces, tabs, and newline characters: those characters are invisible on a white background, hence the name
	:twitter:creator: @exakat
	:og:title: Whitespace
	:og:type: article
	:og:description: Whitespace refers to spaces, tabs, and newline characters: those characters are invisible on a white background, hence the name
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/whitespace.ini.html
	:og:locale: en


Whitespace
----------

Whitespace refers to spaces, tabs, and newline characters: those characters are invisible on a white background, hence the name. 

Whitespace is used to format and organize the code, making it more readable. 

However, in PHP, whitespace is generally not significant in terms of parsing; the PHP interpreter usually ignores whitespace. There are some rare situations where the whitespaces have a role : in heredoc syntax, and for formatting floats.

Whitespace is not a notion specific to PHP : other languages have them too. For example, trim() removes whitespace at the beginning and the end of a string value.

.. code-block:: php
   
   <?php
   
   $heredoc = <<<HEREDOC
   	One tab shift
   	Here
   	HEREDOC;
   	
   $x = 1 . 0; // This is 10
   
   $y = 1.0; // This is 1.0
   
   $z = 1. 0; // This is a syntax error
   
   ?>


See also `php_strip_whitespace() <https://www.php.net/manual/en/function.php-strip-whitespace.php>`_, `Be careful of whitespace in .php files <https://avdi.codes/be-careful-of-whitespace-in-php-files/>`_
