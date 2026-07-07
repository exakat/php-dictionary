.. _metaprogramming:
.. _meta-programming:
.. meta::
	:description:
		Metaprogramming: Metaprogramming is the practice of writing code that treats other code as data: reading, generating, transforming, or executing programs at runtime or compile time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Metaprogramming
	:twitter:description: Metaprogramming: Metaprogramming is the practice of writing code that treats other code as data: reading, generating, transforming, or executing programs at runtime or compile time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Metaprogramming
	:og:type: article
	:og:description: Metaprogramming is the practice of writing code that treats other code as data: reading, generating, transforming, or executing programs at runtime or compile time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/metaprogramming.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Metaprogramming","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:12:18 +0000","dateModified":"Tue, 07 Jul 2026 05:12:18 +0000","description":"Metaprogramming is the practice of writing code that treats other code as data: reading, generating, transforming, or executing programs at runtime or compile time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Metaprogramming.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Metaprogramming
---------------

Metaprogramming is the practice of writing code that treats other code as data: reading, generating, transforming, or executing programs at runtime or compile time. A metaprogram operates at a higher level of abstraction than an ordinary program because it manipulates the representation of programs rather than (or in addition to) running domain logic.

Common metaprogramming techniques include:

+ Reflection: inspecting types, methods, properties, or annotations at runtime, with the ``ReflectionClass``.
+ Code generation: emitting source files, proxy classes, or configuration from schemas, attributes, or templates.
+ Macros: transforming code at a syntactic level before or during parsing.
+ Eval: constructing and executing code strings at runtime.
+ Dynamic dispatch: routing method calls through ``__call`` or ``__callStatic`` based on runtime state.
+ Homoiconicity: using a language's native data structures to represent and manipulate programs (Lisp).

PHP supports several forms of metaprogramming:

+ The Reflection API (``ReflectionClass``, ``ReflectionMethod``, ``ReflectionProperty``, ``ReflectionAttribute``) provides read-only introspection of the live object model.
+ Magic methods (``__get``, ``__set``, ``__call``, ``__callStatic``, ``__invoke``, ``__clone``, ``__toString``) intercept property and method access at runtime.
+ ``eval()`` and ``create_function()`` execute dynamically constructed code strings.
+ ``nikic/php-parser`` enables full AST-level read and write access to PHP source from PHP itself.
+ PHP 8.0+ attributes allow structured metadata on declarations, consumed at runtime by frameworks and code generators.
+ Userland code generators (Doctrine proxies, Rector, Symfony DI compilation) produce PHP files before or at application boot.

PHP does not support compile-time generics, hygienic macros, metaclasses, or a Meta-object Protocol: the object model is implemented in C and is not programmable from userland.

.. code-block:: php
   
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


`Documentation <https://en.wikipedia.org/wiki/Metaprogramming>`__

See also `PHP Reflection API <https://www.php.net/manual/en/book.reflection.php>`_ and `nikic/php-parser <https://github.com/nikic/PHP-Parser>`_.

Related : :ref:`Reflection <reflection>`, :ref:`Macro <macro>`, :ref:`Homoiconicity <homoiconicity>`, :ref:`Code Generation <code-generation>`, :ref:`Eval() <eval>`, :ref:`Meta-object Protocol <meta-object-protocol>`, :ref:`Metaclass <metaclass>`, :ref:`Template Metaprogramming (TMP) <template-metaprogramming>`, :ref:`Hygienic Macro <hygienic-macro>`, :ref:`Attribute <attribute>`, :ref:`__call() Method <-__call>`

Related packages : `nikic/php-parser <https://packagist.org/packages/nikic/php-parser>`_
