# Sentinel
A sentinel is a special, reserved value used to signal a specific condition, such as the end of a sequence, an absence of data, or an error, instead of adding a separate flag or an exception for it. A sentinel is drawn from the very same domain as legitimate data, which creates ambiguity whenever it collides with an actual value: this is exactly the mechanism behind the famous ``strpos()`` syndrome.

Common sentinels include ``-1`` as a 'not found' index, the null terminator ``\0`` marking the end of a C string, ``EOF`` while reading a file, and a dedicated, otherwise-unreachable object used as the default value of a parameter, to detect that no argument was actually passed.

PHP relies on sentinels extensively: ``false`` is the sentinel returned by many string and array functions to mean 'nothing found', ``feof()`` is the sentinel condition of a read loop, and ``INF``, ``-INF`` and ``NAN`` act as sentinels for numeric overflow and invalid operations.
```php
<?php

    $handle = fopen('data.txt', 'r');
    while (!feof($handle)) { // feof() is the sentinel condition
        $line = fgets($handle);
    }

    // a dedicated object as a sentinel default, to detect a missing argument
    final class Undefined {}
    const UNDEFINED = new Undefined();

    function greet(string $name, mixed $mood = UNDEFINED) {
        if ($mood === UNDEFINED) {
            $mood = 'happy';
        }
    }

?>
```

## See Also

+ [How to Use Redis Sentinel with PHP](https://oneuptime.com/blog/post/2026-03-31-redis-sentinel-php/view)

Related : [Strpos() Syndrome](Strpos() Syndrome), [Null](Null), [False](False), [Default Value](Default Value), [Magic Values](Magic Values), [array_search](array_search)
