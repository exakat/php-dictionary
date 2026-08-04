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

Related : [Internationalization](Internationalization)
