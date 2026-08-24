# Magic Property
Special properties, which are not declared, but dynamically handled by the magic methods. They do not have specific declaration. 

The magic methods to handle magic properties are: ``__get()``, ``__set()``, ``__isset()`` and ``__unset()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-property.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-property.html","name":"Magic Property","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 12:08:16 +0000","dateModified":"Sat, 15 Aug 2026 12:08:16 +0000","description":"Special properties, which are not declared, but dynamically handled by the magic methods","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-property.html"]}],"alternateName":["overloaded-property"],"keywords":["class"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__get.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__set.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__isset.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__unset.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.magic.php"},{"@type":"CreativeWork","name":"Overloading (__get, __set)","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.overloading.php#object.get"},{"@type":"CreativeWork","name":"Magic Constants","url":"https:\/\/www.php.net\/manual\/en\/language.constants.magic.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"magic-property"}]}]}</script>
```php
<?php

class X {
    function __get($name) {
        return 'World!';
    }
}

$x = new X;
echo $x->hello; // display World!

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php)**
## See Also

+ [Overloading (__get, __set)](https://www.php.net/manual/en/language.oop5.overloading.php#object.get)
+ [Magic Constants](https://www.php.net/manual/en/language.constants.magic.php)

## Related

+ [\_\_get() Method](__get.html)
+ [\_\_set() Method](__set.html)
+ [\_\_isset() Method](__isset.html)
+ [\_\_unset() Method](__unset.html)
+ [Magic Constants](magic-constant.html)
+ [Magic](magic.html)
+ [Properties](property.html)
