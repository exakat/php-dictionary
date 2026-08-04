# Standard PHP Library (SPL)
The Standard PHP Library, the SPL, is a collection of interfaces and classes that are meant to solve common problems.

SPL offers features, functions, classes and interfaces in many different fields: iterators, data structures, files, exceptions, and observers. 

One of the most famous SPL features is the function ``spl_autoload_register()``, which register an autoload handler.
```php
<?php

    // SPL and autoloading
    spl_autoload_register(function ($class) {
        include 'classes/' . $class . '.class.php';
    });
    
    if ($object instanceof Countable) {
        $count = count($object);
    } elseif ($object instanceof Traversable) {
        $count = iterator_count($object);
    } else {
        print "Can't count this";
    }

?>
```

## See Also

+ [PHP and SPL: Standard PHP Library Functions and Classes](https://reintech.io/blog/php-spl-standard-library-functions-classes)

Related : [Class Autoloading](Class Autoloading), [Datastack](Datastack), [DirectoryIterator](DirectoryIterator), [Iterator](Iterator), [UnexpectedValueException](UnexpectedValueException), [Data Structure](Data Structure), [OuterIterator](OuterIterator), [Overflow](Overflow), [RecursiveIterator](RecursiveIterator), [IteratorAggregate](IteratorAggregate), [RecursiveArrayIterator](RecursiveArrayIterator), [RecursiveDirectoryIterator](RecursiveDirectoryIterator), [SeekableIterator](SeekableIterator), [SplDoublyLinkedList](SplDoublyLinkedList), [SplFileInfo](SplFileInfo), [SplFileObject](SplFileObject), [SplObjectStorage](SplObjectStorage), [SplObserver](SplObserver), [SplSubject](SplSubject)
