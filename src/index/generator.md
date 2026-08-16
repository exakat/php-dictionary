# Generator
Generators are a way to implement simple iterators without the overhead or complexity of implementing a class that extends the Iterator interface.

Generators are implicitly created when including the yield and yield from keywords in the body of the method. Any type of function can be a generator: functions, methods, arrow functions, closures, static methods.

Generators always have the \Generator return type: in fact, there is no return type on its returned value, nor on the yielded values. They are all of mixed types.

Generators are used to reduce the memory footprint of an integration, as they do not require all data to be loaded to run: they can be created along the way.

Generators are also used to implement asynchronous properties: they may stop execution, using yield, and then, return later to continue. This allows for partial execution of the method.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generator.html","name":"Generator","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 21:00:52 +0000","dateModified":"Tue, 11 Aug 2026 21:00:52 +0000","description":"Generators are a way to implement simple iterators without the overhead or complexity of implementing a class that extends the Iterator interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Generator.html"]}],"keywords":["class","native class","yield","memory","performance"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yield.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yield-from.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/async.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closedgeneratorexception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coroutine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iterator_to_array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/range.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/stealth-generator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/continuation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lazy-evaluation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/list-comprehension.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/range-type.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.generators.overview.php"},{"@type":"CreativeWork","name":"Do generators really reduce the memory usage?","url":"https:\/\/phpdelusions.net\/articles\/generators"},{"@type":"CreativeWork","name":"PHP Generators From Scratch","url":"https:\/\/alanstorm.com\/php-generators-from-scratch\/"},{"@type":"CreativeWork","name":"Unlocking PHP Generators: Revolutionizing Memory Efficiency","url":"https:\/\/itnext.io\/unlocking-php-generators-revolutionizing-memory-efficiency-c6b894aacd22"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"generator"}]}]}</script>
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

+ [Yield](yield.html)
+ [yield from Keyword](yield-from.html)
+ [Return Type](return-type.html)
+ [Async](async.html)
+ [ClosedGeneratorException](closedgeneratorexception.html)
+ [Coroutine](coroutine.html)
+ [iterator\_to\_array()](iterator_to_array.html)
+ [range()](range.html)
+ [Stealth Generator](stealth-generator.html)
+ [Continuation](continuation.html)
+ [Lazy Evaluation](lazy-evaluation.html)
+ [List Comprehension](list-comprehension.html)
+ [Range Type](range-type.html)
