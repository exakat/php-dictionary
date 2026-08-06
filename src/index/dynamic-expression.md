# Dynamic Expression
A dynamic expression is an expression that is only wholly defined at execution time. It needs to collect pieces of information before processing. This applies to elements that are usually static, such as class, function, method, constants, not to parameters which are expected to be variable.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dynamic-expression.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dynamic-expression.html","name":"Dynamic Expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:48 +0000","dateModified":"Fri, 19 Jun 2026 21:24:48 +0000","description":"A dynamic expression is an expression that is only wholly defined at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Dynamic Expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $config = new ConfigFile();

    $function = $config->sortingMethod; // sort, or rsort
    $function($array);

?>
```

**[Documentation](https://www.php.net/manual/en/language.expressions.php)**
## Related

+ [Static Expression](static-expression.ini.html)
