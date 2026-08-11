# Cast Operator
Cast operators change the type of the variable to the desired type. Conversion between the current format and the target format may happen. 

The available casts are:

+ ``(int)``, ``(integer)``: cast to integer
+ ``(bool)``, ``(boolean)``: cast to boolean
+ ``(float)``, ``(double)``: cast to float
+ ``(string)``: cast to string
+ ``(array)``: cast to array
+ ``(object)``: cast to object, of type ``stdclass``. There is no operator to convert to a specific class type.
+ ``(void)``: complement operator to the ``NoDiscard`` attribute. It is not really a cast operator.
+ ``(unset)``: cast to NULL, deprecated since PHP 7.2
+ ``(real)``: cast to float.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cast.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cast.html","name":"Cast Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Cast operators change the type of the variable to the desired type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Cast Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cast"}]}]}</script>
```php
<?php

    $foo = 10;               // $foo is an integer
    $bar = (boolean) $foo;   // $bar is a boolean

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.type-juggling.php#language.types.typecasting)**
## See Also

+ [A detailed look into PHP type casting](https://dev.to/altsyset/a-detailed-look-into-php-type-casting-4m6d)
+ [Mastering Data Type Conversion In Php Through Type Casting](https://laranepal.com/blog/mastering-data-type-conversion-in-php-through-type-casting)
+ [Conversion](https://phplang.org/spec/08-conversions.html)
+ [Mastering the (array) cast](https://www.exakat.io/mastering-the-array-cast-operator-in-php-a-comprehensive-guide/)

## Related

+ [\_\_toString() Method](__tostring.html)
+ [Type Juggling](type-juggling.html)
+ [ArrayObject](arrayobject.html)
+ [Convert](convert.html)
+ [Non-numeric](non-numeric.html)
+ [Sign](sign.html)
+ [array\_keys()](array_keys.html)
+ [Boolean](boolean.html)
+ [Golf](golf.html)
+ [Number](number.html)
+ [Canonical](canonical.html)
+ [get\_object\_vars()](get_object_vars.html)
