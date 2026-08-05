# Value Object
A value object is a design pattern used to represent immutable objects that encapsulate a set of related values or attributes. Unlike entities, which are identified by their identity and can change over time, value objects are defined by their state and remain constant throughout their lifetime.

Value objects are typically used to model concepts that don't have a distinct identity but are important for the behavior and correctness of the system. For example, a Date value object can represent a specific date, and its attributes may include the year, month, and day. Another example is a Money value object that represents a monetary amount, including attributes such as the currency and the value.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/value-object.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/value-object.ini.html","name":"Value Object","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:37:17 +0000","dateModified":"Wed, 05 Aug 2026 08:37:17 +0000","description":"A value object is a design pattern used to represent immutable objects that encapsulate a set of related values or attributes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Value Object.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Data Transfer Object (DTO)](dto.ini.html)
+ [Entities](entity.ini.html)
+ [Service](service.ini.html)
+ [Object Calisthenics](calisthenics.ini.html)
+ [Phantom Type](phantom-type.ini.html)
+ [Refinement Type](refinement-type.ini.html)
+ [Rich Domain Model](rich-domain-model.ini.html)

## Related packages

+ [sebastian/type](https://packagist.org/packages/sebastian/type)
+ [cuyz/valinor](https://packagist.org/packages/cuyz/valinor)
