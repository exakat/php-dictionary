# Type Coverage
Type coverage reports how much of the PHP code has types. The elements that can be typed are: 

+ Arguments in methods
+ Return type
+ Properties
+ Class constants

Some elements cannot be typed: 

+ Arrays
+ Lexical variables
+ Yield values
+ Local variables.

Type coverage is used as a metrics, to ensure that every line of code is used at least once during the tests. While it is a necessary feature, this is not always sufficient to ensure that the application is well tested, as lines of code are reused in several situations, and would require multiple tests.
```php
<?php

    function foo($i = 0) : int {
        return $i + 1;
    }

?>
```

## See Also

+ [How to Measure Your Type Coverage](https://tomasvotruba.com/blog/how-to-measure-your-type-coverage)
+ [phpunit/php-code-coverage](https://github.com/sebastianbergmann/php-code-coverage)
+ [PHP code coverage tool](https://php.watch/articles/php-code-coverage-comparison)

Related : [Type System](Type System), [Coverage](Coverage), [Analysis](Analysis), [Type Checking](Type Checking), [Type Inference](Type Inference)
