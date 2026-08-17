# Specification
A specification is a formal description of expected behaviour, constraints, or requirements. In software development, the term covers several contexts.

In the specification pattern, a Domain-Driven Design tactical pattern, a specification encapsulates a business rule as an object that can be combined with other specifications using logical operators, like AND, OR, NOT. This allows business rules to be reused, combined, and tested in isolation.

In a broader sense, a specification can refer to an API specification, such as ``OpenAPI``/``Swagger``, a language specification, such as the PHP language specification, a test specification, or an architecture decision record.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/specification.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/specification.html","name":"Specification","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:29:57 +0000","dateModified":"Fri, 14 Aug 2026 08:29:57 +0000","description":"A specification is a formal description of expected behaviour, constraints, or requirements","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Specification.html"]}],"alternateName":["spec","specification-pattern"],"keywords":["ddd","design-pattern"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ddd.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/design-pattern.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/business-logic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/validation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/contract.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/swagger.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/adr.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sbom.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Specification_pattern"},{"@type":"CreativeWork","name":"Specifications by Eric Evans & Martin Fowler","url":"https:\/\/martinfowler.com\/apsupp\/spec.pdf"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"specification"}]}]}</script>
```php
<?php

    interface Specification
    {
        public function isSatisfiedBy(mixed $candidate): bool;
    }
    
    final class IsAdultUser implements Specification
    {
        public function isSatisfiedBy(mixed $candidate): bool
        {
            return $candidate instanceof User && $candidate->age >= 18;
        }
    }
    
    final class AndSpecification implements Specification
    {
        public function __construct(
            private readonly Specification $left,
            private readonly Specification $right,
        ) {}
    
        public function isSatisfiedBy(mixed $candidate): bool
        {
            return $this->left->isSatisfiedBy($candidate)
                && $this->right->isSatisfiedBy($candidate);
        }
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Specification_pattern)**
## See Also

+ [Specifications by Eric Evans & Martin Fowler](https://martinfowler.com/apsupp/spec.pdf)

## Related

+ [Domain Design Driven (DDD)](ddd.html)
+ [Design Pattern](design-pattern.html)
+ [Business Logic](business-logic.html)
+ [Validation](validation.html)
+ [Design By Contract (DBC)](contract.html)
+ [Swagger](swagger.html)
+ [Architectural Decision Record (ADR)](adr.html)
+ [Software Bill Of Material (SBOM)](sbom.html)

## Related packages

+ [happyr/doctrine-specification](https://packagist.org/packages/happyr/doctrine-specification)
