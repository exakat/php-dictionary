# Inflector
An inflector processes strings to adapt them for various situations, such as singular/plural, or for uppercase/lowercase.

Typical inflector operations include pluralizing and singularizing nouns, ``browsers`` to ``browser``, converting between naming conventions such as ``camelCase``, ``snake_case``, and ``kebab-case``, deriving class or table names from words ``classify()``, ``tableize()``, and producing ordinal forms ``1st``, ``2nd``. Because English pluralization has many irregular forms such as ``child``/``children``, ``mouse``/``mice``, inflectors rely on ordered rule tables and exception lists rather than a single suffix rule.

In the PHP ecosystem, ``doctrine/inflector`` is the most widely used standalone implementation and is also embedded inside Doctrine ORM for generating table and column names from entity and property names; Symfony's ``symfony/string`` component ships its own ``Inflector`` service; Laravel's ``Illuminate\Support\Str::plural()``/``singular()`` helpers perform the equivalent inflection; and CakePHP bundles inflection rules in its utility package for generating model and route names.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inflector.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inflector.html","name":"Inflector","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Aug 2026 07:46:08 +0000","dateModified":"Sun, 16 Aug 2026 07:46:08 +0000","description":"An inflector processes strings to adapt them for various situations, such as singular\/plural, or for uppercase\/lowercase","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/inflector.html"]}],"keywords":["text"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/localisation.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.doctrine-project.org\/projects\/inflector.html"},{"@type":"CreativeWork","name":"Inflection (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Inflection"},{"@type":"CreativeWork","name":"Symfony String component","url":"https:\/\/symfony.com\/doc\/current\/components\/string.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"inflector"}]}]}</script>
```php
<?php

    // example using doctrine/inflector
    
    $inflector = InflectorFactory::create()->build();
    echo $inflector->singularize('browsers'); // browser

?>
```

**[Documentation](https://www.doctrine-project.org/projects/inflector.html)**
## See Also

+ [Inflection (Wikipedia)](https://en.wikipedia.org/wiki/Inflection)
+ [Symfony String component](https://symfony.com/doc/current/components/string.html)

## Related

+ [Internationalization](localisation.html)

## Related packages

+ [doctrine/inflector](https://packagist.org/packages/doctrine/inflector)
+ [symfony/inflector](https://packagist.org/packages/symfony/inflector)
+ [cakephp/utility](https://packagist.org/packages/cakephp/utility)
