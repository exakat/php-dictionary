.. _strtolower:
.. _mb_strtolower:
.. meta::
	:description:
		strtolower(): ``strtolower()`` converts all ASCII alphabetic characters in a string to lowercase.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: strtolower()
	:twitter:description: strtolower(): ``strtolower()`` converts all ASCII alphabetic characters in a string to lowercase
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: strtolower()
	:og:type: article
	:og:description: ``strtolower()`` converts all ASCII alphabetic characters in a string to lowercase
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/strtolower.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"strtolower()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"``strtolower()`` converts all ASCII alphabetic characters in a string to lowercase","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/strtolower().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


strtolower()
------------

``strtolower()`` converts all ASCII alphabetic characters in a string to lowercase.

It only handles the 26 ASCII letters (A–Z). Characters outside the ASCII range, such as accented letters or characters from non-Latin scripts, are not converted. For Unicode-aware lowercasing, use ``mb_strtolower()``, which respects the encoding of the string.

``strtolower()`` is commonly used when comparing strings in a case-insensitive manner, building slugs, or normalising input.

.. code-block:: php
   
   <?php
   
       echo strtolower('Hello World');  // hello world
       echo strtolower('PHP 8.4');      // php 8.4
   
       // Unicode-aware version
       echo mb_strtolower('Héllo', 'UTF-8'); // héllo
   
   ?>


`Documentation <https://www.php.net/manual/en/function.strtolower.php>`__

Related : :ref:`strtoupper() <strtoupper>`, :ref:`String <string>`, :ref:`Case Sensitivity <case-insensitive>`, :ref:`Slug <slug>`, :ref:`Multibyte String <mbstring>`, :ref:`Idempotent <idempotent>`, :ref:`setlocale <setlocale>`
