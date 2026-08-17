# Trait
Traits are a mechanism for code reuse in single inheritance languages.

Traits define methods and properties. They are included in one or several classes by the use of ``use`` expression.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trait.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trait.html","name":"Trait","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 12 Aug 2026 07:59:04 +0000","dateModified":"Wed, 12 Aug 2026 07:59:04 +0000","description":"Traits are a mechanism for code reuse in single inheritance languages","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Trait.html"]}],"alternateName":["traits"],"keywords":["feature","structure","cite","keyword"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cite.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/%24this.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/const.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/constant-in-trait.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use-trait.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-collision.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mro.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polymorphism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extension-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mixin.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/open-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/soft-delete.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.traits.php"},{"@type":"CreativeWork","name":"Traits are not inherited","url":"https:\/\/doeken.org\/tip\/traits_are_not_inherited"},{"@type":"CreativeWork","name":"What are traits","url":"https:\/\/riptutorial.com\/php\/example\/10952\/what-is-a-trait-"},{"@type":"CreativeWork","name":"Some lesser known facts of Traits in PHP","url":"https:\/\/www.amitmerchant.com\/some-lesser-known-facts-traits-php\/"},{"@type":"CreativeWork","name":"When to use a trait?","url":"https:\/\/matthiasnoback.nl\/2022\/07\/when-to-use-a-trait\/"},{"@type":"CreativeWork","name":"The difference between Traits, Interfaces, and Abstract Classes in PHP","url":"https:\/\/aschmelyun.com\/blog\/the-difference-between-traits-interfaces-and-abstract-classes-in-php\/"},{"@type":"CreativeWork","name":"ext\/traitify","url":"https:\/\/github.com\/arshidkv12\/traitify"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"trait"}]}]}</script>
```php
<?php

trait T {
    const CONSTANT = 1;
    
    private $property;

    function method() {}
}

class x { 
    use t;
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.traits.php)**
## See Also

+ [Traits are not inherited](https://doeken.org/tip/traits_are_not_inherited)
+ [What are traits](https://riptutorial.com/php/example/10952/what-is-a-trait-)
+ [Some lesser known facts of Traits in PHP](https://www.amitmerchant.com/some-lesser-known-facts-traits-php/)
+ [When to use a trait?](https://matthiasnoback.nl/2022/07/when-to-use-a-trait/)
+ [The difference between Traits, Interfaces, and Abstract Classes in PHP](https://aschmelyun.com/blog/the-difference-between-traits-interfaces-and-abstract-classes-in-php/)
+ [ext/traitify](https://github.com/arshidkv12/traitify)

## Related

+ [Class](class.html)
+ [Class Interface Trait Enumeration (CITE)](cite.html)
+ [Use](use.html)
+ [$this]($this.html)
+ [Const](const.html)
+ [Constants In Trait](constant-in-trait.html)
+ [Use In Traits](use-trait.html)
+ [Method Collision](method-collision.html)
+ [Method](method.html)
+ [Method Resolution Order (MRO)](mro.html)
+ [Polymorphism](polymorphism.html)
+ [Extension Method](extension-method.html)
+ [Mixin](mixin.html)
+ [Open Class](open-class.html)
+ [Soft Delete](soft-delete.html)
