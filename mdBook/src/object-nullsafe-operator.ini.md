# Object Nullsafe Operator ?->
The object nullsafe operator is an operator which gives access to properties and methods of an object.

Depending on the context, those properties and methods must be public or protected.

Object Nullsafe Operator is directly related to the Object operator: the difference is that the former keeps on executing when the support object is null, while the second stops with a fatal error.
```php
<?php

    $array = ['a' => (new stdClass)?->a, ];
    
    // displays 1
    echo $array['a']?->a;
    
    // displays null, so nothing
    echo $array['b']?->a;

?>
```

## See Also

+ [Object Operator in PHP](https://www.delftstack.com/howto/php/php-object-operator/)

Related : [Scope Resolution Operator ::](Scope Resolution Operator ::), [Object Operator ->](Object Operator ->)
