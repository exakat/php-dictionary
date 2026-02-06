.. _array-element:
.. _item:
.. meta::
	:description:
		Array Element: An array element is a piece of data, stored at an index in the array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Array Element
	:twitter:description: Array Element: An array element is a piece of data, stored at an index in the array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Array Element
	:og:type: article
	:og:description: An array element is a piece of data, stored at an index in the array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array-element.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Array and string offset access syntax with curly braces is no longer supported.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Array and string offset access syntax with curly braces is no longer supported.html","name":"Array Element","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 03 Feb 2026 05:55:18 +0000","dateModified":"Tue, 03 Feb 2026 05:55:18 +0000","description":"An array element is a piece of data, stored at an index in the array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Array Element.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Array Element
-------------

An array element is a piece of data, stored at an index in the array. 

An array element may of any type, and it may be also repeated, unlike the array index.

The array element is also called an item. It is often named ``$value``, in a loop, as a blind variable.

When an array is a list, the elements are all of the same type. When an array is a hash, 

Array elements are not typed at the language level. They may be typed for static analysis tools, via the phpdoc syntax.

.. code-block:: php
   
   <?php
   
   $array = ['a' => 1, 'b' => 3, 'c' => 5];
   while(list($key, $value) = each($array)) {
       print $key . ' => ' . $value . PHP_EOL;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/function.each.php>`__

Related : :ref:`Index For Arrays <index-array>`, :ref:`each <each>`, :ref:`Loops <loop>`, :ref:`Blind Variable <blind-variable>`, :ref:`Hash <hash>`

Added in PHP 1.0

Removed in PHP 1.0
