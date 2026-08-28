# Null
``null`` is a special data type that represents a variable with no value or an undefined value. It is used to indicate the absence of a value. In other words, when a variable is assigned the value null, it means that the variable exists but has no valid data. 

``null`` may be used as a default value for variables, parameter or properties that are expected to hold some value later but don't have a value assigned initially. It was also be used to unset a variable and free up memory, when using the operator ``(unset)``. 

There is also a design pattern called Null Pattern, although its main goal is to remove usage of null and replace it with an actual object.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/null.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/null.html","name":"Null","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"null is a special data type that represents a variable with no value or an undefined value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/null.html"]}],"keywords":["literal","value"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nullable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nullpattern.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/authentication.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/empty.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overflow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/underflow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/void.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/default-value.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json_decode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return-value.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/value.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autovivification.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/null-byte.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/str_contains.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/existence.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/standalone-type.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.null.php"},{"@type":"CreativeWork","name":"Much ado about null","url":"https:\/\/peakd.com\/hive-168588\/@crell\/much-ado-about-null"},{"@type":"CreativeWork","name":"Null Hell and How to Get Out of It","url":"https:\/\/afilina.com\/null-hell"},{"@type":"CreativeWork","name":"Avoiding Unnecessary Null Checks","url":"https:\/\/www.arhohuttunen.com\/avoiding-unnecessary-null-checks\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"null"}]}]}</script>
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

+ [Nullable](nullable.html)
+ [Null Pattern](nullpattern.html)
+ [Authentication](authentication.html)
+ [Empty](empty.html)
+ [Overflow](overflow.html)
+ [Underflow](underflow.html)
+ [Void](void.html)
+ [Default Value](default-value.html)
+ [json\_decode()](json_decode.html)
+ [Return Value](return-value.html)
+ [Value](value.html)
+ [Autovivification](autovivification.html)
+ [PHP Natives](native-type.html)
+ [Null Byte](null-byte.html)
+ [str\_contains()](str_contains.html)
+ [Existence](existence.html)
+ [Standalone Types](standalone-type.html)
