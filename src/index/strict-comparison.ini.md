# Strict Comparison
Strict comparison is a comparison operator or a control structure that checks not only the value but also the type of the value. In other words, it does not apply any type-juggling to the values before processing. 

Here are the strict operators: ``==`` may be replaced with ``===``,  ``!=`` may be replaced with ``!==``, ``switch`` may be replaced with ``match``, ``in_array()`` with the third parameter ``strict`` set to true.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/strict-comparison.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/strict-comparison.ini.html","name":"Strict Comparison","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:37:54 +0000","dateModified":"Mon, 13 Jul 2026 09:37:54 +0000","description":"Strict comparison is a comparison operator or a control structure that checks not only the value but also the type of the value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Strict Comparison.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    //true
    var_dump(1 == "1");
    //false
    var_dump(1 === "1");
    
    //true
    var_dump(null == 0);
    //false
    var_dump(null === 0);

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.comparison.php)**
## See Also

+ [Strict vs. Loose Comparisons in PHP](https://www.copterlabs.com/strict-vs-loose-comparisons-in-php/)
+ [Strict Comparison in PHP Explained at the Zend Engine Level](https://coderlegion.com/9440/strict-comparison-in-php-explained-at-the-zend-engine-level)

## Related

+ [Switch](switch.ini.html)
+ [Match](match.ini.html)
+ [Relaxed Comparison](relaxed-comparison.ini.html)
+ [Hash Comparisons](hash-comparison.ini.html)
