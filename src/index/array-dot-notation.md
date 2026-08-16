# Array Dot Notation
Array dot notation is a convention for addressing a value nested inside a multi-dimensional array using a single string of keys separated by dots, such as ``'a.b.c'``, instead of chaining several square-bracket accesses.

PHP has no native support for dot notation: writing ``$array['a.b.c']`` only looks for a single key literally named ``a.b.c``. To resolve the path and read or write the nested value, the string must be split on the dots and each segment used to walk down the array, either with a hand-written loop or with a helper function or package.

Dot notation is commonly used by frameworks and libraries to give a compact syntax for reading configuration values or deeply nested data, such as Laravel's ``Arr::get($array, 'a.b.c')`` or Symfony's property access component.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-dot-notation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-dot-notation.html","name":"Array Dot Notation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:55:35 +0000","dateModified":"Tue, 11 Aug 2026 20:55:35 +0000","description":"Array dot notation is a convention for addressing a value nested inside a multi-dimensional array using a single string of keys separated by dots, such as 'a","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Array Dot Notation.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array-dot-notation"}]}]}</script>
```php
<?php

    function arrayGetDot(array $array, string $path, mixed $default = null): mixed {
        foreach (explode('.', $path) as $key) {
            if (!is_array($array) || !array_key_exists($key, $array)) {
                return $default;
            }
            $array = $array[$key];
        }

        return $array;
    }

    $config = ['db' => ['host' => 'localhost', 'port' => 5432]];
    echo arrayGetDot($config, 'db.host'); // localhost

?>
```

**[Documentation](https://laravel.com/docs/11.x/helpers#method-array-get)**
## See Also

+ [Dot Notation in PHP Arrays: A Practical Approach](https://medium.com/@diloabininyeri/introduction-cb0a4b0ce8f4)
+ [Dot notation vs Bracket notation.](https://medium.com/@hrony7801/the-difference-between-dot-notation-vs-bracket-notation-e17fec97f6f1)

## Related

+ [Array Syntax](array-syntax.html)
+ [Index For Arrays](index-array.html)

## Related packages

+ [sajadsdi/array-dot-notation](https://packagist.org/packages/sajadsdi/array-dot-notation)
