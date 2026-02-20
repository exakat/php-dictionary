.. _string-interpolation:
.. meta::
	:description:
		String Interpolation: String interpolation is a feature where variables inside a string are dynamically replaced by their value at execution time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: String Interpolation
	:twitter:description: String Interpolation: String interpolation is a feature where variables inside a string are dynamically replaced by their value at execution time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: String Interpolation
	:og:type: article
	:og:description: String interpolation is a feature where variables inside a string are dynamically replaced by their value at execution time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/string-interpolation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"String Interpolation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 17 Feb 2026 21:10:32 +0000","dateModified":"Tue, 17 Feb 2026 21:10:32 +0000","description":"String interpolation is a feature where variables inside a string are dynamically replaced by their value at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/String Interpolation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


String Interpolation
--------------------

String interpolation is a feature where variables inside a string are dynamically replaced by their value at execution time. 

There are several ways to do interpolation: 

+ use double-quotes and a variable
+ use double-quotes and a property or a array with a valid index
+ use curly braces with a variable
+ use dollar and curly-braces: it calls the variable whose name is dynamically calculated in the curly braces. This syntax is deprecated in PHP 8.2 and later.

Double quotes and Heredoc notation allows string interpolation. On the other hand, single quote and nowdoc forbid interpolation. Then, escaping the special characters such as ``$`` and ``{`` with ``\\\\`` also disables interpolation locally.

Interpolation happens inside strings, while concatenation happens between strings.

.. code-block:: php
   
   <?php
   
   $world = 'world';
   // This is an interpolated string
   $string = "Hello $world";
   
   // This is not an interpolated string
   $string = 'Hollow $world';
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.double>`__

Related : :ref:`String <string>`
