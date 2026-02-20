.. _single-quote:
.. meta::
	:description:
		Single Quotes Strings: Single quoted strings are strings that include a literal value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Single Quotes Strings
	:twitter:description: Single Quotes Strings: Single quoted strings are strings that include a literal value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Single Quotes Strings
	:og:type: article
	:og:description: Single quoted strings are strings that include a literal value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/single-quote.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/The backtick (`) operator is deprecated, use shell_exec() instead.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/The backtick (`) operator is deprecated, use shell_exec() instead.html","name":"Single Quotes Strings","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 17 Feb 2026 21:05:26 +0000","dateModified":"Tue, 17 Feb 2026 21:05:26 +0000","description":"Single quoted strings are strings that include a literal value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Single Quotes Strings.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Single Quotes Strings
---------------------

Single quoted strings are strings that include a literal value. 

This is an simpler version of the double-quoted strings. 

It is possible to include variables `$var`, single-dimension arrays `$array[1]` or `$array[index]`, and single-dereferencing object members `$object->member`. More complex expressions require usage of curly braces `{$}`, or the usage of the dot operator.

Double quoted strings use the anti-slash `\` to escape special characters, such as the anti-slash and the `$` sign.

.. code-block:: php
   
   <?php
   
   // single quoted string : all literal values
   $name = 'elephpant loves $signs.'; 
   
   // double quoted string : variable value will be replaced at execution time.
   $greeting = "Hello! $name"; 
   
   // identical to
   $greeting = 'Hello! '.$name; 
   
   ?>


`Documentation <https://www.php.net/manual/en/ini.core.php#ini.disable-functions>`__

Related : :ref:`Double Quotes Strings <double-quote>`, :ref:`Heredocs <heredoc>`, :ref:`Interpolation <interpolation>`, :ref:`String <string>`
