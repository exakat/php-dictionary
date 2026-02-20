.. _printf:
.. meta::
	:description:
		printf(): printf() is a PHP native function, that places the content of variables into strings, with the help of placeholders and formatting commands.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: printf()
	:twitter:description: printf(): printf() is a PHP native function, that places the content of variables into strings, with the help of placeholders and formatting commands
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: printf()
	:og:type: article
	:og:description: printf() is a PHP native function, that places the content of variables into strings, with the help of placeholders and formatting commands
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/printf.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"printf()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 18 Feb 2026 20:39:37 +0000","dateModified":"Wed, 18 Feb 2026 20:39:37 +0000","description":"printf() is a PHP native function, that places the content of variables into strings, with the help of placeholders and formatting commands","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/printf().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


printf()
--------

printf() is a PHP native function, that places the content of variables into strings, with the help of placeholders and formatting commands.

printf() displays the resulting string directly to STDOUT; sprintf() returns the string for further processing; vprintf() works as printf(), but with an array of arguments; fprintf() writes the result directly in a stream, and vfprintf() is the same, with an array of argument.

The first argument of printf() is a format string. The string contains format specifier, which are detailled on the function's documentation page. 

printf() should have one argument for each of the placeholders, plus the formatting string. The function reports when arguments are missing, and ignore silently any superfluous argument.

.. code-block:: php
   
   <?php
   
   $variable = 'elephpant'
   printf('The %s is happy.', $variable);
   
   ?>


See also https://www.php.net/manual/en/function.printf.php
