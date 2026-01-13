.. _strpos-syndrom:
.. meta::
	:description:
		Strpos() Syndrome: The strpos() syndrome is a classic bug : strpos() searches for a string inside another string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Strpos() Syndrome
	:twitter:description: Strpos() Syndrome: The strpos() syndrome is a classic bug : strpos() searches for a string inside another string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Strpos() Syndrome
	:og:type: article
	:og:description: The strpos() syndrome is a classic bug : strpos() searches for a string inside another string
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/strpos-syndrom.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Strpos() Syndrome","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 28 Jul 2025 17:14:07 +0000","dateModified":"Mon, 28 Jul 2025 17:14:07 +0000","description":"The strpos() syndrome is a classic bug : strpos() searches for a string inside another string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Strpos() Syndrome.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Strpos() Syndrome
-----------------

The strpos() syndrome is a classic bug : strpos() searches for a string inside another string. It reports its index upon finding it, or false, if the string was not found.

PHP's string are indexed starting with 0, so the found string might be in an index from 0 to the size of the string. 

PHP also cast 0 to false. And false is also the value that is returned when the string is not found. So, if the found string is at the very beginning of the searched string, it might be confused for its absence.

To avoid confusion, it is recommended to make an explicit comparison with false, using ``===`` or ``!==``.

Note that many PHP native functions behave that way, and should be treated with the same precaution.

In the case of strpos(), it may be replaced with str_contains() (since PHP 8.0) or a regex, to get safer results.


.. code-block:: php
   
   <?php
   
   $haystack = 'abcdef';
   
   if (strpos($haystack, 'b')) {
   	print "The haystack contains a 'b'\n";
   }
   
   if (strpos($haystack, 'a')) {
   	print "The haystack contains an 'a'\n";
   } else {
   	print "The haystack doesn't contain an 'a'\n";
   }
   
   
   ?>


See also `Strpos Function Issue In Php Not Finding The Needle <https://www.learn-codes.net/php/strpos-function-issue-in-php-not-finding-the-needle/>`_
