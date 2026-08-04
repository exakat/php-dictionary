# SeekableIterator
``SeekableIterator`` extends the ``Iterator`` interface by adding a ``seek(int $offset)`` method to jump directly to a specific position without iterating through preceding elements.

It is implemented by ``ArrayIterator`` and ``SplFixedArray``. Attempting to seek to an invalid position should throw an ``OutOfBoundsException``.
```php
<?php

    $iterator = new ArrayIterator(['a', 'b', 'c', 'd', 'e']);
    $iterator->seek(3);
    echo $iterator->current(); // d

?>
```

Related : [Iterator](Iterator), [Interface](Interface), [Standard PHP Library (SPL)](Standard PHP Library (SPL)), [PHP Native Interfaces](PHP Native Interfaces), [SplSubject](SplSubject)
