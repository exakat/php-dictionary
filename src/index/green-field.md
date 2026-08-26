# Greenfield
A greenfield project is a software development effort that starts from scratch, with no existing codebase, legacy constraints, or inherited technical debt. The term comes from civil engineering, where building on undeveloped land, aka a green field, imposes no constraints from prior construction.

Greenfield development offers maximum design freedom: the team chooses the architecture, language runtime, framework, data model, and tooling without having to preserve backward compatibility or work around previous decisions. This freedom also means that all foundational choices, such as dependency injection strategy, persistence layer, authentication model, error handling conventions, must be made explicitly and early.

Characteristics of greenfield PHP projects:

+ No legacy code to maintain: the team can adopt modern PHP features such as named arguments, fibers, readonly properties, union types, and current best practices from day one.
+ Framework choice is open: a framework, such as Laravel, Symfony, Slim, or a custom stack can be selected on merit rather than migration cost.
+ No migration risk: the database schema, API contracts, and deployment pipeline are defined for the target state, not constrained by an existing one.
+ Higher up-front design cost: decisions that a brownfield project has already made, even poorly, must be made here deliberately.

The opposite of greenfield is brownfield development: working inside or alongside an existing system, where the constraints of prior decisions shape every new choice.

Greenfield projects benefit from:

+ Composer and Packagist for dependency management from the start.
+ Strict type declarations ``declare(strict_types=1)`` enforced project-wide from the first file.
+ Modern tooling: static analysis, automated refactoring, testing, all configured before the first feature is written.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/green-field.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/green-field.html","name":"Greenfield","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:17:39 +0000","dateModified":"Wed, 05 Aug 2026 08:17:39 +0000","description":"A greenfield project is a software development effort that starts from scratch, with no existing codebase, legacy constraints, or inherited technical debt","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/green-field.html"]}],"alternateName":["greenfield-project","greenfield-development","greenfield"],"keywords":["architecture","adjective"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/brownfield.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/legacy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/technical-debt.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/architecture.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependency-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/composer.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Greenfield_project"},{"@type":"CreativeWork","name":"Greenfield- vs. Brownfield-Approach - Definition & Explanation","url":"https:\/\/easy-software.com\/en\/glossary\/greenfield-vs-brownfield-approach\/"},{"@type":"CreativeWork","name":"Difference between Brownfield and Greenfield Software Development","url":"https:\/\/qarea.com\/blog\/difference-between-brownfield-and-greenfield-software-development"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"green-field"}]}]}</script>
```php
<?php

   // Greenfield entry point: strict types and modern conventions from file one.
   declare(strict_types=1);

   // Dependency injection container wired at bootstrap, no global state.
   $container = new \DI\Container();

   $app = $container->get(App::class);
   $app->run();

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Greenfield_project)**
## See Also

+ [Greenfield- vs. Brownfield-Approach - Definition & Explanation](https://easy-software.com/en/glossary/greenfield-vs-brownfield-approach/)
+ [Difference between Brownfield and Greenfield Software Development](https://qarea.com/blog/difference-between-brownfield-and-greenfield-software-development)

## Related

+ [Brownfield](brownfield.html)
+ [Legacy](legacy.html)
+ [Technical Debt](technical-debt.html)
+ [Architecture](architecture.html)
+ [Dependency Injection](dependency-injection.html)
+ [Composer](composer.html)
