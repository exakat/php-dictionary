# Thin
Thin is an informal qualifier applied to a class that has very few responsibilities: it receives input, calls one collaborator, and returns output. It contains no business logic of its own.

A thin controller delegates all domain work to services, repositories, or domain objects. This makes it trivially testable and easy to replace.

The term is often used in the phrase ``thin controllers, fat models``, which is a common recommendation in MVC frameworks.

The opposite is a fat class. Taken to the extreme, a thin class becomes a mere passthrough: at that point it may be unnecessary altogether.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/thin.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/thin.html","name":"Thin","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:36 +0000","dateModified":"Fri, 19 Jun 2026 21:24:36 +0000","description":"Thin is an informal qualifier applied to a class that has very few responsibilities: it receives input, calls one collaborator, and returns output","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Thin.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Thin"}]}]}</script>
```php
<?php

// Thin controller example
class ArticleController {
    public function __construct(private ArticleService $articles) {}

    public function show(int $id): Response {
        return response()->json(
            $this->articles->findOrFail($id)
        );
    }
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller)**
## See Also

+ [Thin controllers, fat models](https://symfony.com/doc/current/best_practices.html#controllers)

## Related

+ [Fat](fat.html)
+ [Slim](slim.html)
+ [Thin Method](thin-method.html)
+ [Fat Controller](fat-controller.html)
+ [Controller](controller.html)
+ [Single Responsability Principle (SRP)](srp.html)
+ [Service](service.html)
