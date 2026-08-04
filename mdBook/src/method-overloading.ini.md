# Method Overloading
Method overloading is a feature that allows multiple definitions of a method, depending on the type of the passed parameters.

Method overloading is a PHP feature, based on the usage of the ``func_get_args()`` native function. It differs from other language's implementation as there is only one method definition, but multiple execution paths. Method overloading usually requires other features, such as typing or default values, to be handled manually.
```php
<?php

//
class X {
    // $a and $b could be typed array|int
    // returntype could be array|int 
    // yet, it may end up being confusing
    function substract($a, $b) {
        if (is_int($a)) {
            return $a - (int) $b; 
        }
        
        if (is_array($a)) {
            return array_diff($a, (array) $b);
        }
    }
}

?>
```

## See Also

+ [How Method Overloading Works in PHP](https://www.freecodecamp.org/news/method-overloading-in-php/)
+ [PHP method overloading](https://dev.to/xwero/php-method-overloading-5epg)

Related : [func_get_args()](func_get_args())
