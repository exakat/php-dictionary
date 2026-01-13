.. _falsy:
.. meta::
	:description:
		Falsy: A falsy value is a value that evaluate to false, when cast to a boolean.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Falsy
	:twitter:description: Falsy: A falsy value is a value that evaluate to false, when cast to a boolean
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Falsy
	:og:type: article
	:og:description: A falsy value is a value that evaluate to false, when cast to a boolean
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/falsy.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Falsy","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"A falsy value is a value that evaluate to false, when cast to a boolean","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Falsy.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Falsy
-----

A falsy value is a value that evaluate to false, when cast to a boolean. It includes false, obviously, but also other values such as 0, ``''`` (empty string), or ``[]`` (empty array).

The contrary to falsy is truthy. 

There are some values which are difficult to guess, as is illustrated below.


.. code-block:: php
   
   <?php
   
   var_dump((bool) 0);       // false
   var_dump((bool) '');      // false
   var_dump((bool) '0');     // false
   var_dump((bool) '00');    // true
   var_dump((bool) []);      // false
   var_dump((bool) [null]);  // true
   var_dump((bool) null);    // false
   
   ?>


Related : :ref:`Truthy <truthy>`, :ref:`False <false>`, :ref:`Boolean <boolean>`
