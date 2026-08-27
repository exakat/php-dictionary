# Metaprogramming
Metaprogramming is the practice of writing code that treats other code as data: reading, generating, transforming, or executing programs at runtime or compile time. A metaprogram operates at a higher level of abstraction than an ordinary program because it manipulates the representation of programs rather than, or in addition to, running domain logic.

Common metaprogramming techniques include:

+ Reflection: inspecting types, methods, properties, or annotations at runtime, with the ``ReflectionClass``
+ Code generation: emitting source files, proxy classes, or configuration from schemas, attributes, or templates
+ Macros: transforming code at a syntactic level before or during parsing
+ Eval: constructing and executing code strings at runtime
+ Dynamic dispatch: routing method calls through ``__call`` or ``__callStatic`` based on runtime state
+ Homoiconicity: using a language's native data structures to represent and manipulate programs

PHP supports several forms of metaprogramming:

+ The Reflection API, with the classes ``ReflectionClass``, ``ReflectionMethod``, ``ReflectionProperty``, ``ReflectionAttribute``, provides read-only introspection of the live object model.
+ Magic methods, with the methods ``__get``, ``__set``, ``__call``, ``__callStatic``, ``__invoke``, ``__clone``, ``__toString``, intercept property and method access at runtime.
+ ``eval()`` and ``create_function()`` execute dynamically constructed code strings.
+ ``nikic/php-parser`` enables full AST-level read and write access to PHP source from PHP itself.
+ PHP 8.0+ attributes allow structured metadata on declarations, consumed at runtime by frameworks and code generators.
+ Userland code generators, such as Doctrine proxies, Rector, Symfony DI compilation, etc. produce PHP files before or at application boot.

PHP does not support compile-time generics, hygienic macros, metaclasses, or a Meta-object Protocol: the object model is implemented in C and is not programmable from userland.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metaprogramming.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metaprogramming.html","name":"Metaprogramming","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 04:48:45 +0000","dateModified":"Thu, 16 Jul 2026 04:48:45 +0000","description":"Metaprogramming is the practice of writing code that treats other code as data: reading, generating, transforming, or executing programs at runtime or compile time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metaprogramming.html"]}],"alternateName":["meta-programming"],"keywords":["concept","metaprogramming"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/macro.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/homoiconicity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/code-generation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/eval.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/meta-object-protocol.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metaclass.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/template-metaprogramming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hygienic-macro.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attribute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__call.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Metaprogramming"},{"@type":"CreativeWork","name":"PHP Reflection API","url":"https:\/\/www.php.net\/manual\/en\/book.reflection.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"metaprogramming"}]}]}</script>
```php
<?php

    // 1. Reflection: introspect a class at runtime
    $rc = new ReflectionClass(ArrayObject::class);
    echo $rc->getMethod('offsetGet')->getNumberOfParameters(); // 1

    // 2. Dynamic dispatch via magic method
    class DynamicProxy {
        public function __call(string $name, array $args): mixed {
            return strtoupper($name) . '(' . implode(', ', $args) . ')';
        }
    }
    echo (new DynamicProxy())->hello('world'); // HELLO(world)

    // 3. Attribute-driven metadata (PHP 8.0+)
    #[\Attribute(\Attribute::TARGET_METHOD)]
    final class Route {
        public function __construct(public readonly string $path) {}
    }

    class UserController {
        #[Route('/users')]
        public function index(): void {}
    }

    $attr = (new ReflectionMethod(UserController::class, 'index'))
        ->getAttributes(Route::class)[0]
        ->newInstance();
    echo $attr->path; // '/users'

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Metaprogramming)**
## See Also

+ [PHP Reflection API](https://www.php.net/manual/en/book.reflection.php)

## Related

+ [Reflection](reflection.html)
+ [Macro](macro.html)
+ [Homoiconicity](homoiconicity.html)
+ [Code Generation](code-generation.html)
+ [Eval()](eval.html)
+ [Meta-object Protocol (MOP)](meta-object-protocol.html)
+ [Metaclass](metaclass.html)
+ [Template Metaprogramming (TMP)](template-metaprogramming.html)
+ [Hygienic Macro](hygienic-macro.html)
+ [Attribute](attribute.html)
+ [\_\_call() Method](__call.html)

## Related packages

+ [nikic/php-parser](https://packagist.org/packages/nikic/php-parser)
