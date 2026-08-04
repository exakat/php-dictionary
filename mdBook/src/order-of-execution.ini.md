# Order Of Execution
The order of execution is the sequence that PHP uses to run the code. While a single file means that commands are executed one after the other, there are several PHP operations that makes that order much more elaborate.

PHP processes a file in two steps before executing it. In the first step, the engine parses and compiles the source into opcodes. During this compilation step, unconditionally declared top-level functions and classes are registered early, as in early binding, making them available to the whole file regardless of their textual position. In the second step, the opcodes are executed sequentially, top to bottom.

As a result, the rules for what must be defined before use depend on the kind of entity:

+ Functions: a function declared unconditionally at the top level is early-bound and can be called before its definition in the file. A function declared inside a conditional block or inside another function is only available after that declaration is reached at runtime
+ Classes: an unconditionally declared top-level class is also early-bound. A conditionally declared class must be defined before use, or PHP will attempt to load it via autoloading. Autoloading gives classes a second chance that functions do not have
+ Constants: ``const`` declarations at the top level are evaluated at compile time and are available immediately. ``define()`` calls are runtime statements and only take effect when execution reaches them
+ Variables: a variable must be assigned before it is read. Reading an uninitialized variable produces a notice and yields ``null``. PHP has no variable hoisting at all
+ Included files: code from an ``include`` or ``require`` runs at the point where the statement is reached, not before. Any definitions in the included file become available from that point onward.
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

Related : [Type Checking](Type Checking), [Linting](Linting), [Compile](Compile), [Early Binding](Early Binding), [Class Hoisting](Class Hoisting), [Class Autoloading](Class Autoloading), [Constants](Constants), [include](include), [Execution](Execution), [Hoisting](Hoisting), [Global Code](Global Code)
