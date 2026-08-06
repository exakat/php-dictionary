# Useless
Some piece of code is useless when it doesn't bring any feature to the code. 

It may be the case of double checks, where a characteristic is checked twice in a row; or when the same operation is repeated multiple times, yet is idempotent.

It is also the case of unused calculations: they are processed, stored, but ultimately, not combined with anything else.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/useless.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/useless.html","name":"Useless","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 23 Jun 2026 11:45:46 +0000","dateModified":"Tue, 23 Jun 2026 11:45:46 +0000","description":"Some piece of code is useless when it doesn't bring any feature to the code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Useless.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function foo(array $array) {
    if (!empty($array)) {
        // foreach() checks automatically the array for elements, and skips the loop when the array is empty.
        foreach($array as $a) {
            doSomething(); 
        }
    }
}

// foo is defined and called
$result = foo([]);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Dead_code)**
## Related

+ [Double Check](double-check.ini.html)
+ [Idempotent](idempotent.ini.html)
+ [Unused](unused.ini.html)
+ [Noop](noop.ini.html)
+ [Propagation](propagation.ini.html)
