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
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metaclass.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metaclass.html","name":"Metaclass","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:04:16 +0000","dateModified":"Mon, 20 Jul 2026 17:04:16 +0000","description":"A metaclass is a class whose instances are themselves classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Metaclass.html"]}],"alternateName":["meta-class"],"keywords":["concept","oop","metaprogramming","unsupported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/meta-object-protocol.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metaprogramming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attribute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstract-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__call.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Metaclass"},{"@type":"CreativeWork","name":"PHP Reflection API","url":"https:\/\/www.php.net\/manual\/en\/book.reflection.php"},{"@type":"CreativeWork","name":"Python metaclasses","url":"https:\/\/docs.python.org\/3\/reference\/datamodel.html#metaclasses"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"metaclass"}]}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Metaclass)**
## See Also

+ [PHP Reflection API](https://www.php.net/manual/en/book.reflection.php)
+ [Python metaclasses](https://docs.python.org/3/reference/datamodel.html#metaclasses)

## Related

+ [Meta-object Protocol (MOP)](meta-object-protocol.html)
+ [Metaprogramming](metaprogramming.html)
+ [Reflection](reflection.html)
+ [Attribute](attribute.html)
+ [Magic Methods](magic-method.html)
+ [Abstract Class](abstract-class.html)
+ [\_\_call() Method](__call.html)
