.. _dependent-type:
.. meta::
	:description:
		Dependent Type: A dependent type is a type whose definition depends on a value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dependent Type
	:twitter:description: Dependent Type: A dependent type is a type whose definition depends on a value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dependent Type
	:og:type: article
	:og:description: A dependent type is a type whose definition depends on a value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dependent-type.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Dependent Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"A dependent type is a type whose definition depends on a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dependent Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dependent Type
--------------

A dependent type is a type whose definition depends on a value. 

PHP does not support dependent type explicitly, though several situations behaves in a similar manner.

.. code-block:: php
   
   <?php
   
       print abs(-1); // 1, as integer
       print abs(-1.33); // 1.33, as float
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Dependent_type>`__

Related : :ref:`Type System <type>`
