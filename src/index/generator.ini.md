# Generator
Generators are a way to implement simple iterators without the overhead or complexity of implementing a class that extends the Iterator interface.

Generators are implicitly created when including the yield and yield from keywords in the body of the method. Any type of function can be a generator: functions, methods, arrow functions, closures, static methods.

Generator always have the \Generator return type: in fact, there is not return type on its returned value, nor on the yielded values. They are all of mixed types.

Generators are used to reduce the memory footprint of an integration, has they do not require all data to be loaded to run: they can be created along the way. 

Generators are also used to implement asynchronous properties: they may stop execution, using yield, and then, return later to continue. This allows for partial execution of the method.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/generator.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/generator.ini.html","name":"Generator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:12:32 +0000","dateModified":"Fri, 10 Jul 2026 09:12:32 +0000","description":"Generators are a way to implement simple iterators without the overhead or complexity of implementing a class that extends the Iterator interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Generator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/language.generators.overview.php)**
## See Also

+ [Do generators really reduce the memory usage?](https://phpdelusions.net/articles/generators)
+ [PHP Generators From Scratch](https://alanstorm.com/php-generators-from-scratch/)
+ [Unlocking PHP Generators: Revolutionizing Memory Efficiency](https://itnext.io/unlocking-php-generators-revolutionizing-memory-efficiency-c6b894aacd22)

## Related

+ [Yield](yield.ini.html)
+ [yield from Keyword](yield-from.ini.html)
+ [Return Type](return-type.ini.html)
+ [Async](async.ini.html)
+ [ClosedGeneratorException](closedgeneratorexception.ini.html)
+ [Coroutine](coroutine.ini.html)
+ [iterator\_to\_array()](iterator_to_array.ini.html)
+ [range()](range.ini.html)
+ [Stealth Generator](stealth-generator.ini.html)
+ [Continuation](continuation.ini.html)
+ [Lazy Evaluation](lazy-evaluation.ini.html)
+ [List Comprehension](list-comprehension.ini.html)
+ [Range Type](range-type.ini.html)
