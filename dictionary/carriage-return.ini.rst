.. _carriage-return:
.. meta::
	:description:
		Carriage Return: A carriage return is a whitespace character, that historically represents moving the cursor to the beginning of the line, without changing line.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Carriage Return
	:twitter:description: Carriage Return: A carriage return is a whitespace character, that historically represents moving the cursor to the beginning of the line, without changing line
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Carriage Return
	:og:type: article
	:og:description: A carriage return is a whitespace character, that historically represents moving the cursor to the beginning of the line, without changing line
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/carriage-return.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Carriage Return","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 01 May 2026 16:33:54 +0000","dateModified":"Fri, 01 May 2026 16:33:54 +0000","description":"A carriage return is a whitespace character, that historically represents moving the cursor to the beginning of the line, without changing line","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Carriage Return.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Carriage Return
---------------

A carriage return is a whitespace character, that historically represents moving the cursor to the beginning of the line, without changing line. It is often combined to the line feed: on a typewriter, that combinaison is needed to move the chariot to the beginning of the next line. This does not apply anymore on computers.

A carriage return is represented by the escape sequence ``\r``, in double quote strings. It is also the ASCII code 13.

Carriage return are important when formatting code, as they are at the end of a line.

.. code-block:: php
   
   <?php
   
       echo "\r";
       echo chr(13); // ASCII code 13
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Carriage_return>`__

Related : :ref:`New Line <new-line>`, :ref:`Line Feed <line-feed>`, :ref:`American Standard Code for Information Interchange (ASCII) <ascii>`
