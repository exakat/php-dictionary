# implode()
The ``implode()`` function is used to join elements of an array into a glue, placed between each element.

``implode()`` uses the first argument as the separator, and the second as the array. In older versions of PHP, this order could be reversed, but it recommended to avoid using it, as that feature was removed.

``implode()`` has an alias called ``join()``.

``implode()`` converts the elements of the array to string before merging them in a string. In particular, objects are converted to string with the magic-method, and sub-arrays are converted to ``Array``, with a warning. Backed enumerations are not usable with that function.

``implode()`` is faster to concatenate multiple strings than accumulating the concatenations in a single string. This happens because there is less need to allocate memory piecemeal.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/implode.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/implode.ini.html","name":"implode()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``implode()`` function is used to join elements of an array into a glue, placed between each element","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/implode().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

declare(strict_types=1);

class x {
    function __toString() {
        return 'c';
    }
}

$x = new x();
echo implode('a', ['a', 'b', new x()]);

?>
```

**[Documentation](https://www.php.net/manual/en/function.implode.php)**
## See Also

+ [How to use implode() in PHP (with examples)](https://tinkerwell.app/blog/how-to-use-implode-in-php)

## Related

+ [Concatenation \\.](concatenation.ini.html)
+ [Micro-optimisation](micro-optimisation.ini.html)
+ [Separator](separator.ini.html)
