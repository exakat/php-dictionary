# Thin
Thin is an informal qualifier applied to a class that has very few responsibilities: it receives input, calls one collaborator, and returns output. It contains no business logic of its own.

A thin controller delegates all domain work to services, repositories, or domain objects. This makes it trivially testable and easy to replace.

The term is often used in the phrase ``thin controllers, fat models``, which is a common recommendation in MVC frameworks.

The opposite is a fat class. Taken to the extreme, a thin class becomes a mere passthrough: at that point it may be unnecessary altogether.
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

## See Also

+ [Thin controllers, fat models](https://symfony.com/doc/current/best_practices.html#controllers)

Related : [Fat](Fat), [Slim](Slim), [Thin Method](Thin Method), [Fat Controller](Fat Controller), [Controller](Controller), [Single Responsability Principle (SRP)](Single Responsability Principle (SRP)), [Service](Service)
