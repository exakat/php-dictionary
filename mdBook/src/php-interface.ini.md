# PHP Native Interfaces
PHP defines its own native interfaces. They are used with the native classes, and are usually available with custom code. 

For example, ``Countable`` is a PHP native interface, which design objects that can be passed to ``count()`` function. On the other hand, ``Throwable`` is a native interface, which is characteristic of ``Exception`` and ``Error``. It may be used for typing, with ``catch`` clauses, or with ``instanceof`` but must be implemented by extending the two former classes.

Native interfaces depend on the compiled extensions. Native interfaces are introduced in major or minor versions, so their number evolve with time.
```php
<?php

    print_r(get_declared_interfaces());

?>
```

Related : [Traversable](Traversable), [IteratorAggregate](IteratorAggregate), [Iterator](Iterator), [Serializable](Serializable), [ArrayAccess](ArrayAccess), [Countable Interface](Countable Interface), [Stringable](Stringable), [Throwable](Throwable), [UnitEnum](UnitEnum), [BackedEnum](BackedEnum), [DateTimeInterface](DateTimeInterface), [DOMParentNode](DOMParentNode), [DOMChildNode](DOMChildNode), [JsonSerializable](JsonSerializable), [RecursiveIterator](RecursiveIterator), [OuterIterator](OuterIterator), [SeekableIterator](SeekableIterator), [SplObserver](SplObserver), [SplSubject](SplSubject), [SessionHandlerInterface](SessionHandlerInterface), [SessionIdInterface](SessionIdInterface), [SessionUpdateTimestampHandlerInterface](SessionUpdateTimestampHandlerInterface), [Reflector](Reflector), [Random\CryptoSafeEngine](Random\CryptoSafeEngine), [Random\Engine](Random\Engine)
