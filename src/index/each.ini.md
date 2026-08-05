# each
``each()`` was a native function, that would yield each element in an array. It was used in ``while()`` loops, to traverse lists.

It was deprecated during PHP 7.x and it is completely removed in version 8.0.

The classic ``while(list($key, $value) = each($array)`` structure, shown below, is, nowadays, advantageously replaced by a ``foreach()`` loop.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/each.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/each.ini.html","name":"each","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:49:22 +0000","dateModified":"Thu, 23 Jul 2026 13:49:22 +0000","description":"``each()`` was a native function, that would yield each element in an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/each.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $array = ['a' => 1, 'b' => 3, 'c' => 5];
    while(list($key, $value) = each($array)) {
        print $key . ' => ' . $value . PHP_EOL;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.each.php)**
## See Also

+ [PHP each() Function](https://www.zetcode.com/php-array/each/)

## Related

+ [Array Element](array-element.ini.html)
