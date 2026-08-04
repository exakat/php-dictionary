# IteratorAggregate
``IteratorAggregate`` is an interface to create a custom iterator. 

It requires a single method, that returns an iterator that will be used with PHP native functions. 

It also suggest that several iterators may be merged in one, by creating a class that merges them.

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

## See Also

+ [SPL: Using the iteratorAggregate interface](https://adayinthelifeof.nl/2011/12/04/spl-using-the-iteratoraggregate-interface/)

Related : [Interface](Interface), [Iterator](Iterator), [Traversable](Traversable), [foreach()](foreach()), [Standard PHP Library (SPL)](Standard PHP Library (SPL)), [OuterIterator](OuterIterator), [PHP Native Interfaces](PHP Native Interfaces)
