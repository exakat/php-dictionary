.. _php-interface:
.. meta::
	:description:
		PHP Native Interfaces: PHP defines its own native interfaces.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP Native Interfaces
	:twitter:description: PHP Native Interfaces: PHP defines its own native interfaces
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PHP Native Interfaces
	:og:type: article
	:og:description: PHP defines its own native interfaces
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/php-interface.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"PHP Native Interfaces","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:53:06 +0000","dateModified":"Wed, 21 Jan 2026 08:53:06 +0000","description":"PHP defines its own native interfaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PHP Native Interfaces.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


PHP Native Interfaces
---------------------

PHP defines its own native interfaces. They are used with the native classes, and are usually available with custom code. 

For example, ``Countable`` is a PHP native interface, which design objects that can be passed to ``count()`` function. On the other hand, ``Throwable`` is a native interface, which is characteristic of ``Exception`` and ``Error``. It may be used for typing, with ``catch`` clauses, or with ``instanceof`` but must be implemented by extending the two former classes.

Native interfaces depend on the compiled extensions. Native interfaces are introduced in major or minor versions, so their number evolve with time.

.. code-block:: php
   
   <?php
   
   print_r(get_declared_interfaces());
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.interfaces.php>`__

Related : :ref:`Traversable <traversable>`, , :ref:`Iterator <iterator>`, :ref:`Serializable <serializable>`, :ref:`ArrayAccess <arrayaccess>`, :ref:`Countable Interface <countable>`, :ref:`Stringable <stringable>`, :ref:`Throwable <throwable>`, :ref:`UnitEnum <unitenum>`, :ref:`BackedEnum <backedenum>`, , , , , , :ref:`JsonSerializable <jsonserializable>`, :ref:`RecursiveIterator <recursiveiterator>`, , , , , , , , , , 
