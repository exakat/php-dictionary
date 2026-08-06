# extract()
``extract()`` is a native PHP function, which creates arrays from an array containing variables and their values.

``extract()`` has option to handle situations where the variables are already existing, and how those conflicts should be handled: by default, it overwrites the local variables.

Options are:  ``EXTR_OVERWRITE``, ``EXTR_SKIP``, ``EXTR_PREFIX_SAME``, ``EXTR_PREFIX_ALL``, ``EXTR_PREFIX_INVALID``, ``EXTR_IF_EXISTS``, ``EXTR_PREFIX_IF_EXISTS``, ``EXTR_REFS``.

This function is the opposite of ``compact()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/extract.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/extract.html","name":"extract()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``extract()`` is a native PHP function, which creates arrays from an array containing variables and their values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/extract().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$a = 0; // $a is getting overwritten
$array = extract(['a' => 1, 'b' => 2]);

echo $a + $b; // 2
?>
```

**[Documentation](https://www.php.net/manual/en/function.extract.php)**
## Related

+ [compact()](compact.ini.html)
+ [Variable Variables](variable-variable.ini.html)
+ [Local Variable](local-variable.ini.html)
