# Nullable
Nullable is the name of the NULL value, when used as a type. Until PHP 8.0, it was marked as a question mark with types, and since PHP 8.0, it is also marked with its own name, as an union type.
```php
<?php

function foo(?A $a) : null | B {
    // code
}

?>
```

## See Also

+ [Dealing with null](https://front-line-php.com/dealing-with-null)

Related : [Null](Null), [Type System](Type System), [Contravariance](Contravariance), [Intersection Type](Intersection Type), [Property Type Declaration](Property Type Declaration)
