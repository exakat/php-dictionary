.. _dictionary:
.. meta::
	:description:
		Dictionary: A dictionary is a data structure that holds a collection of values with a unique identifier.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dictionary
	:twitter:description: Dictionary: A dictionary is a data structure that holds a collection of values with a unique identifier
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dictionary
	:og:type: article
	:og:description: A dictionary is a data structure that holds a collection of values with a unique identifier
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dictionary.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/dictionary.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/dictionary.ini.html","name":"Dictionary","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:16 +0000","dateModified":"Fri, 19 Jun 2026 21:24:16 +0000","description":"A dictionary is a data structure that holds a collection of values with a unique identifier","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dictionary.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dictionary
----------

A dictionary is a data structure that holds a collection of values with a unique identifier. Each identifier is a integer or a string and may be other types in rarer occasions. The related values may be of any type. 

A dictionary structure relies often on the array data structure.

.. code-block:: php
   
   <?php
   
   $dictionary = ['a' => 'blue',
                  'b' => 'pink',
                  'c' => ['green', 'yellow'],
                 ];
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Associative_array>`__

Related : :ref:`Hash <hash>`, :ref:`Associative Array <associative-array>`
