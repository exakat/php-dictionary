.. _set:
.. meta::
	:description:
		Set: A set is a data structure that stores unique values with no particular order.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Set
	:twitter:description: Set: A set is a data structure that stores unique values with no particular order
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Set
	:og:type: article
	:og:description: A set is a data structure that stores unique values with no particular order
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/set.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/set.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/set.ini.html","name":"Set","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 04 Jul 2026 08:24:06 +0000","dateModified":"Sat, 04 Jul 2026 08:24:06 +0000","description":"A set is a data structure that stores unique values with no particular order","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Set.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Set
---

A set is a data structure that stores unique values with no particular order. PHP has no native set type, but sets can be simulated with array keys, which must be unique and in no particular order, or by using ``Ds\Set`` from the ``ds`` extension.

Sets are useful for membership testing, deduplication, and set operations such as union, intersection, and difference.

.. code-block:: php
   
   <?php
   
       // Simulated set using array keys
       $set = [];
       $set['apple'] = true;
       $set['banana'] = true;
       $set['apple'] = true; // no-op, key already exists
       
       $isMember = isset($set['apple']); // true
       
       // Using ds extension
       $set = new Ds\Set([1, 2, 3, 2, 1]);
       echo $set->count(); // 3
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Set_(mathematics)>`__

See also `Ds\Set <https://www.php.net/manual/en/class.ds-set.php>`_ and `array_unique() <https://www.php.net/manual/en/function.array-unique.php>`_.

Related : :ref:`Data Structure <datastructure>`, :ref:`Collection <collection>`, :ref:`Array, [] <array>`, :ref:`Data Structure <ds>`, :ref:`SplSubject <splsubject>`

Related packages : `php-ds/php-ds <https://packagist.org/packages/php-ds/php-ds>`_
