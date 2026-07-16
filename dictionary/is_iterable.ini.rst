.. _is_iterable:
.. meta::
	:description:
		is_iterable(): ``is_iterable()`` is a PHP native function, introduced in version 7.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: is_iterable()
	:twitter:description: is_iterable(): ``is_iterable()`` is a PHP native function, introduced in version 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: is_iterable()
	:og:type: article
	:og:description: ``is_iterable()`` is a PHP native function, introduced in version 7
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/is_iterable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/is_iterable.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/is_iterable.ini.html","name":"is_iterable()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:20:49 +0000","dateModified":"Thu, 16 Jul 2026 14:20:49 +0000","description":"``is_iterable()`` is a PHP native function, introduced in version 7","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/is_iterable().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


is_iterable()
-------------

``is_iterable()`` is a PHP native function, introduced in version 7.1, that checks whether a variable can be iterated over with ``foreach``. It returns ``true`` if the value is either an ``array`` or an object implementing the ``Traversable`` interface, such as a ``Generator`` or an ``Iterator``.

``is_iterable()`` is the runtime counterpart of the ``iterable`` pseudo-type, which may be used in type declarations for parameters, return types, and properties. It is looser than ``is_array()``, since it also accepts objects, but it does not accept plain objects that merely implement ``ArrayAccess`` without also being ``Traversable``.

It is typically used to validate arguments of functions designed to accept both arrays and generators or iterators interchangeably, before looping over them with ``foreach``.

.. code-block:: php
   
   <?php
   
       function process(iterable $items): void {
           foreach ($items as $item) {
               echo $item . PHP_EOL;
           }
       }
   
       var_dump(is_iterable([1, 2, 3]));           // true
       var_dump(is_iterable((function () { yield 1; })())); // true
       var_dump(is_iterable('hello'));             // false
       var_dump(is_iterable(new ArrayObject([1]))); // true
   
   ?>


`Documentation <https://www.php.net/manual/en/function.is-iterable.php>`__

See also `Type comparison tables <https://www.php.net/manual/en/types.comparisons.php>`_.

Related : :ref:`Iterable <iterable>`, :ref:`Traversable <traversable>`, :ref:`Iterator <iterator>`, :ref:`Generator <generator>`, :ref:`is_array() <is_array>`, :ref:`is_object() <is_object>`, :ref:`gettype() <gettype>`, :ref:`Type Checking <type-checking>`

Added in PHP 7.1
