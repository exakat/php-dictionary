.. _is_array:
.. meta::
	:description:
		is_array(): ``is_array()`` is a PHP native function that checks whether a variable is of type array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: is_array()
	:twitter:description: is_array(): ``is_array()`` is a PHP native function that checks whether a variable is of type array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: is_array()
	:og:type: article
	:og:description: ``is_array()`` is a PHP native function that checks whether a variable is of type array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/is_array.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/is_array.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/is_array.ini.html","name":"is_array()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:58:06 +0000","dateModified":"Wed, 15 Jul 2026 13:58:06 +0000","description":"``is_array()`` is a PHP native function that checks whether a variable is of type array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/is_array().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


is_array()
----------

``is_array()`` is a PHP native function that checks whether a variable is of type array. It returns ``true`` if the value is an array, ``false`` otherwise.

This function is essential for type checking and validation before performing array operations. It is commonly used in:

+ Input validation to ensure expected data structures
+ Conditional logic before array manipulation functions
+ Type-safe function implementations
+ Preventing errors when working with mixed-type data

``is_array()`` distinguishes arrays from other PHP data types, including objects, even if those objects implement ``ArrayAccess`` or ``IteratorAggregate`` interfaces. For checking whether a value is traversable or can be used in a ``foreach`` loop, consider ``is_iterable()`` instead.

.. code-block:: php
   
   <?php
   
       $data = [1, 2, 3];
       echo is_array($data) ? 'Array' : 'Not an array'; // Array
   
       $string = 'hello';
       echo is_array($string) ? 'Array' : 'Not an array'; // Not an array
   
       // Validation before array operations
       $input = json_decode('[1, 2, 3]', true);
       if (is_array($input)) {
           $result = array_map(fn($n) => $n * 2, $input);
           print_r($result);
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/function.is-array.php>`__

See also `Type comparison tables <https://www.php.net/manual/en/types.comparison.php>`_.

Related : :ref:`Array, [] <array>`, :ref:`is_object() <is_object>`, , , , , , :ref:`Type Checking <type-checking>`, :ref:`ArrayAccess <arrayaccess>`, :ref:`ArrayObject <arrayobject>`, 
