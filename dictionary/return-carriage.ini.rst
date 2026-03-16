.. _return-carriage:
.. meta::
	:description:
		Return Carriage: A return carriage is a whitespace character, that historically represents moving the cursor to the beginning of the line, without advancing to the next line.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Return Carriage
	:twitter:description: Return Carriage: A return carriage is a whitespace character, that historically represents moving the cursor to the beginning of the line, without advancing to the next line
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Return Carriage
	:og:type: article
	:og:description: A return carriage is a whitespace character, that historically represents moving the cursor to the beginning of the line, without advancing to the next line
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/return-carriage.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Return Carriage","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Mar 2026 14:46:29 +0000","dateModified":"Mon, 16 Mar 2026 14:46:29 +0000","description":"A return carriage is a whitespace character, that historically represents moving the cursor to the beginning of the line, without advancing to the next line","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Return Carriage.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Return Carriage
---------------

A return carriage is a whitespace character, that historically represents moving the cursor to the beginning of the line, without advancing to the next line.

A return carriage is represented by the escape sequence ``\r``, in double quote strings. It is also the ASCII code 13.

Return carriage are important when formatting code, as they are at the end of a line.

.. code-block:: php
   
   <?php
   
       echo "\r";
       echo chr(13); // ASCII code 13
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Carriage_return>`__

Related : :ref:`Line Feed <line-feed>`, :ref:`New Line <new-line>`
