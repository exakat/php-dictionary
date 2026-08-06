# Null
``null`` is a special data type that represents a variable with no value or an undefined value. It is used to indicate the absence of a value. In other words, when a variable is assigned the value null, it means that the variable exists but has no valid data. 

``null`` may be used as a default value for variables, parameter or properties that are expected to hold some value later but don't have a value assigned initially. It was also be used to unset a variable and free up memory, when using the operator ``(unset)``. 

There is also a design pattern called Null Pattern, although its main goal is to remove usage of null and replace it with an actual object.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/null.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/null.html","name":"Null","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``null`` is a special data type that represents a variable with no value or an undefined value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Null.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $a = null;
    $B = NULL;
    $c = \null;

    // same as  null|string $s 
    function foo(?string $s = null) {}

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.null.php)**
## See Also

+ [Much ado about null](https://peakd.com/hive-168588/@crell/much-ado-about-null)
+ [Null Hell and How to Get Out of It](https://afilina.com/null-hell)
+ [Avoiding Unnecessary Null Checks](https://www.arhohuttunen.com/avoiding-unnecessary-null-checks/)

## Related

+ [Nullable](nullable.ini.html)
+ [Null Pattern](nullpattern.ini.html)
+ [Authentication](authentication.ini.html)
+ [Empty](empty.ini.html)
+ [Overflow](overflow.ini.html)
+ [Underflow](underflow.ini.html)
+ [Void](void.ini.html)
+ [Default Value](default-value.ini.html)
+ [json\_decode()](json_decode.ini.html)
+ [Return Value](return-value.ini.html)
+ [Value](value.ini.html)
+ [Autovivification](autovivification.ini.html)
+ [PHP Natives](native-type.ini.html)
+ [Null Byte](null-byte.ini.html)
+ [str\_contains()](str_contains.ini.html)
+ [Existence](existence.ini.html)
+ [Standalone Types](standalone-type.ini.html)
