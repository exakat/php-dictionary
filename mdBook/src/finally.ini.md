# Finally
Finally is the default clause of a try-catch expression. It is run after all the catch clauses have been called.

Finally is run every time after a try, with or without any catch clause. It is also run before the return expression, if any.
```php
<?php

    try {
        doSomething();
    } catch (\Exception $e) {
        print "An exception was raised and caught";
    } finally {
        print "Finally\n";
    }

?>
```

## See Also

+ [How to use Try - Catch - Finally in PHP](https://thecodeprogram.com/blog/how-to-use-try---catch---finally-in-php/)

Related : [Try-catch](Try-catch), [Catch](Catch), [Exit](Exit), [Resource Leak](Resource Leak)
