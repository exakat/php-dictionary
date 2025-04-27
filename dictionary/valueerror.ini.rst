.. _valueerror:
.. meta::
	:description:
		ValueError: A ValueError is thrown when the type of an argument is correct but the value of it is incorrect.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ValueError
	:twitter:description: ValueError: A ValueError is thrown when the type of an argument is correct but the value of it is incorrect
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: ValueError
	:og:type: article
	:og:description: A ValueError is thrown when the type of an argument is correct but the value of it is incorrect
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/valueerror.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"ValueError","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"A ValueError is thrown when the type of an argument is correct but the value of it is incorrect","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ValueError.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


ValueError
----------

A ValueError is thrown when the type of an argument is correct but the value of it is incorrect. 

It is a PHP error, and not an exception, it is thrown by PHP native functions. 

.. code-block:: php
   
   <?php
   $hexadecimal = 'a37334';
   
   // -2 is not a valid number base : it should be 2 or more.
   // Argument #2 ($from_base) must be between 2 and 36 (inclusive)
   echo base_convert($hexadecimal, 0, 2);
   
   // Third argument is for the starting offset. Here, this is beyond the end of the string
   // as such, the offset has a valid type (integer), but its value is not correct (out of range)
   $a = strpos("p", "php", 16);
   
   ?>


`Documentation <https://www.php.net/manual/en/class.valueerror.php>`__

See also `PHP 8.0: New ValueError Error Exception <https://php.watch/versions/8.0/ValueError>`_
