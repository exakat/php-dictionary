# Dangling Reference
In a foreach loop, a variable is used for looping through the array. When this variable is configured as a reference, the reference survives after the end of the loop. When this variable is reused later, it applies to the last element of the array and overwrites its value.

This doesn't happen when the second loop doesn't use a reference. 

It is recommended to unset the referenced variable, after the loop. It destroys the reference, not the value.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dangling-reference.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dangling-reference.ini.html","name":"Dangling Reference","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"In a foreach loop, a variable is used for looping through the array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Dangling Reference.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $array = ['a', 'b', 'c'];
    
    foreach($array as &$x) { 
        // doSomething() or even do nothing! 
    }
    
    // second loop, no reference
    foreach($array as $x) { 
        // doSomething() or even do nothing! 
    }
    
    var_dump($array);
    $array = ['a', 'b', 'b'];

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php)**
## See Also

+ [No Dangling References](https://github.com/dseguy/clearPHP/blob/master/rules/no-dangling-reference.md)

## Related

+ [Loops](loop.ini.html)
+ [References](reference.ini.html)
