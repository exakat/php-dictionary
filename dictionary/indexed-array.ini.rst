.. _indexed-array:
.. meta::
	:description:
		Indexed Array: An indexed array is an array whose keys are only integers.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Indexed Array
	:twitter:description: Indexed Array: An indexed array is an array whose keys are only integers
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Indexed Array
	:og:type: article
	:og:description: An indexed array is an array whose keys are only integers
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/indexed-array.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Indexed Array","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"An indexed array is an array whose keys are only integers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Indexed Array.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Indexed Array
-------------

An indexed array is an array whose keys are only integers. The keys may be explicit or implicit.

An array with string index is an associative array.

.. code-block:: php
   
   
   <?php
   
   $associative = [10 => 'a', 'b'];
   
   echo $associative[10]; // a
   echo $associative[0]; // b
   
   ?>
   


`Documentation <https://www.php.net/manual/en/language.types.array.php>`__

Related : :ref:`Associative Array <associative-array>`, :ref:`Array <array>`, :ref:`Collection <collection>`

Related packages : `sebastian/object-enumerator <https://packagist.org/packages/sebastian/object-enumerator>`_, `ramsey/collection <https://packagist.org/packages/ramsey/collection>`_
