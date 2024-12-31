.. _union-type:
.. _union:
.. meta::
	:description:
		Union Type: Union types refer to the ability to specify multiple possible types for a property, parameter, or return value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Union Type
	:twitter:description: Union Type: Union types refer to the ability to specify multiple possible types for a property, parameter, or return value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Union Type
	:og:type: article
	:og:description: Union types refer to the ability to specify multiple possible types for a property, parameter, or return value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/union-type.ini.html
	:og:locale: en


Union Type
----------

Union types refer to the ability to specify multiple possible types for a property, parameter, or return value. It allows a property or parameter to accept values of different types. It allows a method or function to return values of different types. Union types were introduced in PHP 8.

Before PHP 8, type declaration could only have a single type declaration, except for the null type. Nowadays, with union types, the code can declare multiple types by separating them with a pipe (|) symbol. 

Union types were introduced for exception catching, before PHP 8.


.. code-block:: php
   
   <?php
   
   class x {
       private A | B | C $property;
   }
   
   try {
   
   } catch (A|B|C $e) {
   
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.union>`__

See also `What are union types and how do you use them in PHP? <https://www.educative.io/answers/what-are-union-types-and-how-do-you-use-them-in-php>`_, `New in PHP 8: Union Types <https://alexwebdevelop.activehosted.com/social/3fe94a002317b5f9259f82690aeea4cd.328>`_

Related : :ref:`Type System <type>`, :ref:`Alias Types <alias-types>`, :ref:`Disjunctive Normal Form (DNF) <dnf-type>`, :ref:`Literal Types <literal-types>`, :ref:`Relative Types <relative-types>`, :ref:`Property Type Declaration <type-declaration-property>`, :ref:`Type System <typehint>`

Added in PHP 8.0
