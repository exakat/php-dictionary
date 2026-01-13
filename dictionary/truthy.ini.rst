.. _truthy:
.. meta::
	:description:
		Truthy: A truthy value is a value that evaluate to true, when cast to a boolean.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Truthy
	:twitter:description: Truthy: A truthy value is a value that evaluate to true, when cast to a boolean
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Truthy
	:og:type: article
	:og:description: A truthy value is a value that evaluate to true, when cast to a boolean
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/truthy.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Truthy","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 03 Jan 2026 16:42:20 +0000","dateModified":"Sat, 03 Jan 2026 16:42:20 +0000","description":"A truthy value is a value that evaluate to true, when cast to a boolean","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Truthy.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Truthy
------

A truthy value is a value that evaluate to true, when cast to a boolean. It includes true, obviously, but also other values such as 1, -1, ``'0'`` (strings, except the empty string and ``'0``), non-empty arrays and all the objects.

The contrary to truthy is falsy. 

There are some values which are difficult to guess, as is illustrated below.

.. code-block:: php
   
   <?php
   
   var_dump((bool) 1);       // true
   var_dump((bool) -1);      // true
   var_dump((bool) '0');     // false
   var_dump((bool) '00');    // true
   var_dump((bool) []);      // false
   var_dump((bool) [null]);  // true
   var_dump((bool) new stdclass);    // true
   
   ?>


Related : :ref:`False <false>`, :ref:`True <true>`, :ref:`Boolean <boolean>`, :ref:`Falsy <falsy>`
