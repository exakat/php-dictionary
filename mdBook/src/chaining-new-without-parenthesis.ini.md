# Chaining New Without Parenthesis
Since PHP 8.4, it is possible to call a method, access a property or call the ``__invoke()`` method immediately upon instantiation, without parenthesis around the instantiation.

With this syntax, there must be parenthesis, albeit empty ones, after the ``new``.

This should not be confused with calling ``new`` without parenthesis for the constructor.
```php
<?php

class X {
    public $property = 1;
    
    public function foo() { echo __METHOD__; }
    
    public function __invoke() { echo __METHOD__; }
}

new x()->property;  // 1
new x()->foo();     // X::foo
new x()();          // X::__invoke

?>
```

Related : [new](new), [New Without Parenthesis](New Without Parenthesis), [Chaining](Chaining)
