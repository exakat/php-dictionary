# Lint, Won't Execute
``Lint, won't execute`` is a special state of the code, where the source can be parsed, but cannot be executed.

This covers a range of problems, from very obvious to hidden syntaxes. They depends on the moment where PHP applies its checks.

Some situations are depend on the inclusion, autoloading and, generally, the order of execution of the code.
```php
<?php

function foo() {
    clone 1; // obviously fails when executed
}

function goo(int $a = A) {}
const A = 'abc';

// fails when called without arguments
foo(1); // OK
foo();  // KO

?>
```

Related : [Source Code](Source Code), [Parse](Parse), [Fatal Error](Fatal Error), [Syntax Error](Syntax Error), [Error](Error)
