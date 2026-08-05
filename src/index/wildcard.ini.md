# Wildcard
The wildcard, for example the ``*``, ``%``, ``_``, ``~`` characters, is a placeholder that matches anything.

Wildcards are used in various places:

+ Glob patterns, to match any number of characters: ``*.php`` matches any PHP file
+ Regex patterns, with ``.*`` or ``.*?``
+ ``mixed`` type is a wildcard type
+ ``~`` in autoloading definition, which defines a minimum version

In autoloading, wildcards allow mapping entire namespaces at once.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/wildcard.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/wildcard.ini.html","name":"Wildcard","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The wildcard, for example the ``*``, ``%``, ``_``, ``~`` characters, is a placeholder that matches anything","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Wildcard.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/language.basic-syntax.php)**
## Related

+ [glob()](glob.ini.html)
+ [Mixed](mixed.ini.html)
+ [Variadic](variadic.ini.html)
+ [Regular Expression](regex.ini.html)

## Related packages

+ [okapi/wildcards](https://packagist.org/packages/okapi/wildcards)
