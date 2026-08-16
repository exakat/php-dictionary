# IteratorAggregate
``IteratorAggregate`` is an interface to create a custom iterator. 

It requires a single method, that returns an iterator that will be used with PHP native functions. 

It also suggest that several iterators may be merged in one, by creating a class that merges them.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iteratoraggregate.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/iteratoraggregate.html","name":"IteratorAggregate","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 16:43:40 +0000","dateModified":"Mon, 20 Jul 2026 16:43:40 +0000","description":"IteratorAggregate is an interface to create a custom iterator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/IteratorAggregate.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"iteratoraggregate"}]}]}</script>
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

+ [Interface](interface.html)
+ [Iterator](iterator.html)
+ [Traversable](traversable.html)
+ [foreach()](foreach.html)
+ [Standard PHP Library (SPL)](spl.html)
+ [OuterIterator](outeriterator.html)
+ [PHP Native Interfaces](php-interface.html)
