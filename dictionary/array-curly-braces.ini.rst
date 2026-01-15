.. _array-curly-braces:
.. meta::
	:description:
		Array With Curly Braces: Curly braces used to be a feature, used to access specific index in an array or in a string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array With Curly Braces
	:twitter:description: Array With Curly Braces: Curly braces used to be a feature, used to access specific index in an array or in a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Array With Curly Braces
	:og:type: article
	:og:description: Curly braces used to be a feature, used to access specific index in an array or in a string
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array-curly-braces.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Array With Curly Braces","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 15 Jan 2026 11:04:51 +0000","dateModified":"Thu, 15 Jan 2026 11:04:51 +0000","description":"Curly braces used to be a feature, used to access specific index in an array or in a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Array With Curly Braces.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Array With Curly Braces
-----------------------

Curly braces used to be a feature, used to access specific index in an array or in a string. They acted like the square braces. 

Since PHP 8.0, this is not supported anymore.

.. code-block:: php
   
   <?php
   
   $array = array('a', 'b', 'c', 'd');
   echo $array{2};    // c
   
   $string = 'abcd';
   echo $string{2};   // c
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.array.php#language.types.array.syntax.accessing>`__

See also https://wiki.php.net/rfc/deprecate_curly_braces_array_access

Removed in PHP 
