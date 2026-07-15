.. _sscanf:
.. meta::
	:description:
		sscanf(): ``sscanf()`` is a built-in PHP function that parses input from a string according to a format string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: sscanf()
	:twitter:description: sscanf(): ``sscanf()`` is a built-in PHP function that parses input from a string according to a format string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: sscanf()
	:og:type: article
	:og:description: ``sscanf()`` is a built-in PHP function that parses input from a string according to a format string
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sscanf.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/sscanf.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/sscanf.ini.html","name":"sscanf()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 08:05:33 +0000","dateModified":"Tue, 07 Jul 2026 08:05:33 +0000","description":"``sscanf()`` is a built-in PHP function that parses input from a string according to a format string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/sscanf().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


sscanf()
--------

``sscanf()`` is a built-in PHP function that parses input from a string according to a format string.

``sscanf()`` is the opposite feature of ``printf()``: the same format may be used to parse or print data.

.. code-block:: php
   
   <?php
   
       $date = January 01 2000;
       list($month, $day, $year) = sscanf($date, %s %d %d);
       
       print(%s %d %d, $month, $day, $year);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.sscanf.php>`__

See also `PHP sscanf() Function <https://www.geeksforgeeks.org/php/php-sscanf-function/>`_.

Related : :ref:`printf() <printf>`, :ref:`sprintf <sprintf>`
