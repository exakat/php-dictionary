# Generator
Generators are a way to implement simple iterators without the overhead or complexity of implementing a class that extends the Iterator interface.

Generators are implicitly created when including the yield and yield from keywords in the body of the method. Any type of function can be a generator: functions, methods, arrow functions, closures, static methods.

Generator always have the \Generator return type: in fact, there is not return type on its returned value, nor on the yielded values. They are all of mixed types.

Generators are used to reduce the memory footprint of an integration, has they do not require all data to be loaded to run: they can be created along the way. 

Generators are also used to implement asynchronous properties: they may stop execution, using yield, and then, return later to continue. This allows for partial execution of the method.
```php
<?php

    function evenIntegers() {
        for ($i = 0; $i < 10; ++$i) {
            yield 2 * $i;
        }
    }
    
    foreach (evenInteger() as $number) {
        echo "$number ";
    }
    echo "\n";

?>
```

## See Also

+ [Do generators really reduce the memory usage?](https://phpdelusions.net/articles/generators)
+ [PHP Generators From Scratch](https://alanstorm.com/php-generators-from-scratch/)
+ [Unlocking PHP Generators: Revolutionizing Memory Efficiency](https://itnext.io/unlocking-php-generators-revolutionizing-memory-efficiency-c6b894aacd22)

Related : [Yield](Yield), [yield from Keyword](yield from Keyword), [Return Type](Return Type), [Async](Async), [ClosedGeneratorException](ClosedGeneratorException), [Coroutine](Coroutine), [iterator_to_array()](iterator_to_array()), [range()](range()), [Stealth Generator](Stealth Generator), [Continuation](Continuation), [Lazy Evaluation](Lazy Evaluation), [List Comprehension](List Comprehension), [Range Type](Range Type)
