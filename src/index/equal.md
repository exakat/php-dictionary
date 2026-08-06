# Equal Operator
Equal is the state of two variables, which contains the same data, after an optional cast to a common type. It is the same as identical, with possible silent type-juggling.

The equal operators are ``==``, ``!=``, ``<>``, and ``<=>``. The ``switch()`` command also uses equal comparisons.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/equal.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/equal.html","name":"Equal Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 24 Jun 2026 05:41:46 +0000","dateModified":"Wed, 24 Jun 2026 05:41:46 +0000","description":"Equal is the state of two variables, which contains the same data, after an optional cast to a common type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Equal Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    var_dump(0 == '0000'); // true
    var_dump(0 == '0');    // false
    var_dump(0 == 0);      // true

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php)**
## See Also

+ [How do the PHP equality (== double equals) and identity (=== triple equals) comparison operators differ?](https://www.geeksforgeeks.org/how-do-the-php-equality-double-equals-and-identity-triple-equals-comparison-operators-differ/)

## Related

+ [Comparison](comparison-operator.ini.html)
+ [Identical Operator](identical.ini.html)
+ [Inequality](inequality.ini.html)
