.. _string-increment:
.. meta::
	:description:
		String Increment: String increment is the PHP feature that applies the ``++`` pre- and post-increment operators on non-numeric strings.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: String Increment
	:twitter:description: String Increment: String increment is the PHP feature that applies the ``++`` pre- and post-increment operators on non-numeric strings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: String Increment
	:og:type: article
	:og:description: String increment is the PHP feature that applies the ``++`` pre- and post-increment operators on non-numeric strings
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/string-increment.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"String Increment","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 12:47:20 +0000","dateModified":"Thu, 22 Jan 2026 12:47:20 +0000","description":"String increment is the PHP feature that applies the ``++`` pre- and post-increment operators on non-numeric strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/String Increment.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


String Increment
----------------

String increment is the PHP feature that applies the ``++`` pre- and post-increment operators on non-numeric strings. 

These strings last character's ASCII code is incremented by one, with possible extension of the string when the letters reach ``z`` and ``Z``. 

This feature, when based on ``++`` is deprecated, and shall be removed in PHP 9. It has been replaced by the ``str_increment()`` function, which has the same feature, though not implicit in the engine anymore. It is also extended with It has been replaced by the ``str_decrement()``.

A deprecation message is active since PHP 8.3.

.. code-block:: php
   
   <?php
   
   $s = 'y';
   echo ++$s; // z
   echo ++$s; // aa 
   echo ++$s; // ab
   
   $s = 'Y';
   echo ++$s; // Z
   echo ++$s; // AA
   echo ++$s; // AA
   
   ?>


See also https://www.php.net/manual/en/function.str-decrement.php, https://www.php.net/manual/en/function.str-increment.php
