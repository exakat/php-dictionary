.. _unset:
.. meta::
	:description:
		unset(): unset() removes a variable.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: unset()
	:twitter:description: unset(): unset() removes a variable
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: unset()
	:og:type: article
	:og:description: unset() removes a variable
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/unset.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"unset()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"unset() removes a variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/unset().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


unset()
-------

unset() removes a variable. This feature used to be available as a function call `unset()` or as a type cast `(unset)`. The type-cast was removed in PHP 7.2. 

.. code-block:: php
   
   <?php
   
   $a = 1;
   unset($a);
   var_dump(isset($a)); // false
   
   ?>


`Documentation <https://www.php.net/manual/en/function.unset.php>`__

Related : :ref:`Variables <variable>`
