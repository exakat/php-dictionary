---
type: "PHP Feature"
title: "Inflector"
description: "An inflector processes strings to adapt them for various situations, such as singular/plural, or for uppercase/lowercase."
resource: "https://www.doctrine-project.org/projects/inflector.html"
tags: ["text"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Inflector

An inflector processes strings to adapt them for various situations, such as singular/plural, or for uppercase/lowercase.

Typical inflector operations include pluralizing and singularizing nouns, ``browsers`` to ``browser``, converting between naming conventions such as ``camelCase``, ``snake_case``, and ``kebab-case``, deriving class or table names from words ``classify()``, ``tableize()``, and producing ordinal forms ``1st``, ``2nd``. Because English pluralization has many irregular forms such as ``child``/``children``, ``mouse``/``mice``, inflectors rely on ordered rule tables and exception lists rather than a single suffix rule.

In the PHP ecosystem, ``doctrine/inflector`` is the most widely used standalone implementation and is also embedded inside Doctrine ORM for generating table and column names from entity and property names; Symfony's ``symfony/string`` component ships its own ``Inflector`` service; Laravel's ``Illuminate\Support\Str::plural()``/``singular()`` helpers perform the equivalent inflection; and CakePHP bundles inflection rules in its utility package for generating model and route names.

```php
<?php

    // example using doctrine/inflector
    
    $inflector = InflectorFactory::create()->build();
    echo $inflector->singularize('browsers'); // browser

?>
```

## Documentation
- [https://www.doctrine-project.org/projects/inflector.html](https://www.doctrine-project.org/projects/inflector.html)

## See Also
- [Inflection (Wikipedia)](https://en.wikipedia.org/wiki/Inflection)
- [Symfony String component](https://symfony.com/doc/current/components/string.html)

## Details
- Packagist: [doctrine/inflector](https://packagist.org/packages/doctrine/inflector)
- Packagist: [symfony/inflector](https://packagist.org/packages/symfony/inflector)
- Packagist: [cakephp/utility](https://packagist.org/packages/cakephp/utility)

