.. _associative-array:
.. _hash-array:
.. meta::
	:description:
		Associative Array: An associative array is an array whose keys are strings.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Associative Array
	:twitter:description: Associative Array: An associative array is an array whose keys are strings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Associative Array
	:og:type: article
	:og:description: An associative array is an array whose keys are strings
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/associative-array.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Associative Array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 21:18:25 +0000","dateModified":"Thu, 22 Jan 2026 21:18:25 +0000","description":"An associative array is an array whose keys are strings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Associative Array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Associative Array
-----------------

An associative array is an array whose keys are strings. There may be integer index, mixed with the string ones.

.. code-block:: php
   
   <?php
   
   $associative = ['a' => 1, 'b' => 4];
   
   echo $associative['a'];
   
   ?>


`Documentation <https://www.php.net/manual/en/intro.array.php>`__

Related : :ref:`Indexed Array <indexed-array>`
