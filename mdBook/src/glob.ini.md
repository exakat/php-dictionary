# glob()
``glob()`` is a function that finds pathnames matching a pattern.

The ``glob()`` function is not related to the global keyword.

The pattern syntax follows the rules used by the shell, not regular expressions: ``*`` matches any number of characters, ``?`` matches a single character, and bracket expressions such as ``[a-z]`` match a range or set of characters. Optional flags let the caller include hidden files, sort results, or return only directories.

Because ``glob()`` reads the filesystem directly, its result depends on what is actually present on disk at the moment it is called, and it can be comparatively slow on directories with a very large number of entries. It also returns ``false`` on failure rather than throwing an exception, so callers should check the return value before iterating over it.
```php
<?php

    foreach (glob("*.txt") as $filename) {
        echo "$filename size " . filesize($filename) . "\n";
    }   

?>
```

Related : [global Scope](global Scope), [Star *](Star *), [Wildcard](Wildcard)
