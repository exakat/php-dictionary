# True
``true`` has two usages, as PHP keyword: the opposite of ``false``, as a boolean value and a special type for functions that may return a boolean, but only true, never ``false``. 

``true`` as a type was introduced in version 8.2.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/true.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/true.html","name":"True","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 29 Jun 2026 09:33:52 +0000","dateModified":"Mon, 29 Jun 2026 09:33:52 +0000","description":"``true`` has two usages, as PHP keyword: the opposite of ``false``, as a boolean value and a special type for functions that may return a boolean, but only true, never ``false``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/True.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Boolean](boolean.ini.html)
+ [Type System](type.ini.html)
+ [False](false.ini.html)
+ [Logical Operators](logical-operator.ini.html)
+ [Minus One -1](minus-one.ini.html)
+ [PHP Natives](native-type.ini.html)
+ [Standalone Types](standalone-type.ini.html)
+ [Truthy](truthy.ini.html)
