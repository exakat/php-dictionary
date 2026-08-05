# Trait
Traits are a mechanism for code reuse in single inheritance languages.

Traits define methods and properties. They are included in one or several classes by the use of ``use`` expression.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/trait.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/trait.ini.html","name":"Trait","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 04:37:25 +0000","dateModified":"Mon, 13 Jul 2026 04:37:25 +0000","description":"Traits are a mechanism for code reuse in single inheritance languages","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Trait.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Class](class.ini.html)
+ [Class Interface Trait Enumeration (CITE)](cite.ini.html)
+ [Use](use.ini.html)
+ [$this]($this.ini.html)
+ [Const](const.ini.html)
+ [Constants In Trait](constant-in-trait.ini.html)
+ [Use In Traits](use-trait.ini.html)
+ [Method Collision](method-collision.ini.html)
+ [Method](method.ini.html)
+ [Method Resolution Order (MRO)](mro.ini.html)
+ [Polymorphism](polymorphism.ini.html)
