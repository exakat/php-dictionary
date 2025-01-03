.. _reflection:
.. meta::
	:description:
		Reflection: PHP reflection is a feature that allows to inspect and interact with the structure of classes, interfaces, methods, properties, and other elements of the code, during runtime.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Reflection
	:twitter:description: Reflection: PHP reflection is a feature that allows to inspect and interact with the structure of classes, interfaces, methods, properties, and other elements of the code, during runtime
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Reflection
	:og:type: article
	:og:description: PHP reflection is a feature that allows to inspect and interact with the structure of classes, interfaces, methods, properties, and other elements of the code, during runtime
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/reflection.ini.html
	:og:locale: en


Reflection
----------

PHP reflection is a feature that allows to inspect and interact with the structure of classes, interfaces, methods, properties, and other elements of the code, during runtime. Reflection in PHP is made possible by the Reflection API, which provides a set of classes and functions for introspecting objects and classes.

PHP offers a complete API to describe classes, methods, interfaces, constants, functions, extensions, traits, enums and their components. 

+ ReflectionAttribute
+ ReflectionClass
+ ReflectionClassConstant
+ ReflectionEnum
+ ReflectionEnumBackedCase
+ ReflectionEnumUnitCase
+ ReflectionException
+ ReflectionExtension
+ ReflectionFiber
+ ReflectionFunction
+ ReflectionFunctionAbstract
+ ReflectionGenerator
+ ReflectionIntersectionType
+ ReflectionMethod
+ ReflectionNamedType
+ ReflectionObject
+ ReflectionParameter
+ ReflectionProperty
+ ReflectionReference
+ ReflectionType
+ ReflectionUnionType
+ ReflectionZendExtension
+ Reflector

Reflection is also available in other programming languages.


.. code-block:: php
   
   <?php
      Reflection::export(new ReflectionClass('Exception'));
   ?>


`Documentation <https://www.php.net/manual/en/book.reflection.php>`__

See also `Introduction to PHP Reflection API <https://medium.com/tech-tajawal/introduction-to-php-reflection-api-4af07cc17db4>`_

Related packages : `bramus/reflection <https://packagist.org/packages/bramus/reflection>`_, `roave/better-reflection <https://packagist.org/packages/roave/better-reflection>`_
