# True
``true`` has two usages, as PHP keyword: the opposite of ``false``, as a boolean value and a special type for functions that may return a boolean, but only true, never ``false``. 

``true`` as a type was introduced in version 8.2.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/true.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/true.html","name":"True","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"true has two usages, as PHP keyword: the opposite of false, as a boolean value and a special type for functions that may return a boolean, but only true, never false","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/True.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"true"}]}]}</script>
```php
<?php

    function foo($a) : true|A {
        if ($a == 1) {
            return true;
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
+ [False](false.html)
+ [Logical Operators](logical-operator.html)
+ [Minus One -1](minus-one.html)
+ [PHP Natives](native-type.html)
+ [Standalone Types](standalone-type.html)
+ [Truthy](truthy.html)
