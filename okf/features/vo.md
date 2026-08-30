---
type: "acronym"
title: "Value Object (VO)"
description: "``VO`` stands for Value Object: a simple object whose equality is not based on identity."
resource: "https://en.wikipedia.org/wiki/Data_transfer_object"
tags: ["acronym", "ddd"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Value Object (VO)

``VO`` stands for Value Object: a simple object whose equality is not based on identity. This means that two value objects are equal when they have the same values. They do not have to be the same object. 

``VO`` is a class, with properties, constants and methods. 

``VO`` may be confused with Data Transfer Object: the former's role is to carry data inside the application, the first one holds data, and can only be compared by its values.

## Documentation
- [https://en.wikipedia.org/wiki/Data_transfer_object](https://en.wikipedia.org/wiki/Data_transfer_object)

## See Also
- [Writing value objects in PHP](https://dev.to/ianrodrigues/writing-value-objects-in-php-4acg)
- [Understanding Value Objects in PHP](https://wendelladriel.com/blog/understanding-value-objects-in-php)

## Related
- [Domain Design Driven (DDD)](/features/ddd.md)
- [Class Entities](/features/class-entity.md)
- [Data Transfer Object (DTO)](/features/dto.md)
- [Plain Old PHP Object (POPO)](/features/popo.md)

