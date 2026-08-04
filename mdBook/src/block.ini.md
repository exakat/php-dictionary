# Block
Blocks are zero, one or more instructions, grouped together with or without curly brackets.

A number of commands require blocks of instructions: ``namespace``, ``use``, ``function``, ``class``, ``trait``, ``interface``, ``enum``, ``closure``, ``switch``, ``match``, ``for``, ``foreach``, ``while``, ``do..while``, ``if-then``.  

Blocks may require brackets, like for ``class``, ``switch()``, ``function bodies``; they may be optional, like with ``case``, ``arrow-functions``, ``namespace`` or loops. 

A block may live on its own: it has no impact on the code, although it might be used to arbitrarily group instructions.
```php
<?php

function foo($a) {
    if ($a) {
        $b = 1;
    } else 
        $b = 2;
        
    return $b;
}
?>
```

Related : [Body](Body), [Docblock](Docblock), [Bracketless](Bracketless), [Curly Brackets](Curly Brackets)
