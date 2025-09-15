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
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Reflection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 10 Sep 2025 09:18:26 +0000","dateModified":"Wed, 10 Sep 2025 09:18:26 +0000","description":"PHP reflection is a feature that allows to inspect and interact with the structure of classes, interfaces, methods, properties, and other elements of the code, during runtime","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Reflection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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

See also `Introduction to PHP Reflection API <https://medium.com/tech-tajawal/introduction-to-php-reflection-api-4af07cc17db4>`_, https://dev.to/galo4kin/understanding-php-reflection-an-in-depth-guide-with-examples-189n

Related packages : `bramus/reflection <https://packagist.org/packages/bramus/reflection>`_, `roave/better-reflection <https://packagist.org/packages/roave/better-reflection>`_
