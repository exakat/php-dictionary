# Modifier
A modifier is a keyword that changes the behavior or properties of a class element, such as property, method, or constant. PHP supports several categories of modifiers:

Visibility modifiers control access to class members:

+ ``public``: accessible from anywhere, by default
+ ``protected``: accessible within the class and its subclasses
+ ``private``: accessible only within the declaring class

Other modifiers:

+ ``static``: belongs to the class itself rather than instances
+ ``abstract``: declares a class or method that must be implemented by subclasses
+ ``final``: prevents a class from being extended or a method from being overridden
+ ``readonly``: makes a property immutable after initialization
+ ``readonly class``: makes all properties readonly

Modifiers are essential for implementing encapsulation, polymorphism, and other OOP principles. They enforce design constraints at the language level, improving code safety and clarity.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/modifier.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/modifier.html","name":"Modifier","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 13:31:40 +0000","dateModified":"Tue, 25 Aug 2026 13:31:40 +0000","description":"A modifier is a keyword that changes the behavior or properties of a class element, such as property, method, or constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/modifier.html"]}],"alternateName":["visibility-modifier"],"keywords":["oop","syntax","keyword"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/private.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/protected.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/public.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/abstract.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/final.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readonly.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-hiding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/encapsulation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/oop.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-constant.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.php"},{"@type":"CreativeWork","name":"PHP Visibility","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.php#language.oop5.visibility"},{"@type":"CreativeWork","name":"PHP Class Keywords","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.php#language.oop5.basic.class"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"modifier"}]}]}</script>
```php
<?php

    abstract class Shape {
        protected float $area;

        abstract public function calculate(): float;

        final public function describe(): string {
            return 'This shape has an area of ' . $this->calculate();
        }
    }

    class Circle extends Shape {
        public function __construct(
            private readonly float $radius
        ) {}

        public function calculate(): float {
            return pi() * $this->radius;
        }
    }

    $c = new Circle(5);
    echo $c->describe();

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.php)**
## See Also

+ [PHP Visibility](https://www.php.net/manual/en/language.oop5.php#language.oop5.visibility)
+ [PHP Class Keywords](https://www.php.net/manual/en/language.oop5.php#language.oop5.basic.class)

## Related

+ [Visibility](visibility.html)
+ [Private Visibility](private.html)
+ [Protected Visibility](protected.html)
+ [Public Visibility](public.html)
+ [static](static.html)
+ [Abstract Keyword](abstract.html)
+ [Final Keyword](final.html)
+ [Readonly](readonly.html)
+ [Data Hiding](data-hiding.html)
+ [Encapsulation](encapsulation.html)
+ [OOP (Object Oriented Programming)](oop.html)
+ [Properties](property.html)
+ [Method](method.html)
+ [Static Constant](class-constant.html)
