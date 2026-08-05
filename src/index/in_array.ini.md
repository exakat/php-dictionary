# in\_array()
``in_array()`` function checks if a value exists in an array. It is important to use the third parameter 'strict' to true to ensure type safety and avoid unexpected behavior due to PHP's loose comparison rules.

A surprising pitfall is misplaced parentheses, which can lead to valid but incorrect logic: ``if (in_array($a, $b) == $c)`` vs ``if (in_array($a, $b == $c))``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/in_array.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/in_array.ini.html","name":"in_array()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 07:59:19 +0000","dateModified":"Fri, 03 Jul 2026 07:59:19 +0000","description":"``in_array()`` function checks if a value exists in an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/in_array().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $array = [1, 2, '3', 4];
    
    // Loose comparison (default): returns true
    var_dump(in_array(3, $array)); 
    
    // Strict comparison: returns false
    var_dump(in_array(3, $array, true));
    
    // Misplaced parenthesis pitfall
    $a = 1;
    $b = [1, 2, 3];
    $c = true;
    
    // Correct usage
    if (in_array($a, $b) === $c) {
        echo 'Found';
    }
    
    // Potentially incorrect but valid syntax
    if (in_array($a, $b === $c)) {
        echo 'Valid PHP, but unlikely what was intended';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.in-array.php)**
## See Also

+ [A Case Of Misplaced Parenthesis](https://php-tips.readthedocs.io/en/latest/tips/misplaced_parenthesis.html)
+ [When placing the parenthesis is ambiguous](https://3v4l.org/YN2FK)

## Related

+ [array\_search](array_search.ini.html)
+ [array\_keys()](array_keys.ini.html)
