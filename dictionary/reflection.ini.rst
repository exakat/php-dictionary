.. _reflection:

Reflection
----------

PHP reflection is a feature that allows to inspect and interact with the structure of classes, interfaces, methods, properties, and other elements of the code, during runtime. Reflection in PHP is made possible by the Reflection API, which provides a set of classes and functions for introspecting objects and classes.

PHP offers a complete API to describe classes, methods, interfaces, constants, functions, extensions, traits, enums and their components. 

+ ReflectionAttribute — The ReflectionAttribute class
+ ReflectionClass — The ReflectionClass class
+ ReflectionClassConstant — The ReflectionClassConstant class
+ ReflectionEnum — The ReflectionEnum class
+ ReflectionEnumBackedCase — The ReflectionEnumBackedCase class
+ ReflectionEnumUnitCase — The ReflectionEnumUnitCase class
+ ReflectionException — The ReflectionException class
+ ReflectionExtension — The ReflectionExtension class
+ ReflectionFiber — The ReflectionFiber class
+ ReflectionFunction — The ReflectionFunction class
+ ReflectionFunctionAbstract — The ReflectionFunctionAbstract class
+ ReflectionGenerator — The ReflectionGenerator class
+ ReflectionIntersectionType — The ReflectionIntersectionType class
+ ReflectionMethod — The ReflectionMethod class
+ ReflectionNamedType — The ReflectionNamedType class
+ ReflectionObject — The ReflectionObject class
+ ReflectionParameter — The ReflectionParameter class
+ ReflectionProperty — The ReflectionProperty class
+ ReflectionReference — The ReflectionReference class
+ ReflectionType — The ReflectionType class
+ ReflectionUnionType — The ReflectionUnionType class
+ ReflectionZendExtension — The ReflectionZendExtension class
+ Reflector — The Reflector interface

Reflection is also available in other programming languages.


.. code-block:: php
   
   <?php
   Reflection::export(new ReflectionClass('Exception'));
   ?>


`Documentation <https://www.php.net/manual/en/book.reflection.php>`__

See also `Introduction to PHP Reflection API <https://medium.com/tech-tajawal/introduction-to-php-reflection-api-4af07cc17db4>`_

Related packages : `bramus/reflection <https://packagist.org/packages/bramus/reflection>`_, `roave/better-reflection <https://packagist.org/packages/roave/better-reflection>`_
