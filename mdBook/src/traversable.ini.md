# Traversable
Traversable is a specific PHP interface that represents an object that can be iterated over.

Traversable is an abstract interface: it cannot be implemented directly, and instead, it must be implemented by either IteratorAggregate or Iterator. 

The traversable interface is used for typing purposes.
```php
<?php

try {
    doSomething();
} catch (\Traversable $e) {
    print "Some error was raised during processing: ". $e::class;
}

?>
```

## See Also

+ [Traversable interface in PHP](https://blog.eduonix.com/web-programming-tutorials/traversable-interface-in-php/)

Related : [Exception](Exception), [Error](Error), [Iterable](Iterable), [OuterIterator](OuterIterator), [PHP Native Interfaces](PHP Native Interfaces), [yield from Keyword](yield from Keyword), [IteratorAggregate](IteratorAggregate)
