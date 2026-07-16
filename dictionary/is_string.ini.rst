.. _is_string:
.. meta::
	:description:
		is_string(): ``is_string()`` is a PHP native function that checks whether a variable is of type ``string``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: is_string()
	:twitter:description: is_string(): ``is_string()`` is a PHP native function that checks whether a variable is of type ``string``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: is_string()
	:og:type: article
	:og:description: ``is_string()`` is a PHP native function that checks whether a variable is of type ``string``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/is_string.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/is_string.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/is_string.ini.html","name":"is_string()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:21:00 +0000","dateModified":"Thu, 16 Jul 2026 14:21:00 +0000","description":"``is_string()`` is a PHP native function that checks whether a variable is of type ``string``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/is_string().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


is_string()
-----------

``is_string()`` is a PHP native function that checks whether a variable is of type ``string``. It returns ``true`` if the value is a string, ``false`` otherwise.

``is_string()`` does not perform any conversion: it only reports the actual internal type. A numeric string like ``"42"`` is a string, and ``is_string()`` returns ``true`` for it, even though ``is_numeric()`` also returns ``true`` for the same value. Objects implementing ``__toString()`` are not strings, even though they may be used anywhere a string is expected through implicit conversion.

It is frequently used in input validation, and in functions accepting mixed arguments that need to branch on whether a string, as opposed to an array, an object, or a number, was actually passed.

.. code-block:: php
   
   <?php
   
       var_dump(is_string('hello'));  // true
       var_dump(is_string('42'));     // true
       var_dump(is_string(42));       // false
   
       function greet(mixed $name): string {
           if (!is_string($name)) {
               throw new InvalidArgumentException('Name must be a string');
           }
           return 'Hello, ' . $name;
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/function.is-string.php>`__

See also `Type comparison tables <https://www.php.net/manual/en/types.comparisons.php>`_.

Related : :ref:`is_array() <is_array>`, :ref:`is_bool() <is_bool>`, :ref:`is_int() <is_int>`, , :ref:`is_iterable() <is_iterable>`, :ref:`gettype() <gettype>`, :ref:`__toString() Method <-__tostring>`, :ref:`Type Checking <type-checking>`, :ref:`Validation <validation>`
