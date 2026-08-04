# Wildcard
The wildcard, for example the ``*``, ``%``, ``_``, ``~`` characters, is a placeholder that matches anything.

Wildcards are used in various places:

+ Glob patterns, to match any number of characters: ``*.php`` matches any PHP file
+ Regex patterns, with ``.*`` or ``.*?``
+ ``mixed`` type is a wildcard type
+ ``~`` in autoloading definition, which defines a minimum version

In autoloading, wildcards allow mapping entire namespaces at once.
```php
<?php

// glob patterns with wildcard
foreach (glob('*.php') as $filename) {
    echo "$filename\n";
}

// Variadic arguments (spread operator)
function foo(...$args) {
    print_r($args);
}

foo(1, 2, 3);

// mixed type (PHP 8.0+)
function bar(mixed $value): mixed {
    return $value;
}

?>
```

Related : [glob()](glob()), [Mixed](Mixed), [Variadic](Variadic), [Regular Expression](Regular Expression)
