.. _double-quote:
.. meta::
	:description:
		Double Quotes Strings: Double quoted strings are strings, similar to the single quoted strings.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Double Quotes Strings
	:twitter:description: Double Quotes Strings: Double quoted strings are strings, similar to the single quoted strings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Double Quotes Strings
	:og:type: article
	:og:description: Double quoted strings are strings, similar to the single quoted strings
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/double-quote.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Double Quotes Strings","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 18 Feb 2026 19:42:42 +0000","dateModified":"Wed, 18 Feb 2026 19:42:42 +0000","description":"Double quoted strings are strings, similar to the single quoted strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Double Quotes Strings.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Double Quotes Strings
---------------------

Double quoted strings are strings, similar to the single quoted strings. They are also able to interpolate variables, properties and arrays, which are included at execution time. 

Double quoted strings do not interpolate constants. 

Double quoted strings support escape sequences, such as ``u{1F3c}`` or ``\n``.

This is an extended version of the single-quoted strings. They are similar to the heredoc syntax.

.. code-block:: php
   
   <?php
   
   // single quoted string : all literal values
   $name = 'Elephpant loves $signs.'; 
   
   // single quoted string : all literal values
   $signs = 'PHP';
   $name = 'Elephpant loves $signs.';  // Elephpant loves PHP
   
   echo "\u{01f418}"; // escape sequence of an elephant
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double>`__

Related : :ref:`Single Quotes Strings <single-quote>`, :ref:`Interpolation <interpolation>`, :ref:`String <string>`, :ref:`Heredocs <heredoc>`, :ref:`Escape Sequences <escape-sequence>`
