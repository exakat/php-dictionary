# compact()
``compact()`` is a native PHP function, which creates an array containing variables and their values, from a list of variable names.

It is the opposite of ``extract()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/compact.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/compact.ini.html","name":"compact()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``compact()`` is a native PHP function, which creates an array containing variables and their values, from a list of variable names","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/compact().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $a = '1';
    $b = '2';
    
    $array = compact('a', 'b');
    // ['a' => 1, 'b' => 2];

?>
```

**[Documentation](https://www.php.net/manual/en/function.compact.php)**
## See Also

+ [``compact()`` function in PHP, and why it is problematic due to its magic behavior](https://gist.github.com/Ocramius/c56a8e8ff25a8e0bd96800c41edab02a)

## Related

+ [extract()](extract.ini.html)
+ [Variable Variables](variable-variable.ini.html)
+ [Compact Array](compact-array.ini.html)
+ [Stubs Files](stubs.ini.html)
