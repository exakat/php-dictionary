# Separation Of Concerns
Separation of concerns is a design principle that advocates dividing a software system into distinct sections, each addressing a distinct concern. A concern is any piece of interest or focus in a program.

The principle helps keep each section focused on one specific responsibility, making the code easier to understand, maintain, and test. It is closely related to the Single Responsibility Principle, SRP, from SOLID, but applies more broadly at the architectural level as well as at the code level.

Classic examples include separating business logic from presentation, separating configuration from code, and separating I/O from computation.

Violations of this principle often manifest as God Classes or functions that mix unrelated responsibilities, leading to tight coupling and reduced cohesion.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/separation-of-concerns.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/separation-of-concerns.html","name":"Separation Of Concerns","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Separation of concerns is a design principle that advocates dividing a software system into distinct sections, each addressing a distinct concern","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Separation Of Concerns.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"separation-of-concerns"}]}]}</script>
```php
<?php

    // Concerns mixed: business logic and output together
    function getUserAndDisplay(int $id): void {
        $user = fetchFromDatabase($id); // data access
        echo "<h1>" . $user['name'] . "</h1>"; // presentation
    }

    // Concerns separated
    function getUser(int $id): array {
        return fetchFromDatabase($id); // data access only
    }

    function displayUser(array $user): void {
        echo "<h1>" . $user['name'] . "</h1>"; // presentation only
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Separation_of_concerns)**
## See Also

+ [Code Decoupling and Modularization in PHP](https://codesignal.com/learn/courses/refactoring-code-for-readability-and-maintainability-6/lessons/code-decoupling-and-modularization-in-php)
+ [On the Criteria To Be Used in Decomposing Systems into Modules](https://www.win.tue.nl/~wstomv/edu/2ip30/references/criteria_for_modularization.pdf)

## Related

+ [SOLID](solid.html)
+ [Single Responsability Principle (SRP)](srp.html)
+ [Model - View - Controller (MVC)](mvc.html)
+ [God Object](god-object.html)
+ [Clean Architecture](clean-architecture.html)
+ [Coupling](coupling.html)
+ [Decoupling](decoupling.html)
+ [Cohesion](cohesion.html)
+ [Abstraction](abstraction.html)
+ [Onion Architecture](onion-architecture.html)
+ [Aspect-Oriented](aspect-oriented.html)
+ [Business Logic](business-logic.html)
