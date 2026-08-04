# Snake Case
Snake case, also written ``snake_case`` is a way of writing names without spaces, where:

+ All the letters are set to lower case
+ Each word is separated from the other by an underscore

The underscore letters create ``humps`` like a camel's back: this is the origin of the name.

Snake case is often used for PHP native functions. 

```php
<?php

    function to_lower(string $string): int {
        // PHP native function
        return mb_strtolower($string);
    }

?>
```

## See Also

+ [stringcase website](https://stringcase.org/)

Related : [Pascal Case](Pascal Case), [Camel Case](Camel Case), [Constant Case](Constant Case), [Underscore](Underscore)
