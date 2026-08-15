# composer.json
``composer.json`` is the manifest file that Composer reads to manage a PHP project's dependencies. It lives at the root of the project and declares, among other things, the runtime dependencies under ``require``, the development-only dependencies under ``require-dev``, the ``autoload`` mapping used to generate the class autoloader, and any custom ``scripts`` that can be run with ``composer run``.

Version constraints in ``require`` follow semantic versioning ranges, such as ``^2.0`` or ``~1.4``, rather than pinning an exact version; the exact versions actually installed are recorded separately, in ``composer.lock``.

``composer.json`` is meant to be hand-edited, or edited through commands like ``composer require``, and is committed to version control. It is distinct from ``composer.lock``, which Composer generates and should not be edited by hand.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/composer.json.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/composer.json.html","name":"composer.json","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Aug 2026 13:17:10 +0000","dateModified":"Sun, 09 Aug 2026 13:17:10 +0000","description":"composer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/composer.json.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"composer.json"}]}]}</script>
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

+ [composer.json - Understanding version constraints and dependencies](https://www.trakked.io/en/blog/composer-json-understanding-version-constraints-and-dependencies)

## Related

+ [Composer](composer.html)
+ [composer\\.lock](composer.lock.html)
+ [JavaScript Object Notation (JSON)](json.html)
+ [Packagist](packagist.html)
+ [Class Autoloading](autoload.html)
+ [Semantic Versioning](semantic-versioning.html)
+ [Dependency](dependency.html)
+ [PHP Standards Recommendations (PSR)](psr.html)
