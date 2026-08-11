# extract()
``extract()`` is a native PHP function, which creates arrays from an array containing variables and their values.

``extract()`` has option to handle situations where the variables are already existing, and how those conflicts should be handled: by default, it overwrites the local variables.

Options are:  ``EXTR_OVERWRITE``, ``EXTR_SKIP``, ``EXTR_PREFIX_SAME``, ``EXTR_PREFIX_ALL``, ``EXTR_PREFIX_INVALID``, ``EXTR_IF_EXISTS``, ``EXTR_PREFIX_IF_EXISTS``, ``EXTR_REFS``.

This function is the opposite of ``compact()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extract.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extract.html","name":"extract()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Aug 2026 13:32:27 +0000","dateModified":"Sun, 09 Aug 2026 13:32:27 +0000","description":"``extract()`` is a native PHP function, which creates arrays from an array containing variables and their values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extract().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"extract"}]}]}</script>
```php
<?php

    $a = 0; // $a is getting overwritten
    $array = extract(['a' => 1, 'b' => 2]);
    
    echo $a + $b; // 2

?>
```

**[Documentation](https://www.php.net/manual/en/function.extract.php)**
## See Also

+ [compact](https://www.php.net/manual/en/function.compact.php)
+ [Variable variables](https://www.php.net/manual/en/language.variables.variable.php)

## Related

+ [compact()](compact.html)
+ [Variable Variables](variable-variable.html)
+ [Local Variable](local-variable.html)
