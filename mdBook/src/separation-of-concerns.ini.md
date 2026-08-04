# Separation Of Concerns
Separation of concerns is a design principle that advocates dividing a software system into distinct sections, each addressing a distinct concern. A concern is any piece of interest or focus in a program.

The principle helps keep each section focused on one specific responsibility, making the code easier to understand, maintain, and test. It is closely related to the Single Responsibility Principle, SRP, from SOLID, but applies more broadly at the architectural level as well as at the code level.

Classic examples include separating business logic from presentation, separating configuration from code, and separating I/O from computation.

Violations of this principle often manifest as God Classes or functions that mix unrelated responsibilities, leading to tight coupling and reduced cohesion.
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

## See Also

+ [Code Decoupling and Modularization in PHP](https://codesignal.com/learn/courses/refactoring-code-for-readability-and-maintainability-6/lessons/code-decoupling-and-modularization-in-php)
+ [On the Criteria To Be Used in Decomposing Systems into Modules](https://www.win.tue.nl/~wstomv/edu/2ip30/references/criteria_for_modularization.pdf)

Related : [SOLID](SOLID), [Single Responsability Principle (SRP)](Single Responsability Principle (SRP)), [Model - View - Controller (MVC)](Model - View - Controller (MVC)), [God Object](God Object), [Clean Architecture](Clean Architecture), [Coupling](Coupling), [Decoupling](Decoupling), [Cohesion](Cohesion), [Abstraction](Abstraction), [Onion Architecture](Onion Architecture), [Aspect-Oriented](Aspect-Oriented), [Business Logic](Business Logic)
