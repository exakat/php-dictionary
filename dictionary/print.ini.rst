.. _print:
.. meta::
	:description:
		Print: print() is a PHP language construct used to output text to the browser or the output stream.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Print
	:twitter:description: Print: print() is a PHP language construct used to output text to the browser or the output stream
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Print
	:og:type: article
	:og:description: print() is a PHP language construct used to output text to the browser or the output stream
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/print.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Implicit conversion from float-string \"%s\" to int loses precision.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Implicit conversion from float-string \"%s\" to int loses precision.html","name":"Print","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:53:06 +0000","dateModified":"Wed, 21 Jan 2026 08:53:06 +0000","description":"print() is a PHP language construct used to output text to the browser or the output stream","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Print.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Print
-----

print() is a PHP language construct used to output text to the browser or the output stream. It is often used to display information to users on a web page or to debug and inspect variable values during development. The print construct can be used in two forms: with or without parentheses.

print() is a language construct of PHP. It only accepts one argument and it returns 1. 

print() also has a closely related function called print_r(), used for debugging.

.. code-block:: php
   
   <?php
   
   print 'Hello';
   
   print(' world!');
   
   ?>


`Documentation <https://www.php.net/manual/en/function.echo.php>`__

See also https://roman-huliak.medium.com/the-difference-between-echo-and-print-in-php-5047006f5fc6

Related : :ref:`Echo <echo>`, :ref:`print_r() <print_r>`
