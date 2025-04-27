.. _stringable:
.. meta::
	:description:
		Stringable: Stringable is a type, which represents data that may be used as as string : either a string, a heredoc or a string constant.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Stringable
	:twitter:description: Stringable: Stringable is a type, which represents data that may be used as as string : either a string, a heredoc or a string constant
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Stringable
	:og:type: article
	:og:description: Stringable is a type, which represents data that may be used as as string : either a string, a heredoc or a string constant
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/stringable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Stringable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 19 Apr 2025 15:12:58 +0000","dateModified":"Sat, 19 Apr 2025 15:12:58 +0000","description":"Stringable is a type, which represents data that may be used as as string : either a string, a heredoc or a string constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Stringable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Stringable
----------

Stringable is a type, which represents data that may be used as as string : either a string, a heredoc or a string constant; or an object which has the `__toString()` method.

Stringable is automatically added to any class (and subclass) that has the `__toString()` method, though it is recommended to add it explicitly.


.. code-block:: php
   
   <?php
   
   function foo(stringable $s) {
   	print $s;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.stringable.php>`__

See also `What is Stringable Interface in PHP 8? <https://www.tutorialspoint.com/what-is-stringable-interface-in-php-8>`_

Related : :ref:`String <string>`, 

Added in PHP 8.0
