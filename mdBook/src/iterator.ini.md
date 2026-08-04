# Iterator
An iterator is an object which can be traversed with a ``foreach()`` loop. 

``Iterator`` is an interface, which shall be implemented by objects. There are also a list of default iterators in the SPL extension.

An iterator may be turned into an array, with the ``iterator_to_array()`` function. Arrays may be used as iterator natively, or used as an objet with the ``ArrayObject`` class.
```php
<?php

    class myIterator implements Iterator { /**/ }
    
    $it = new myIterator;
    
    foreach($it as $key => $value) {
        var_dump($key, $value);
        echo "\n";
    }

?>
```

## See Also

+ [Modern PHP Developer - Iterator](https://startutorial.com/view/modern-php-developer-iterator)
+ [Iterator in PHP](https://refactoring.guru/design-patterns/iterator/php/example)

Related : [Standard PHP Library (SPL)](Standard PHP Library (SPL)), [Traversal](Traversal), [foreach()](foreach()), [ArrayObject](ArrayObject), [DirectoryIterator](DirectoryIterator), [iterator_to_array()](iterator_to_array()), [PHP Native Interfaces](PHP Native Interfaces), [RecursiveIterator](RecursiveIterator), [IteratorAggregate](IteratorAggregate), [OuterIterator](OuterIterator), [RecursiveArrayIterator](RecursiveArrayIterator), [RecursiveDirectoryIterator](RecursiveDirectoryIterator), [SeekableIterator](SeekableIterator), [SplDoublyLinkedList](SplDoublyLinkedList), [SplFileObject](SplFileObject), [SplObjectStorage](SplObjectStorage)
