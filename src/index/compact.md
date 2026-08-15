# compact()
``compact()`` is a native PHP function, which creates an array containing variables and their values, from a list of variable names.

It is the opposite of ``extract()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compact.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compact.html","name":"compact()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"compact() is a native PHP function, which creates an array containing variables and their values, from a list of variable names","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compact().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"compact"}]}]}</script>
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

+ [extract()](extract.html)
+ [Variable Variables](variable-variable.html)
+ [Compact Array](compact-array.html)
+ [Stubs Files](stubs.html)
