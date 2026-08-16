# Value Object
A value object is a design pattern used to represent immutable objects that encapsulate a set of related values or attributes. Unlike entities, which are identified by their identity and can change over time, value objects are defined by their state and remain constant throughout their lifetime.

Value objects are typically used to model concepts that don't have a distinct identity but are important for the behavior and correctness of the system. For example, a Date value object can represent a specific date, and its attributes may include the year, month, and day. Another example is a Money value object that represents a monetary amount, including attributes such as the currency and the value.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/value-object.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/value-object.html","name":"Value Object","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A value object is a design pattern used to represent immutable objects that encapsulate a set of related values or attributes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Value Object.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dto.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/entity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/service.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/calisthenics.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phantom-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/refinement-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rich-domain-model.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Value_object"},{"@type":"CreativeWork","name":"Writing value objects in PHP","url":"https:\/\/dev.to\/ianrodrigues\/writing-value-objects-in-php-4acg"},{"@type":"CreativeWork","name":"Value objects in PHP","url":"https:\/\/lessthan12ms.com\/value-objects-in-php.html"},{"@type":"CreativeWork","name":"Is it a DTO or a Value Object?","url":"https:\/\/matthiasnoback.nl\/2022\/09\/is-it-a-dto-or-a-value-object\/"},{"@type":"CreativeWork","name":"Bring Value to your code","url":"https:\/\/notes.belgeek.dev\/2023\/11\/05\/bring-value-to-your-code\/"},{"@type":"CreativeWork","name":"Value Objects in PHP 8: Building a better code","url":"https:\/\/dev.to\/cnastasi\/value-objects-in-php-8-building-a-better-code-38k8"},{"@type":"CreativeWork","name":"Advanced Value Objects in PHP 8","url":"https:\/\/dev.to\/cnastasi\/advanced-value-objects-in-php-8-1lp0"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"value-object"}]}]}</script>
```php

<?php

    class Person {
        public $name;
        public $lastName;
    }

?>

```

**[Documentation](https://en.wikipedia.org/wiki/Value_object)**
## See Also

+ [Writing value objects in PHP](https://dev.to/ianrodrigues/writing-value-objects-in-php-4acg)
+ [Value objects in PHP](https://lessthan12ms.com/value-objects-in-php.html)
+ [Is it a DTO or a Value Object?](https://matthiasnoback.nl/2022/09/is-it-a-dto-or-a-value-object/)
+ [Bring Value to your code](https://notes.belgeek.dev/2023/11/05/bring-value-to-your-code/)
+ [Value Objects in PHP 8: Building a better code](https://dev.to/cnastasi/value-objects-in-php-8-building-a-better-code-38k8)
+ [Advanced Value Objects in PHP 8](https://dev.to/cnastasi/advanced-value-objects-in-php-8-1lp0)

## Related

+ [Data Transfer Object (DTO)](dto.html)
+ [Entities](entity.html)
+ [Service](service.html)
+ [Object Calisthenics](calisthenics.html)
+ [Phantom Type](phantom-type.html)
+ [Refinement Type](refinement-type.html)
+ [Rich Domain Model](rich-domain-model.html)

## Related packages

+ [sebastian/type](https://packagist.org/packages/sebastian/type)
+ [cuyz/valinor](https://packagist.org/packages/cuyz/valinor)
