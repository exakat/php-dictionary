# Meta-object Protocol (MOP)
A Meta-object Protocol, also called for MOP, is an API that exposes a language's own object system as a first-class, programmable layer. Through a MOP, user code can redefine how classes are created, how methods are looked up and dispatched, how instances are allocated, and how inheritance is resolved: extending or replacing the object model itself from within the language. The canonical MOP is CLOS, Common Lisp Object System, which exposes generic functions such as ``make-instance``, ``compute-applicable-methods``, and ``slot-value`` as overridable entry points.

Python's data model, with ``__new__``, ``__init_subclass__``, ``__class_getitem__``, metaclasses, and Ruby's ``BasicObject`` and ``method_missing`` give partial MOP-like access. ``Smalltalk``'s entire class hierarchy is itself a set of ``Smalltalk`` objects, making it fully reflective by design.

PHP does not have a Meta-object Protocol. PHP's object system is implemented in C and is not programmable from userland. PHP does provide several approximations:

+ The Reflection API, ``ReflectionClass``, ``ReflectionMethod``, ``ReflectionProperty``, exposes read access to the object model at runtime, but cannot modify it.
+ Magic methods, ``__get``, ``__set``, ``__call``, ``__callStatic``, ``__isset``, ``__unset``, intercept individual property and method access operations, giving hook points that resemble parts of a MOP.
+ ``class_alias()`` lets user code create alternative names for classes, but cannot alter dispatch behaviour.
+ ``Closure::bind()`` and ``Closure::bindTo()`` allow closures to be rebound to a different object scope, approximating dynamic method injection.
+ Libraries such as ``ocramius/proxy-manager`` implement lazy-loading and interception proxies on top of these primitives, simulating part of what a MOP would provide natively.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/meta-object-protocol.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/meta-object-protocol.html","name":"Meta-object Protocol (MOP)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 05:57:32 +0000","dateModified":"Thu, 13 Aug 2026 05:57:32 +0000","description":"A Meta-object Protocol, also called for MOP, is an API that exposes a language's own object system as a first-class, programmable layer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Meta-object Protocol (MOP).html"]}],"alternateName":["mop"],"keywords":["unsupported","metaprogramming","oop","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metaprogramming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/homoiconicity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/proxy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__get.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__call.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metaclass.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Metaobject"},{"@type":"CreativeWork","name":"The Art of the Metaobject Protocol (Kiczales et al.)","url":"https:\/\/en.wikipedia.org\/wiki\/The_Art_of_the_Metaobject_Protocol"},{"@type":"CreativeWork","name":"PHP Reflection API","url":"https:\/\/www.php.net\/manual\/en\/book.reflection.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"meta-object-protocol"}]}]}</script>
```php
<?php

    // PHP Reflection: read-only introspection of the object model.
    // A true MOP would also allow redefining dispatch and instantiation.

    $rc = new ReflectionClass(ArrayObject::class);

    foreach ($rc->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
        echo $method->getName() . "\n";
    }

    // Magic methods: intercept property/method access, limited MOP hooks.
    class DynamicEntity {
        private array $data = [];

        public function __get(string $name): mixed {
            return $this->data[$name] ?? null;
        }

        public function __set(string $name, mixed $value): void {
            $this->data[$name] = $value;
        }

        public function __call(string $name, array $args): mixed {
            // intercept unknown method calls, not full method-dispatch override
            throw new \BadMethodCallException("No method: $name");
        }
    }

    // Rebind a closure to a different object scope (approximates method injection)
    $greet = Closure::bind(
        static function (string $suffix): string { return self::class . $suffix; },
        null,
        DynamicEntity::class
    );

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Metaobject)**
## See Also

+ [The Art of the Metaobject Protocol (Kiczales et al.)](https://en.wikipedia.org/wiki/The_Art_of_the_Metaobject_Protocol)
+ [PHP Reflection API](https://www.php.net/manual/en/book.reflection.php)

## Related

+ [Reflection](reflection.html)
+ [Magic Methods](magic-method.html)
+ [Metaprogramming](metaprogramming.html)
+ [Homoiconicity](homoiconicity.html)
+ [Proxy](proxy.html)
+ [Closure](closure.html)
+ [\_\_get() Method](__get.html)
+ [\_\_call() Method](__call.html)
+ [Metaclass](metaclass.html)

## Related packages

+ [ocramius/proxy-manager](https://packagist.org/packages/ocramius/proxy-manager)
