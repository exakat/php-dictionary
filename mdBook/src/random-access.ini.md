# Random Access
Random access is the ability to read or write any element of a data structure, or any byte of a file, directly, in constant time, without having to traverse the elements that precede it. It is opposed to sequential access, where reaching the n-th element requires visiting every element before it first.

Arrays and hash maps typically offer random access: a PHP array, whether indexed or associative, is actually an ordered hash map under the hood, and supports ``O(1)`` average-time access to any key, be it ``$array[5]`` or ``$array['name']``. Linked lists, by contrast, only offer sequential access: reaching the n-th node means walking the list from its head.

Random access also applies to files: ``fopen()`` combined with ``fseek()`` lets a program jump directly to any offset of a file and read or write from there, instead of reading it sequentially from the start. This is essential for large files, or for formats such as fixed-length record files, where the position of a given record can be computed directly.
```php
<?php

    $array = ['a', 'b', 'c', 'd'];
    echo $array[2]; // random access: 'c', without reading 'a' and 'b' first

    $handle = fopen('data.bin', 'rb');
    fseek($handle, 100); // jump directly to byte 100
    $chunk = fread($handle, 10);

?>
```

Related : [Array, []](Array, []), [Hash Table](Hash Table), [fseek()](fseek())
