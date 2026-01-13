.. _negative-index:
.. meta::
	:description:
		negative-index: On PHP strings, a positive index starts at zero at the beginning of the string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: negative-index
	:twitter:description: negative-index: On PHP strings, a positive index starts at zero at the beginning of the string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: negative-index
	:og:type: article
	:og:description: On PHP strings, a positive index starts at zero at the beginning of the string
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/negative-index.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot redeclare foo() (previously declared in file:3).html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot redeclare foo() (previously declared in file:3).html","name":"negative-index","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"On PHP strings, a positive index starts at zero at the beginning of the string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/negative-index.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


negative-index
--------------

On PHP strings, a positive index starts at zero at the beginning of the string; and a negative index starts at the end of the string. 

Negative index was added in PHP 7.1.

On an array, negative index are supported, without any special meaning: they are only available when provided. Their behavior changed when using automatic indexing though.

.. code-block:: php
   
   <?php
   
   $string = 'abcd';
   
   echo $string[1]; // b
   echo $string[-1]; // c
   
   ?>


Related : :ref:`Index For Arrays <index-array>`, :ref:`String <string>`
