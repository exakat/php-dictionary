# Decorator Pattern
A decorator is a design pattern used to add behavior or responsibilities to objects dynamically, without altering their code. Decorators are often used to extend the functionality of classes or objects by wrapping them in additional classes that provide the desired functionality.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decorator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/decorator.html","name":"Decorator Pattern","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A decorator is a design pattern used to add behavior or responsibilities to objects dynamically, without altering their code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Decorator Pattern.html"]}],"alternateName":["decoration"],"keywords":["design pattern"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/design-pattern.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-designpattern.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/proxy-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/aspect-oriented.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/facade.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/middleware.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/refactoring.guru\/design-patterns\/decorator\/php\/example"},{"@type":"CreativeWork","name":"Decorating Member Objects","url":"https:\/\/rekalogika.dev\/doctrine-collections-decorator\/cookbook\/decorating-members"},{"@type":"CreativeWork","name":"Hands-on decoration","url":"https:\/\/muhammedsari.me\/hands-on-decoration"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"decorator"}]}]}</script>
```php
<?php

interface Coffee {
    function cost();
}

class SimpleCoffee implements Coffee {
    public function cost() {
        return 5;
    }
}

class MilkDecorator implements Coffee {
    protected $coffee;

    public function __construct(Coffee $coffee) {
        $this->coffee = $coffee;
    }

    public function cost() {
        return $this->coffee->cost() + 2;
    }
}

?>
```

**[Documentation](https://refactoring.guru/design-patterns/decorator/php/example)**
## See Also

+ [Decorating Member Objects](https://rekalogika.dev/doctrine-collections-decorator/cookbook/decorating-members)
+ [Hands-on decoration](https://muhammedsari.me/hands-on-decoration)

## Related

+ [Design Pattern](design-pattern.html)
+ [Design Pattern Wrapper](wrapper-designpattern.html)
+ [Proxy Class](proxy-class.html)
+ [Interface](interface.html)
+ [Aspect-Oriented](aspect-oriented.html)
+ [Facade](facade.html)
+ [Middleware Pattern](middleware.html)

## Related packages

+ [zbateson/stream-decorators](https://packagist.org/packages/zbateson/stream-decorators)
