# Order Of Execution
The order of execution is the sequence that PHP uses to run the code. While a single file means that commands are executed one after the other, there are several PHP operations that makes that order much more elaborate.

PHP processes a file in two steps before executing it. In the first step, the engine parses and compiles the source into opcodes. During this compilation step, unconditionally declared top-level functions and classes are registered early, as in early binding, making them available to the whole file regardless of their textual position. In the second step, the opcodes are executed sequentially, top to bottom.

As a result, the rules for what must be defined before use depend on the kind of entity:

+ Functions: a function declared unconditionally at the top level is early-bound and can be called before its definition in the file. A function declared inside a conditional block or inside another function is only available after that declaration is reached at runtime
+ Classes: an unconditionally declared top-level class is also early-bound. A conditionally declared class must be defined before use, or PHP will attempt to load it via autoloading. Autoloading gives classes a second chance that functions do not have
+ Constants: ``const`` declarations at the top level are evaluated at compile time and are available immediately. ``define()`` calls are runtime statements and only take effect when execution reaches them
+ Variables: a variable must be assigned before it is read. Reading an uninitialized variable produces a notice and yields ``null``. PHP has no variable hoisting at all
+ Included files: code from an ``include`` or ``require`` runs at the point where the statement is reached, not before. Any definitions in the included file become available from that point onward.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/order-of-execution.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/order-of-execution.html","name":"Order Of Execution","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 09:44:33 +0000","dateModified":"Fri, 07 Aug 2026 09:44:33 +0000","description":"The order of execution is the sequence that PHP uses to run the code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/order-of-execution.html"]}],"alternateName":["execution-order"],"keywords":["concept","lifecycle"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-checking.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lint.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compile.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/early-binding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-hoisting.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autoload.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/include.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/execution.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/hoisting.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/global-code.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.npopov.com\/2021\/10\/20\/Early-binding-in-PHP.html"},{"@type":"CreativeWork","name":"Compare define() vs const in PHP","url":"https:\/\/www.tutorialspoint.com\/article\/compare-define-vs-const-in-php"},{"@type":"CreativeWork","name":"PHP: Syntax - Manual","url":"https:\/\/www.php.net\/manual\/en\/language.constants.syntax.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"order-of-execution"}]}]}</script>
```php
<?php

    // Works: top-level function, early-bound by the compiler
    foo();
    function foo() { echo 'foo'; }
    
    // Fails at runtime: function is inside a conditional, not early-bound
    // bar(); // Fatal error: call to undefined function
    if (true) {
        function bar() { echo 'bar'; }
    }
    bar(); // works only after this point
    
    // Works: const is compile-time
    echo MY_CONST;
    const MY_CONST = 42;
    
    // Fails: define() is a runtime call
    // echo MY_RT_CONST; // undefined constant
    define('MY_RT_CONST', 99);
    echo MY_RT_CONST; // works only after this point
    
    // Classes: unconditional top-level class is early-bound
    $obj = new Foo();
    class Foo {}
    
    // Classes: conditional class requires autoload or prior declaration
    if (true) {
        class Bar {}
    }
    $obj2 = new Bar(); // works only after this point

?>
```

**[Documentation](https://www.npopov.com/2021/10/20/Early-binding-in-PHP.html)**
## See Also

+ [Compare define() vs const in PHP](https://www.tutorialspoint.com/article/compare-define-vs-const-in-php)
+ [PHP: Syntax - Manual](https://www.php.net/manual/en/language.constants.syntax.php)

## Related

+ [Type Checking](type-checking.html)
+ [Linting](lint.html)
+ [Compile](compile.html)
+ [Early Binding](early-binding.html)
+ [Class Hoisting](class-hoisting.html)
+ [Class Autoloading](autoload.html)
+ [Constants](constant.html)
+ [include](include.html)
+ [Execution](execution.html)
+ [Hoisting](hoisting.html)
+ [Global Code](global-code.html)
