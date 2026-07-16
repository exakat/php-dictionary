.. _is_bool:
.. meta::
	:description:
		is_bool(): ``is_bool()`` is a PHP native function that checks whether a variable is of type ``bool``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: is_bool()
	:twitter:description: is_bool(): ``is_bool()`` is a PHP native function that checks whether a variable is of type ``bool``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: is_bool()
	:og:type: article
	:og:description: ``is_bool()`` is a PHP native function that checks whether a variable is of type ``bool``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/is_bool.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/is_bool.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/is_bool.ini.html","name":"is_bool()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 20:10:13 +0000","dateModified":"Wed, 15 Jul 2026 20:10:13 +0000","description":"``is_bool()`` is a PHP native function that checks whether a variable is of type ``bool``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/is_bool().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


is_bool()
---------

``is_bool()`` is a PHP native function that checks whether a variable is of type ``bool``. It returns ``true`` only for the literal values ``true`` and ``false``.

``is_bool()`` distinguishes true booleans from values that are merely truthy or falsy, such as ``0``, ``''``, ``null``, or ``1``, none of which are booleans themselves even though they may evaluate as such in a boolean context. This distinction matters when a function or API explicitly needs to know that a boolean, rather than any falsy or truthy value, was received.

It is commonly used in input validation, for instance when reading configuration values, decoded JSON, or user input, where the caller must confirm that a strict boolean was provided rather than a string like ``"true"`` or an integer like ``1``.

.. code-block:: php
   
   <?php
   
       var_dump(is_bool(true));   // true
       var_dump(is_bool(false));  // true
       var_dump(is_bool(1));      // false
       var_dump(is_bool('true')); // false
   
       $config = json_decode('{"debug": true}', true);
       if (is_bool($config['debug'])) {
           echo 'Debug mode: ' . ($config['debug'] ? 'on' : 'off');
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/function.is-bool.php>`__

See also `Type comparison tables <https://www.php.net/manual/en/types.comparison.php>`_.

Related : :ref:`Boolean <bool>`, :ref:`is_array() <is_array>`, :ref:`is_int() <is_int>`, :ref:`is_string() <is_string>`, :ref:`is_iterable() <is_iterable>`, :ref:`gettype() <gettype>`, :ref:`Type Checking <type-checking>`, :ref:`Truthy <truthy>`, :ref:`Validation <validation>`
