.. _readability:
.. meta::
	:description:
		Readability: A code is readable, or easy to read, if all the needed information is available in the code, without the need to reach for an extra piece of reference to understand it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Readability
	:twitter:description: Readability: A code is readable, or easy to read, if all the needed information is available in the code, without the need to reach for an extra piece of reference to understand it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Readability
	:og:type: article
	:og:description: A code is readable, or easy to read, if all the needed information is available in the code, without the need to reach for an extra piece of reference to understand it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/readability.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Readability","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"A code is readable, or easy to read, if all the needed information is available in the code, without the need to reach for an extra piece of reference to understand it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Readability.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Readability
-----------

A code is readable, or easy to read, if all the needed information is available in the code, without the need to reach for an extra piece of reference to understand it.

Readable code may be understood on the spot, while unreadable code hides some important part of the process. 

Readability is a human characteristic of the code : it depends on the level of knowledge of the reader. Good naming is an important part of readability, as intention are conveyed.



.. code-block:: php
   
   <?php
   
   // all explicit alphabet
   $alphabet = array ( 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
   
   // readable with knowledge of range() function
   $alphabet = range('a', 'z');
   
   // generic name for a partial list of letter : many questions hang
   $array = range('a', 'l');
   
   ?>


See also `The Complete Guide to Readable Code: 11 Principles <https://fellow.app/blog/engineering/the-complete-guide-to-readable-code/>`_, `Why Code Readability is important <https://thehosk.medium.com/why-code-readability-is-important-e0c228a238a>`_, `How to write readable code? <https://suckup.de/2020/07/how-to-write-readable-code/>`_
