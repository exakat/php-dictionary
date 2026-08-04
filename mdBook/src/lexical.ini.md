# Lexical Variable
A lexical variable is the type of variable that appears in the ``use`` part of a closure definition. They are both variables of the current scope, which defines the closure, and parameters of the scope of the closure.
```php
<?php

$c = 1;

function ($a, $b) use ($c) {
    // doSomething();
}

?>
```

Related : [Closure](Closure), [Variables](Variables), [Closure Binding](Closure Binding), [Anonymous Function](Anonymous Function)
