# IteratorAggregate
``IteratorAggregate`` is an interface to create a custom iterator. 

It requires a single method, that returns an iterator that will be used with PHP native functions. 

It also suggest that several iterators may be merged in one, by creating a class that merges them.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/iteratoraggregate.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/iteratoraggregate.html","name":"IteratorAggregate","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 16:43:40 +0000","dateModified":"Mon, 20 Jul 2026 16:43:40 +0000","description":"``IteratorAggregate`` is an interface to create a custom iterator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/IteratorAggregate.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    declare(strict_types=1);
    
    class MergedIteratorAggregate implements IteratorAggregate
    {
        /** @var iterable[] */
        private array $iterables = [];
    
        public function addIterable(iterable $iterable): void
        {
            $this->iterables[] = $iterable;
        }
    
        public function getIterator(): Traversable
        {
            foreach ($this->iterables as $iterable) {
                // yield from works with arrays AND Traversable objects
                yield from $iterable;
            }
        }
    }
    
    $x = new MergedIteratorAggregate();
    
    function foo() {
        yield rand(0, 10);
    
    }
    
    // Using iterator with generators
    $x->addIterable(foo());
    $x->addIterable(foo());
    foreach($x as $y) {
        print $y.PHP_EOL;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.iteratoraggregate.php)**
## See Also

+ [SPL: Using the iteratorAggregate interface](https://adayinthelifeof.nl/2011/12/04/spl-using-the-iteratoraggregate-interface/)

## Related

+ [Interface](interface.ini.html)
+ [Iterator](iterator.ini.html)
+ [Traversable](traversable.ini.html)
+ [foreach()](foreach.ini.html)
+ [Standard PHP Library (SPL)](spl.ini.html)
+ [OuterIterator](outeriterator.ini.html)
+ [PHP Native Interfaces](php-interface.ini.html)
