# False
``false`` has two usages, as PHP keyword: the opposite of ``true``, as a boolean value and a special type for functions that may return a boolean, but not ``true``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/false.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/false.html","name":"False","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"``false`` has two usages, as PHP keyword: the opposite of ``true``, as a boolean value and a special type for functions that may return a boolean, but not ``true``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/False.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"False"}]}]}</script>
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

+ [Boolean](boolean.html)
+ [Type System](type.html)
+ [True](true.html)
+ [Falsy](falsy.html)
+ [Truthy](truthy.html)
+ [Underscore](underscore.html)
+ [zero](zero.html)
+ [Logical Operators](logical-operator.html)
+ [file\_get\_contents()](file_get_contents.html)
+ [PHP Natives](native-type.html)
+ [one](one.html)
+ [Short Ternary Operator](short-ternary.html)
+ [Autovivification](autovivification.html)
+ [Standalone Types](standalone-type.html)
