# Question Mark ?
``?`` is a character, used in various situations: 

+ Ternary operator: ``$a ? $b : $c``
+ Short ternary operator: ``$a ?: $c``
+ Coalesce operator: ``$a ??``
+ Null type, ``function foo(?int $int) {}``
+ As a quantifier in regex, 0 or 1
+ As a quantifier with ``fnmatch()``, 0 or 1.
```php
<?php

    $a = 1;
    echo a ? 'b' : 'c'; // c

?>
```

Related : [Ternary Operator](Ternary Operator), [Coalesce Operator](Coalesce Operator), [Type System](Type System), [Regular Expression](Regular Expression), [fnmatch()](fnmatch())
