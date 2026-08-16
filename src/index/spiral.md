# Spiral
``Spiral`` has two main meanings in the PHP and software engineering world.

``Spiral Framework`` is a high-performance PHP framework built on top of RoadRunner, a Go-based application server. Unlike traditional PHP frameworks that re-bootstrap the application on every request, Spiral keeps the application alive between requests in long-running workers, significantly reducing overhead. It is well-suited for microservices, APIs, and high-throughput applications.

``Spiral`` model, or spiral development model is a software development lifecycle model that combines iterative development with systematic risk analysis. Each iteration, or spiral, passes through four phases: planning, risk analysis, engineering, and evaluation. It is particularly suited for large, complex, or high-risk projects where requirements may evolve.

Both concepts involve iterative, incremental progression: the spiral metaphor captures the idea of building upon previous cycles.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spiral.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spiral.html","name":"Spiral","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:49:30 +0000","dateModified":"Fri, 14 Aug 2026 08:49:30 +0000","description":"Spiral has two main meanings in the PHP and software engineering world","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Spiral.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"spiral"}]}]}</script>
```php
<?php

    // Spiral Framework: defining a simple controller
    namespace App\Controller;
    
    use Spiral\Router\Annotation\Route;
    
    final class HomeController
    {
        #[Route(route: '/', name: 'home')]
        public function index(): string
        {
            return 'Hello from Spiral!';
        }
    }

?>
```

**[Documentation](https://spiral.dev/docs)**
## See Also

+ [Spiral Framework](https://spiral.dev/)
+ [Spiral Development Model (Wikipedia)](https://en.wikipedia.org/wiki/Spiral_model)
+ [RoadRunner](https://roadrunner.dev/)

## Related

+ [Framework](framework.html)
+ [Waterfall](waterfall.html)
+ [Agile](agile.html)
+ [Software Development Life Cycle (SDLC)](sdlc.html)
+ [Microservice](microservice.html)
+ [Async](async.html)

## Related packages

+ [spiral/framework](https://packagist.org/packages/spiral/framework)
+ [spiral/roadrunner](https://packagist.org/packages/spiral/roadrunner)
