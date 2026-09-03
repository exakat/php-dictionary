# in\_array()
``in_array()`` function checks if a value exists in an array. It is important to use the third parameter 'strict' to true to ensure type safety and avoid unexpected behavior due to PHP's loose comparison rules.

A surprising pitfall is misplaced parentheses, which can lead to valid but incorrect logic: ``if (in_array($a, $b) == $c)`` vs ``if (in_array($a, $b == $c))``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/in_array.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/in_array.html","name":"in_array()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 02 Sep 2026 16:41:00 +0000","dateModified":"Wed, 02 Sep 2026 16:41:00 +0000","description":"in_array() function checks if a value exists in an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/in_array.html"]}],"keywords":["native function","best practice","classic bug"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_search.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_keys.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_diff.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_diff_assoc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_intersect.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/strict.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.in-array.php"},{"@type":"CreativeWork","name":"A Case Of Misplaced Parenthesis","url":"https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/misplaced_parenthesis.html"},{"@type":"CreativeWork","name":"When placing the parenthesis is ambiguous","url":"https:\/\/3v4l.org\/YN2FK"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"in_array"}]}]}</script>
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

+ [array\_search](array_search.html)
+ [array\_keys()](array_keys.html)
+ [array\_diff()](array_diff.html)
+ [array\_diff\_assoc()](array_diff_assoc.html)
+ [array\_intersect()](array_intersect.html)
+ [Strict](strict.html)
