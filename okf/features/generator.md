---
type: "PHP Feature"
title: "Generator"
description: "Generators are a way to implement simple iterators without the overhead or complexity of implementing a class that extends the Iterator interface."
resource: "https://www.php.net/manual/en/language.generators.overview.php"
tags: ["class", "native class", "yield", "memory", "performance"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Generator

Generators are a way to implement simple iterators without the overhead or complexity of implementing a class that extends the Iterator interface.

Generators are implicitly created when including the yield and yield from keywords in the body of the method. Any type of function can be a generator: functions, methods, arrow functions, closures, static methods.

Generators always have the \Generator return type: in fact, there is no return type on its returned value, nor on the yielded values. They are all of mixed types.

Generators are used to reduce the memory footprint of an integration, as they do not require all data to be loaded to run: they can be created along the way.

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

## Documentation
- [https://www.php.net/manual/en/language.generators.overview.php](https://www.php.net/manual/en/language.generators.overview.php)

## See Also
- [Do generators really reduce the memory usage?](https://phpdelusions.net/articles/generators)
- [PHP Generators From Scratch](https://alanstorm.com/php-generators-from-scratch/)
- [Unlocking PHP Generators: Revolutionizing Memory Efficiency](https://itnext.io/unlocking-php-generators-revolutionizing-memory-efficiency-c6b894aacd22)

## Related
- [Yield](/features/yield.md)
- [yield from Keyword](/features/yield-from.md)
- [Return Type](/features/return-type.md)
- [Async](/features/async.md)
- [ClosedGeneratorException](/features/closedgeneratorexception.md)
- [Coroutine](/features/coroutine.md)
- [iterator_to_array()](/features/iterator_to_array.md)
- [range()](/features/range.md)
- [Stealth Generator](/features/stealth-generator.md)
- [Continuation](/features/continuation.md)
- [Lazy Evaluation](/features/lazy-evaluation.md)
- [List Comprehension](/features/list-comprehension.md)
- [Range Type](/features/range-type.md)

