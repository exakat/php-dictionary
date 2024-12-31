.. _typed-property:
.. meta::
	:description:
		Typed Property: A typed property has a type in its definition.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Typed Property
	:twitter:description: Typed Property: A typed property has a type in its definition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Typed Property
	:og:type: article
	:og:description: A typed property has a type in its definition
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/typed-property.ini.html
	:og:locale: en


Typed Property
--------------

A typed property has a type in its definition. 

Typed property may have a default value, although it must be compatible with the specified type. Typed properties cannot have a default values when they ared typed with an object type.

The type applies all the time: unlike the parameter's type, any usage of the property must be compatible with the type.

Typed properties may be static or not.

Typed properties are a base for ``readonly`` and assymetric visibility.


.. code-block:: php
   
   <?php
   
   class x {
       private int $i = 1;
       
       private readonly float $y = 1.2;
       
       public static string $s;
   }
   
   ?>


Related : :ref:`Properties <property>`, :ref:`Type System <type>`
