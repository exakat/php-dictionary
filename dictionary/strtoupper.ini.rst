.. _strtoupper:
.. _mb_strtoupper:
.. meta::
	:description:
		strtoupper(): ``strtoupper()`` converts all ASCII alphabetic characters in a string to uppercase.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: strtoupper()
	:twitter:description: strtoupper(): ``strtoupper()`` converts all ASCII alphabetic characters in a string to uppercase
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: strtoupper()
	:og:type: article
	:og:description: ``strtoupper()`` converts all ASCII alphabetic characters in a string to uppercase
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/strtoupper.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/strtoupper.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/strtoupper.ini.html","name":"strtoupper()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:16:25 +0000","dateModified":"Fri, 10 Jul 2026 09:16:25 +0000","description":"``strtoupper()`` converts all ASCII alphabetic characters in a string to uppercase","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/strtoupper().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


strtoupper()
------------

``strtoupper()`` converts all ASCII alphabetic characters in a string to uppercase.

It only handles the 26 ASCII letters, from ``a`` to ``z``. Characters outside the ASCII range are not converted. For Unicode-aware uppercasing, use ``mb_strtoupper()``, which respects the string encoding.

``strtoupper()`` is used for display normalisation, case-insensitive comparisons, and formatting constants or labels.

.. code-block:: php
   
   <?php
   
       echo strtoupper('hello world');  // HELLO WORLD
       echo strtoupper('php 8.4');      // PHP 8.4
   
       // Unicode-aware version
       echo mb_strtoupper('héllo', 'UTF-8'); // HÉLLO
   
   ?>


`Documentation <https://www.php.net/manual/en/function.strtoupper.php>`__

See also `PHP strtoupper() and strtolower() Functions: A Complete Guide <https://reintech.io/blog/php-strtoupper-strtolower-functions-complete-guide>`_.

Related : :ref:`strtolower() <strtolower>`, :ref:`String <string>`, :ref:`Case Sensitivity <case-insensitive>`, :ref:`Multibyte String <mbstring>`, :ref:`setlocale <setlocale>`
