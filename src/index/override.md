# Override Attribute
This is a native PHP attribute, which tells the engine that a method must be overriding the same method in a parent.

The overridden method may be in the parent, or any subsequent parent; it may also be defined in a trait, as a concrete definition or an alias.

The error is only reported at execution time. The same error message is used if the class has no parent, at linting time.

This attribute may be added to any method.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/override.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/override.html","name":"Override Attribute","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"This is a native PHP attribute, which tells the engine that a method must be overriding the same method in a parent","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/override.html"]}],"keywords":["lint but won't execute","attribute","php attribute"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overriding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overwrite.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-attribute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-native-attribute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attribute-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mro.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.attributes.classes.php"},{"@type":"CreativeWork","name":"Understanding PHP #[Override] Attribute: A Beginner's Complete Guide \u2014 2025","url":"https:\/\/medium.com\/@arifhossen.dev\/understanding-php-override-attribute-a-beginners-complete-guide-55275bf7fc87"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"override"}]}]}</script>
```php
<?php

class MyParentClass {
    function foo() {}
}

class MyChildClass {
    #[Override]
    function foo() {}

    #[Override]
    function goo() {}
    // This raise an error, as goo() has no definition in the parent.
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.attributes.classes.php)**
## See Also

+ [Understanding PHP #[Override] Attribute: A Beginner's Complete Guide — 2025](https://medium.com/@arifhossen.dev/understanding-php-override-attribute-a-beginners-complete-guide-55275bf7fc87)

## Related

+ [Overriding](overriding.html)
+ [Overwrite](overwrite.html)
+ [PHP Native Attributes](php-attribute.html)
+ [PHP Native Attribute](php-native-attribute.html)
+ [Attribute Class](attribute-class.html)
+ [Method Resolution Order (MRO)](mro.html)
