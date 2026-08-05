# Object Nullsafe Operator ?->
The object nullsafe operator is an operator which gives access to properties and methods of an object.

Depending on the context, those properties and methods must be public or protected.

Object Nullsafe Operator is directly related to the Object operator: the difference is that the former keeps on executing when the support object is null, while the second stops with a fatal error.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/object-nullsafe-operator.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/object-nullsafe-operator.ini.html","name":"Object Nullsafe Operator ?->","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The object nullsafe operator is an operator which gives access to properties and methods of an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Object Nullsafe Operator ?->.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $array = ['a' => (new stdClass)?->a, ];
    
    // displays 1
    echo $array['a']?->a;
    
    // displays null, so nothing
    echo $array['b']?->a;

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php)**
## See Also

+ [Object Operator in PHP](https://www.delftstack.com/howto/php/php-object-operator/)

## Related

+ [Scope Resolution Operator ::](scope-resolution-operator.ini.html)
+ [Object Operator ->](object-operator.ini.html)
