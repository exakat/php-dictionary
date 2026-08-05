# composer.json
``composer.json`` is the manifest file that Composer reads to manage a PHP project's dependencies. It lives at the root of the project and declares, among other things, the runtime dependencies under ``require``, the development-only dependencies under ``require-dev``, the ``autoload`` mapping used to generate the class autoloader, and any custom ``scripts`` that can be run with ``composer run``.

Version constraints in ``require`` follow semantic versioning ranges, such as ``^2.0`` or ``~1.4``, rather than pinning an exact version; the exact versions actually installed are recorded separately, in ``composer.lock``.

``composer.json`` is meant to be hand-edited, or edited through commands like ``composer require``, and is committed to version control. It is distinct from ``composer.lock``, which Composer generates and should not be edited by hand.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/composer.json.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/composer.json.ini.html","name":"composer.json","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:44:00 +0000","dateModified":"Wed, 05 Aug 2026 08:44:00 +0000","description":"``composer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/composer.json.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
{
    "name": "acme/example",
    "require": {
        "php": ">=8.1",
        "monolog/monolog": "^3.0" 
    },
    "require-dev": {
        "phpunit/phpunit": "^10.0" 
    },
    "autoload": {
        "psr-4": {
            "Acme\\Example\\": "src/" 
        }
    }
}
```

**[Documentation](https://getcomposer.org/doc/04-schema.md)**
## See Also

+ [composer.json schema](https://getcomposer.org/doc/04-schema.md)

## Related

+ [Composer](composer.ini.html)
+ [composer\\.lock](composer.lock.ini.html)
+ [JavaScript Object Notation (JSON)](json.ini.html)
+ [Packagist](packagist.ini.html)
+ [Class Autoloading](autoload.ini.html)
+ [Semantic Versioning](semantic-versioning.ini.html)
+ [Dependency](dependency.ini.html)
+ [PHP Standards Recommendations (PSR)](psr.ini.html)
