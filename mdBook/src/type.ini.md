# Type System
Type declarations can be added to function arguments, return values, and, as of PHP 7.4.0, class properties. They ensure that the value is of the specified type at call time, otherwise a ``TypeError`` is thrown. 
```php
<?php

function foo(A $a) : void {}

class x {
    private A $p;
}

?>
```

## See Also

+ [Explore Your Types](https://backendtea.com/post/explore-your-types/)
+ [Narrowing types for static analysis](https://seld.be/notes/narrowing-types-for-static-analysis/)
+ [PHP Oddities](https://flowtwo.io/post/php's-oddities)

Related : [Disjunctive Normal Form (DNF)](Disjunctive Normal Form (DNF)), [False](False), [Mixed](Mixed), [Never Type](Never Type), [Nullable](Nullable), [Object](Object), [Properties](Properties), [Return Type](Return Type), [strict_types](strict_types), [True](True), [Property Type Declaration](Property Type Declaration), [Typed Property](Typed Property), [Intersection Type](Intersection Type), [Object Type](Object Type), [Scalar Types](Scalar Types), [Special Types](Special Types), [Union Type](Union Type), [Variables](Variables), [Autowiring](Autowiring), [Propagation](Propagation), [Pseudo-type](Pseudo-type), [Type Coverage](Type Coverage), [Dependent Type](Dependent Type), [Gradual Type Checking](Gradual Type Checking), [Relative Types](Relative Types), [Standalone Types](Standalone Types), [Autocompletion](Autocompletion), [Question Mark ?](Question Mark ?), [resource](resource), [Types Erasure](Types Erasure), [Type Inference](Type Inference), [Alias Types](Alias Types)
