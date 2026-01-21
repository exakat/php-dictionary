.. _strpos:
.. meta::
	:description:
		strpos: strpos() is a built-in PHP function that finds the position of the first occurrence of a substring inside a string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: strpos
	:twitter:description: strpos: strpos() is a built-in PHP function that finds the position of the first occurrence of a substring inside a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: strpos
	:og:type: article
	:og:description: strpos() is a built-in PHP function that finds the position of the first occurrence of a substring inside a string
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/strpos.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"strpos","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 16:53:14 +0000","dateModified":"Wed, 21 Jan 2026 16:53:14 +0000","description":"strpos() is a built-in PHP function that finds the position of the first occurrence of a substring inside a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/strpos.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


strpos
------

strpos() is a built-in PHP function that finds the position of the first occurrence of a substring inside a string.

It is often used to check if a string contains another string. When the presence of the substring is the main goal of the check, it is advantageously replaced by ``str_contains()``. Otherwise, this function is prone to the strpos() syndrom, a classic PHP trap.

.. code-block:: php
   
   <?php
   
   if(strpos('abc', 'b')) {
       print "The string contains a `b`.";
   } 
   
   // Error! 'a' is at position 0, which is confused with false
   if(strpos('abc', 'a')) {
       print "The string contains a `b`.";
   } 
   
   // This is OK
   if(strpos('abc', 'a') !== false) {
       print "The string contains a `b`.";
   } 
   
   ?>


`Documentation <https://www.php.net/manual/en/function.strpos.php>`__

Related : :ref:`Strpos() Syndrome <strpos-syndrom>`, :ref:`Identical Operator <identical>`
