# Yield
In its simplest form, a yield statement looks much like a return statement, except that instead of stopping execution of the function and returning, yield instead provides a value to the code looping over the generator and pauses execution of the generator function. 
```php
<?php

    function gen_one_to_three() {
        for ($i = 1; $i <= 3; $i++) {
            // Note that $i is preserved between yields.
            yield $i;
        }
    }

?>
```

## See Also

+ [Introduction to PHP yield](https://www.educba.com/php-yield/)

Related : [yield from Keyword](yield from Keyword), [Generator](Generator), [Jump](Jump), [Double Arrow](Double Arrow), [iterator_to_array()](iterator_to_array()), [range()](range()), [Stealth Generator](Stealth Generator)
