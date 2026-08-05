# False
``false`` has two usages, as PHP keyword: the opposite of ``true``, as a boolean value and a special type for functions that may return a boolean, but not ``true``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/false.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/false.ini.html","name":"False","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``false`` has two usages, as PHP keyword: the opposite of ``true``, as a boolean value and a special type for functions that may return a boolean, but not ``true``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/False.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

function foo($a) : false|A {
    if ($a == 1) {
        return false;
    } else {
        return new A();
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.boolean.php)**
## See Also

+ [PHP Boolean: Assigning True or False to a Variable](https://flatcoding.com/tutorials/php/php-boolean-true-and-false/)

## Related

+ [Boolean](boolean.ini.html)
+ [Type System](type.ini.html)
+ [True](true.ini.html)
+ [Falsy](falsy.ini.html)
+ [Truthy](truthy.ini.html)
+ [Underscore](underscore.ini.html)
+ [zero](zero.ini.html)
+ [Logical Operators](logical-operator.ini.html)
+ [file\_get\_contents()](file_get_contents.ini.html)
+ [PHP Natives](native-type.ini.html)
+ [one](one.ini.html)
+ [Short Ternary Operator](short-ternary.ini.html)
+ [Autovivification](autovivification.ini.html)
+ [Standalone Types](standalone-type.ini.html)
