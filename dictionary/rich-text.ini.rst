.. _rich-text:
.. meta::
	:description:
		Rich Text: Rich Text refers to data that is human-readable, yet includes extra information to apply style to that text, such as paragraph, section, font, bold, italic, etc.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Rich Text
	:twitter:description: Rich Text: Rich Text refers to data that is human-readable, yet includes extra information to apply style to that text, such as paragraph, section, font, bold, italic, etc
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Rich Text
	:og:type: article
	:og:description: Rich Text refers to data that is human-readable, yet includes extra information to apply style to that text, such as paragraph, section, font, bold, italic, etc
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/rich-text.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/rich-text.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/rich-text.ini.html","name":"Rich Text","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Rich Text refers to data that is human-readable, yet includes extra information to apply style to that text, such as paragraph, section, font, bold, italic, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Rich Text.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Rich Text
---------

Rich Text refers to data that is human-readable, yet includes extra information to apply style to that text, such as paragraph, section, font, bold, italic, etc. 

Such text is not crypted, per se, yet requires a specific reader to make the reading experience pleasant.

HTML, XML, RTF are all examples of Rich Text file.

.. code-block:: php
   
   <?php
   
       $plainText = 'PHP {\bRocks!}'; // Rocks! is in bold, according to RTF
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Plain_text>`__

Related : :ref:`To Crypt <crypt>`, :ref:`Plain Text <plain-text>`, :ref:`PDF <pdf>`, :ref:`Text <text>`
