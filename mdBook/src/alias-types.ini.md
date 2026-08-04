# Alias Types
An alias type is a short name for several types at once. Under the hood, alias types are union type. 

PHP offers several native alias types, such as ``iterable``, which represents ``array | Traversable``. Alias type are not available for customisation. 

The same rules applies to alias types than other types: for example, ``array | iterable`` produces a 'Duplicate type array is redundant' error.
```php
<?php

function foo(iterable $a) {
}

?>
```

Related : [Scalar Types](Scalar Types), [Union Type](Union Type), [Type System](Type System), [Scalar Types](Scalar Types)
