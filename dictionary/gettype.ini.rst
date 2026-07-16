.. _gettype:
.. meta::
	:description:
		gettype(): ``gettype()`` is a PHP native function that returns the type of a variable as a string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: gettype()
	:twitter:description: gettype(): ``gettype()`` is a PHP native function that returns the type of a variable as a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: gettype()
	:og:type: article
	:og:description: ``gettype()`` is a PHP native function that returns the type of a variable as a string
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/gettype.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/gettype.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/gettype.ini.html","name":"gettype()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 20:10:01 +0000","dateModified":"Wed, 15 Jul 2026 20:10:01 +0000","description":"``gettype()`` is a PHP native function that returns the type of a variable as a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/gettype().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


gettype()
---------

``gettype()`` is a PHP native function that returns the type of a variable as a string. Possible return values are ``"boolean"``, ``"integer"``, ``"double"``, ``"string"``, ``"array"``, ``"object"``, ``"resource"``, ``"resource (closed)"``, ``"NULL"``, and ``"unknown type"``.

These return values are historical and do not match the type names used in type declarations, such as ``int``, ``float``, or ``bool``: for that purpose, ``get_debug_type()``, available since PHP 8.0, is recommended, as it returns the actual type name, including the class name for objects.

``gettype()`` is mostly used for debugging or logging, rather than for type checking in conditional logic: dedicated functions like ``is_array()``, ``is_string()``, ``is_int()``, ``is_bool()`` are faster and clearer for that purpose. Changing a variable's type is done with ``settype()``, the counterpart of ``gettype()``.

.. code-block:: php
   
   <?php
   
       echo gettype(42);        // integer
       echo gettype(3.14);      // double
       echo gettype('hello');   // string
       echo gettype([1, 2]);    // array
       echo gettype(null);      // NULL
       echo gettype(new stdClass()); // object
   
   ?>


`Documentation <https://www.php.net/manual/en/function.gettype.php>`__

See also `Type comparison tables <https://www.php.net/manual/en/types.comparison.php>`_.

Related : , , :ref:`is_array() <is_array>`, :ref:`is_string() <is_string>`, :ref:`is_int() <is_int>`, :ref:`is_bool() <is_bool>`, :ref:`is_iterable() <is_iterable>`, :ref:`Type Checking <type-checking>`, :ref:`Type Juggling <type-juggling>`
