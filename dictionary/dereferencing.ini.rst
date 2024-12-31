.. _dereferencing:
.. meta::
	:description:
		Dereferencing: Dereferencing is the action to access a value, which is referenced with a pointer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dereferencing
	:twitter:description: Dereferencing: Dereferencing is the action to access a value, which is referenced with a pointer
	:twitter:creator: @exakat
	:og:title: Dereferencing
	:og:type: article
	:og:description: Dereferencing is the action to access a value, which is referenced with a pointer
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dereferencing.ini.html
	:og:locale: en


Dereferencing
-------------

Dereferencing is the action to access a value, which is referenced with a pointer. Since PHP has no pointer, dereferencing applies to accessing an element in an array or an object. 

Dereferencing is also possible to function and methods calls : when a function returns an array or an object, it is possible to immediately access one of the element by using the array or method syntax.



.. code-block:: php
   
   <?php
   
   $array = ['a', 'b', 'c'];
   
   echo $array['b'];
   
   function foo() {
       return ['x', 'y', 'z'];
   }
   
   // Function Array Dereferencing
   foo()[2]; // display z
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.array.php>`__

See also `Function Array Dereferencing (FAD) <https://wiki.php.net/rfc/functionarraydereferencing>`_, `Array Dereferencing in PHP <https://xpertdeveloper.com/php-array-dereferencing/>`_, `Function Array Dereferencing in PHP (example 8) <https://www.php.net/manual/en/language.types.array.php#language.types.array.syntax>`_

Related : :ref:`Functions <function>`, :ref:`Array <array>`, :ref:`Object <object>`
