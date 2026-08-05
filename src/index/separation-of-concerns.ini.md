# Separation Of Concerns
Separation of concerns is a design principle that advocates dividing a software system into distinct sections, each addressing a distinct concern. A concern is any piece of interest or focus in a program.

The principle helps keep each section focused on one specific responsibility, making the code easier to understand, maintain, and test. It is closely related to the Single Responsibility Principle, SRP, from SOLID, but applies more broadly at the architectural level as well as at the code level.

Classic examples include separating business logic from presentation, separating configuration from code, and separating I/O from computation.

Violations of this principle often manifest as God Classes or functions that mix unrelated responsibilities, leading to tight coupling and reduced cohesion.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/separation-of-concerns.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/separation-of-concerns.ini.html","name":"Separation Of Concerns","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Separation of concerns is a design principle that advocates dividing a software system into distinct sections, each addressing a distinct concern","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Separation Of Concerns.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [SOLID](solid.ini.html)
+ [Single Responsability Principle (SRP)](srp.ini.html)
+ [Model - View - Controller (MVC)](mvc.ini.html)
+ [God Object](god-object.ini.html)
+ [Clean Architecture](clean-architecture.ini.html)
+ [Coupling](coupling.ini.html)
+ [Decoupling](decoupling.ini.html)
+ [Cohesion](cohesion.ini.html)
+ [Abstraction](abstraction.ini.html)
+ [Onion Architecture](onion-architecture.ini.html)
+ [Aspect-Oriented](aspect-oriented.ini.html)
+ [Business Logic](business-logic.ini.html)
