.. _line-feed:
.. meta::
	:description:
		Line Feed: A line feed is a whitespace character, that historically represents moving the cursor to the next line, without going back to the beginning of the line.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Line Feed
	:twitter:description: Line Feed: A line feed is a whitespace character, that historically represents moving the cursor to the next line, without going back to the beginning of the line
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Line Feed
	:og:type: article
	:og:description: A line feed is a whitespace character, that historically represents moving the cursor to the next line, without going back to the beginning of the line
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/line-feed.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Line Feed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 30 Mar 2026 12:10:47 +0000","dateModified":"Mon, 30 Mar 2026 12:10:47 +0000","description":"A line feed is a whitespace character, that historically represents moving the cursor to the next line, without going back to the beginning of the line","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Line Feed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Line Feed
---------

A line feed is a whitespace character, that historically represents moving the cursor to the next line, without going back to the beginning of the line.

A line feed is represented by the escape sequence ``\f``, in double quote strings. It is also the ASCII code 12.

Return carriage are important when formatting code, as they are at the end of a line.

.. code-block:: php
   
   <?php
   
       echo "\f";
       echo chr(12); // ASCII code 12
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Newline>`__

Related : :ref:`New Line <new-line>`, , :ref:`American Standard Code for Information Interchange (ASCII) <ascii>`
