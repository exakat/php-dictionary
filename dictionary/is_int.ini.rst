.. _is_int:
.. _is_integer:
.. meta::
	:description:
		is_int(): ``is_int()`` is a PHP native function that checks whether a variable is of type ``int``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: is_int()
	:twitter:description: is_int(): ``is_int()`` is a PHP native function that checks whether a variable is of type ``int``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: is_int()
	:og:type: article
	:og:description: ``is_int()`` is a PHP native function that checks whether a variable is of type ``int``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/is_int.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/is_int.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/is_int.ini.html","name":"is_int()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:20:19 +0000","dateModified":"Thu, 16 Jul 2026 14:20:19 +0000","description":"``is_int()`` is a PHP native function that checks whether a variable is of type ``int``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/is_int().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


is_int()
--------

``is_int()`` is a PHP native function that checks whether a variable is of type ``int``. It returns ``true`` if the value is an integer, ``false`` otherwise. ``is_integer()`` and ``is_long()`` are aliases of ``is_int()``.

``is_int()`` returns ``false`` for numeric strings, such as ``"42"``, and for floats, even when they hold a whole number like ``4.0``: only the actual internal ``int`` type qualifies. This makes ``is_int()`` stricter than a numeric check like ``is_numeric()``, which also accepts numeric strings and floats.

It is commonly used to validate array keys, loop counters, or values decoded from external sources, such as JSON, where the distinction between an integer and a numeric string matters, for instance before using the value as an array offset or passing it to a strictly-typed function parameter.

.. code-block:: php
   
   <?php
   
       var_dump(is_int(42));     // true
       var_dump(is_int(4.0));    // false
       var_dump(is_int('42'));   // false
   
       $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
       if (is_int($id)) {
           $user = find_user_by_id($id);
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/function.is-int.php>`__

See also `Type comparison tables <https://www.php.net/manual/en/types.comparisons.php>`_.

Related : :ref:`is_array() <is_array>`, :ref:`is_bool() <is_bool>`, :ref:`is_string() <is_string>`, , , :ref:`is_iterable() <is_iterable>`, :ref:`gettype() <gettype>`, :ref:`Type Checking <type-checking>`, :ref:`Validation <validation>`
