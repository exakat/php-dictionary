# foreach()
``foreach()`` is the most popular type of loop. 

The ``foreach()`` loop uses all the elements of the source, and assign them to blind variables. By default, only the value is assigned; when using the ``$key => $value`` syntax, the key is also assigned. Then the block is executed with the assigned values. 

The source may be an array, or an object with the ``Traversable`` interface: this includes iterators and generators, but also custom classes. Other types are forbidden.

Part of the block execution may be skipped by using the ``continue`` keyword.

The value may be a reference: then it actually references the original value, which then may be modified in the source. Do not forget to unset referenced variables after the loop, to avoid the dangling reference syndrome, when the last value is changed.

The value may be an array, collecting several values at the same time. 

The value may be an ``list()`` construct: it sets several variables at the same time, to be used in the loop block. Any missing value yields a warning. 

``foreach()`` may also be replaced by array functions, such as ``array_map()``, ``implode()`` or ``array_merge()``, for specific operations. It is usually recommended to use native functions, when available.
```php
<?php

    /*
    foreach($source as $key => $value) {
        // block
    }
    */
    
    foreach([11,12,13] as $id => $value) {
        print "$id => $value\n";
        // 0 => 11
        // 1 => 12
        // 2 => 13
    }
    
    //foreach([[21,22], [33, 34]] as list($a, $b)) {
    foreach([[21,22], [33, 34]] as [$a, $b]) {
        print "$a $b\n";
        // 21 22
        // 33 34
    }

?>
```

## See Also

+ [Introduction To The Foreach Loop In PHP (With Code Examples)](https://zerotomastery.io/blog/PHP-foreach-loop-explained/)
+ [PHP foreach](https://zetcode.com/php/foreach/)

Related : [Continue](Continue), [For](For), [Loops](Loops), [While](While), [Do While](Do While), [As](As), [Control Flow](Control Flow), [Control Structures](Control Structures), [Iterator](Iterator), [List](List), [Blind Variable](Blind Variable), [Blind Variable](Blind Variable), [ClosedGeneratorException](ClosedGeneratorException), [IteratorAggregate](IteratorAggregate), [Traversal](Traversal)
