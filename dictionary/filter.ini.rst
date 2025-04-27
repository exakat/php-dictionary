.. _filter:
.. meta::
	:description:
		filter: The ``filter`` extension is a built-in extension that provides an efficient way to filter, validate and sanitize data.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: filter
	:twitter:description: filter: The ``filter`` extension is a built-in extension that provides an efficient way to filter, validate and sanitize data
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: filter
	:og:type: article
	:og:description: The ``filter`` extension is a built-in extension that provides an efficient way to filter, validate and sanitize data
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/filter.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"filter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Mar 2025 09:04:15 +0000","dateModified":"Sat, 15 Mar 2025 09:04:15 +0000","description":"The ``filter`` extension is a built-in extension that provides an efficient way to filter, validate and sanitize data","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/filter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


filter
------

The ``filter`` extension is a built-in extension that provides an efficient way to filter, validate and sanitize data. Give it a string, and check that is satisfy a specific format.

``filter`` works on incoming data, such as ``$_GET`` or ``$_POST``, but also on free variables.


.. code-block:: php
   
   <?php
   
   $data = [
       'age' => '123 years,
       'name'  => 'John Doe',
   ];
   
   $filters = [
       'age'   => FILTER_VALIDATE_INT,
       'name'   => FILTER_SANITIZE_ENCODED,
   ];
   
   print_r(filter_var_array($data, $filters));
   
   ?>
   


`Documentation <https://www.php.net/manual/en/book.xmlwriter.php>`__

See also `PHP Filter and Filter Constant <https://www.geeksforgeeks.org/php-filter-and-filter-constant/>`_

Related packages : `clue/stream-filter <https://packagist.org/packages/clue/stream-filter>`_, `laminas/laminas-filter <https://packagist.org/packages/laminas/laminas-filter>`_

Added in PHP 7.0+
