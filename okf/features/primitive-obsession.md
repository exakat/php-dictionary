---
type: "PHP Feature"
title: "Primitive Obsession"
description: "Primitive Obsession is a bias in the way the code is written."
resource: "https://medium.com/@alt.wibbing/primitive-obsession-the-anti-pattern-6339efb82c87"
tags: ["code smell"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Primitive Obsession

Primitive Obsession is a bias in the way the code is written. It happens when the code uses too many primitive types, even to represent complex concepts.

```php
<?php

class Person
{
    public string $id;

    public string $firstName;
    public string $lastName;

    public string $address;
    public string $postCode;
    public string $city;
    public string $country;
}

?>
```

## Documentation
- [https://medium.com/@alt.wibbing/primitive-obsession-the-anti-pattern-6339efb82c87](https://medium.com/@alt.wibbing/primitive-obsession-the-anti-pattern-6339efb82c87)

## See Also
- [Primitive Obsession](https://refactoring.guru/smells/primitive-obsession)

## Related
- [Scalar Types](/features/scalar-type.md)

