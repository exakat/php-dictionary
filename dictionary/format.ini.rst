.. _format:
.. meta::
	:description:
		Format: Format is a set of rules to structure a piece of text, and make it parsable by a specific engine.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Format
	:twitter:description: Format: Format is a set of rules to structure a piece of text, and make it parsable by a specific engine
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Format
	:og:type: article
	:og:description: Format is a set of rules to structure a piece of text, and make it parsable by a specific engine
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/format.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/foreach() argument must be of type array|object.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/foreach() argument must be of type array|object.html","name":"Format","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:31 +0000","dateModified":"Fri, 19 Jun 2026 21:25:31 +0000","description":"Format is a set of rules to structure a piece of text, and make it parsable by a specific engine","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Format.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Format
------

Format is a set of rules to structure a piece of text, and make it parsable by a specific engine. A piece of text may be in the format: then, it is usable as a command for another technology. 

Formats have various shapes. Here are some examples of formats: 

+ ``SQL`` Structure Query Language: ``SELECT column FROM table`` 
+ Date and time (human): ``2020-01-01`` 
+ sprintf(): ``%d 9`` 
+ Regular expressions
+ ``YAML``
+ ``INI``
+ ``CSV``
+ ``JSON``

It is possible to define one's custom format. Common formats have a comprehensive specifications (how to build them) and assorted tools (encode, decode, use, combine, etc. ).

.. code-block:: php
   
   <?php
   
   // displays 123 with 9 characters, and fills with dots any empty characters
   // ......123
   echo sprintf("%'.9d\n", 123);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/File_format>`__

Related : :ref:`String <string>`, :ref:`Comma Secparated Values (CSV) <csv>`, :ref:`YAML Ain't Markup Language (YAML) <yaml>`, :ref:`JavaScript Object Notation (JSON) <json>`, :ref:`Data <data>`, :ref:`sprintf <sprintf>`, :ref:`printf() <printf>`, :ref:`INI <ini>`, :ref:`Leading Zero Means Octal <leading-zero-means-octal>`, :ref:`Markdown <markdown>`
