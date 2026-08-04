# InfiniteIterator
 The InfiniteIterator allows one to infinitely iterate over an iterator without having to manually rewind the iterator upon reaching its end.

Infinite iterator works with other iterators. The loop may be broken, as usual, with a ``break`` keyword.
```php
<?php

$versions = [1, 2, 3, 4, 5, 7, 8];

$infinite = new InfiniteIterator(new ArrayIterator($versions));
foreach ($infinite as $value) {
    print "$value\n";
}

?>
```

Related : [Loops](Loops), [Infinite Loop](Infinite Loop), [Break](Break)
