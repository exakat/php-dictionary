---
type: "concept"
title: "Metaclass"
description: "A metaclass is a class whose instances are themselves classes."
resource: "https://en.wikipedia.org/wiki/Metaclass"
tags: ["concept", "oop", "metaprogramming", "unsupported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Metaclass

A metaclass is a class whose instances are themselves classes. In a language with a full metaclass system, every class is an object, and that object is an instance of a metaclass. The metaclass controls how the class is created, how its instances are instantiated, and how method resolution, attribute access, and inheritance work. Python's ``type`` is the default metaclass; a custom metaclass inherits from ``type`` and overrides ``__new__``, ``__init__``, or ``__call__`` to intercept class creation.

Smalltalk was the original language to formalise the idea: every class in Smalltalk has a corresponding metaclass that describes the class's own behaviour. Ruby's eigenclasses, singleton classes, serve a related role.

PHP does not have metaclasses. PHP classes are not objects that can be instantiated from a metaclass, and there is no hook point at which user code can intercept or modify class creation at the language level.

PHP approximations of metaclass-like behaviour:

+ Abstract classes and interfaces constrain what a class must look like without controlling how it is created.
+ The Reflection API ``ReflectionClass`` allows runtime introspection of a class's structure but cannot alter it.
+ Magic methods ``__get``, ``__set``, ``__call``, and ``__callStatic`` intercept property and method access on instances, approximating some MOP hooks.
+ Attribute-driven frameworks such as Doctrine or Symfony DI read class-level ``#[Attribute]`` annotations and generate or register behaviour at build time, simulating what a metaclass might do during class creation in Python.
+ ``class_alias()`` can create alternative names for classes but cannot redefine their behaviour.

```php
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
```

## Documentation
- [https://en.wikipedia.org/wiki/Metaclass](https://en.wikipedia.org/wiki/Metaclass)

## See Also
- [PHP Reflection API](https://www.php.net/manual/en/book.reflection.php)
- [Python metaclasses](https://docs.python.org/3/reference/datamodel.html#metaclasses)

## Related
- [Meta-object Protocol (MOP)](/features/meta-object-protocol.md)
- [Metaprogramming](/features/metaprogramming.md)
- [Reflection](/features/reflection.md)
- [Attribute](/features/attribute.md)
- [Magic Methods](/features/magic-method.md)
- [Abstract Class](/features/abstract-class.md)
- [__call() Method](/features/__call.md)

