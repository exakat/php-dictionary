.. _idempotent:
.. meta::
	:description:
		Idempotent: Idempotent is said of an operation, which yields always the same result after the first call.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Idempotent
	:twitter:description: Idempotent: Idempotent is said of an operation, which yields always the same result after the first call
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Idempotent
	:og:type: article
	:og:description: Idempotent is said of an operation, which yields always the same result after the first call
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/idempotent.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Idempotent","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Dec 2025 06:13:14 +0000","dateModified":"Tue, 30 Dec 2025 06:13:14 +0000","description":"Idempotent is said of an operation, which yields always the same result after the first call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Idempotent.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Idempotent
----------

Idempotent is said of an operation, which yields always the same result after the first call.  In other words, repeating the operation does not produce a different result beyond the initial application.

This is the case of strtolower() and strtoupper(): once the string has been made lower case (resp. upper case), calling the same function again on the string will not change the result.


.. code-block:: php
   
   <?php
   
   $string = aBC;
   
   $string1 = strtolower($string); // abc
   $string2 = strtolower($string2); // abc
   $string3 = strtolower($string3); // abc
   $string4 = strtolower($string4); // abc
   // ... 
   
   ?>


`Documentation <https://developer.mozilla.org/en-US/docs/Glossary/Idempotent>`__

See also https://en.wikipedia.org/wiki/Idempotence, https://medium.com/tech-vibes/designing-idempotent-php-apis-for-distributed-systems-c1b52b1862b1
