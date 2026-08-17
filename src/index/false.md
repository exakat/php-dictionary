# False
``false`` has two usages, as PHP keyword: the opposite of ``true``, as a boolean value and a special type for functions that may return a boolean, but not ``true``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/false.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/false.html","name":"False","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"false has two usages, as PHP keyword: the opposite of true, as a boolean value and a special type for functions that may return a boolean, but not true","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/False.html"]}],"keywords":["type","boolean","value"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/boolean.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/true.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/falsy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/truthy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/underscore.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zero.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logical-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file_get_contents.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/one.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/short-ternary.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autovivification.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/standalone-type.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.boolean.php"},{"@type":"CreativeWork","name":"PHP Boolean: Assigning True or False to a Variable","url":"https:\/\/flatcoding.com\/tutorials\/php\/php-boolean-true-and-false\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"false"}]}]}</script>
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
