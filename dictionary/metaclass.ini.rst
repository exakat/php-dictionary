.. _metaclass:
.. _meta-class:
.. meta::
	:description:
		Metaclass: A metaclass is a class whose instances are themselves classes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Metaclass
	:twitter:description: Metaclass: A metaclass is a class whose instances are themselves classes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Metaclass
	:og:type: article
	:og:description: A metaclass is a class whose instances are themselves classes
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/metaclass.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/metaclass.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/metaclass.ini.html","name":"Metaclass","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:04:16 +0000","dateModified":"Mon, 20 Jul 2026 17:04:16 +0000","description":"A metaclass is a class whose instances are themselves classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Metaclass.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Metaclass
---------

A metaclass is a class whose instances are themselves classes. In a language with a full metaclass system, every class is an object, and that object is an instance of a metaclass. The metaclass controls how the class is created, how its instances are instantiated, and how method resolution, attribute access, and inheritance work. Python's ``type`` is the default metaclass; a custom metaclass inherits from ``type`` and overrides ``__new__``, ``__init__``, or ``__call__`` to intercept class creation.

Smalltalk was the original language to formalise the idea: every class in Smalltalk has a corresponding metaclass that describes the class's own behaviour. Ruby's eigenclasses, singleton classes, serve a related role.

PHP does not have metaclasses. PHP classes are not objects that can be instantiated from a metaclass, and there is no hook point at which user code can intercept or modify class creation at the language level.

PHP approximations of metaclass-like behaviour:

+ Abstract classes and interfaces constrain what a class must look like without controlling how it is created.
+ The Reflection API ``ReflectionClass`` allows runtime introspection of a class's structure but cannot alter it.
+ Magic methods ``__get``, ``__set``, ``__call``, and ``__callStatic`` intercept property and method access on instances, approximating some MOP hooks.
+ Attribute-driven frameworks such as Doctrine or Symfony DI read class-level ``#[Attribute]`` annotations and generate or register behaviour at build time, simulating what a metaclass might do during class creation in Python.
+ ``class_alias()`` can create alternative names for classes but cannot redefine their behaviour.

.. code-block:: php
   
   <?php
   
       // PHP has no metaclass. The Reflection API offers read-only introspection.
       $rc = new ReflectionClass(DateTime::class);
       echo $rc->getName() . ' has ' . count($rc->getMethods()) . " methods\n";
   
       // Attribute-driven behaviour: closest PHP equivalent to metaclass registration.
       #[\Attribute(\Attribute::TARGET_CLASS)]
       final class Entity {
           public function __construct(public readonly string $table) {}
       }
   
       #[Entity(table: 'users')]
       class User {
           public function __construct(
               public readonly int $id,
               public readonly string $name,
           ) {}
       }
   
       // A framework reads the attribute at build or boot time — similar to what
       // a Python metaclass __init_subclass__ hook would do automatically.
       $attr = (new ReflectionClass(User::class))
           ->getAttributes(Entity::class)[0]
           ->newInstance();
       echo $attr->table; // 'users'
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Metaclass>`__

See also `PHP Reflection API <https://www.php.net/manual/en/book.reflection.php>`_ and `Python metaclasses <https://docs.python.org/3/reference/datamodel.html#metaclasses>`_.

Related : :ref:`Meta-object Protocol (MOP) <meta-object-protocol>`, :ref:`Metaprogramming <metaprogramming>`, :ref:`Reflection <reflection>`, :ref:`Attribute <attribute>`, :ref:`Magic Methods <magic-method>`, :ref:`Abstract Class <abstract-class>`, :ref:`__call() Method <-__call>`
