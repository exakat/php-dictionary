.. _unset:
.. meta::
	:description:
		unset(): unset() removes a variable, an array item or an property.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: unset()
	:twitter:description: unset(): unset() removes a variable, an array item or an property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: unset()
	:og:type: article
	:og:description: unset() removes a variable, an array item or an property
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/unset.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"unset()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 14:32:48 +0000","dateModified":"Fri, 04 Jul 2025 14:32:48 +0000","description":"unset() removes a variable, an array item or an property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/unset().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


unset()
-------

unset() removes a variable, an array item or an property. This feature used to be available as a function call `unset()` or as a type cast `(unset)`. The type-cast was removed in PHP 7.2. 

It is not possible to remove a static property.

After removing a property, with ``unset()``, the property is reset to its initial state. It may end up being uninitialized if it does not have a default value.

.. code-block:: php
   
   <?php
   
   $a = ['b' => 1];
   unset($a['b']); // unset an element
   unset($a);      // unset the whole array
   
   var_dump(isset($a)); // false
   
   ?>


`Documentation <https://www.php.net/manual/en/function.unset.php>`__

See also https://zetcode.com/php/unset-keyword/, https://thelinuxcode.com/php-unset-function/

Related : :ref:`Variables <variable>`, :ref:`Index For Arrays <index-array>`
