.. _wildcard:
.. meta::
	:description:
		Wildcard: The wildcard, for example the ``*``, ``%``, ``_``, ``~`` characters, is a placeholder that matches anything.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Wildcard
	:twitter:description: Wildcard: The wildcard, for example the ``*``, ``%``, ``_``, ``~`` characters, is a placeholder that matches anything
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Wildcard
	:og:type: article
	:og:description: The wildcard, for example the ``*``, ``%``, ``_``, ``~`` characters, is a placeholder that matches anything
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/wildcard.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Wildcard","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"The wildcard, for example the ``*``, ``%``, ``_``, ``~`` characters, is a placeholder that matches anything","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Wildcard.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Wildcard
--------

The wildcard, for example the ``*``, ``%``, ``_``, ``~`` characters, is a placeholder that matches anything.

Wildcards are used in various places:

+ glob patterns, to match any number of characters: ``*.php`` matches any PHP file
+ regex patterns, with ``.*`` or ``.*?``
+ ``mixed`` type is a wildcard type
+ ``~`` in autoloading definition, which defines a minimum version

In autoloading, wildcards allow mapping entire namespaces at once.

.. code-block:: php
   
   <?php
   
   // glob patterns with wildcard
   foreach (glob('*.php') as $filename) {
       echo "$filename\n";
   }
   
   // Variadic arguments (spread operator)
   function foo(...$args) {
       print_r($args);
   }
   
   foo(1, 2, 3);
   
   // mixed type (PHP 8.0+)
   function bar(mixed $value): mixed {
       return $value;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.basic-syntax.php>`__

Related : :ref:`glob() <glob>`, :ref:`Mixed <mixed>`, :ref:`Variadic <variadic>`, :ref:`Regular Expressions <regex>`

Related packages : `okapi/wildcards <https://packagist.org/packages/okapi/wildcards>`_
