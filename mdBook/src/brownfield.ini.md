# Brownfield
A brownfield project is a software development effort that takes place within or alongside an existing codebase, legacy system, or inherited infrastructure. The term is borrowed from civil engineering, where building on previously developed land, a brown field, requires accounting for existing structures, contamination, or constraints that new construction on a green field would not face.

Brownfield development is the norm in most professional PHP work. The majority of PHP projects in production were not started recently, and carry decisions made years ago, under different requirements, by teams that may no longer be present.

Characteristics of brownfield PHP projects:

+ Legacy constraints: older PHP versions may be the baseline, and introducing modern syntax such as named arguments, readonly properties, or fibers requires either a PHP upgrade or a split codebase.
+ Accumulated technical debt: inconsistent coding standards, mixed paradigms, missing tests, and undocumented assumptions are common. Any new feature must navigate this existing complexity.
+ Migration risk: every change to a shared module, database schema, or API contract risks breaking existing behaviour. Regression testing becomes critical.
+ Incremental improvement: refactoring must be done in stages. The strangler fig pattern, replacing parts of the system piece by piece while keeping the rest running, is a common strategy.
+ Third-party integration: brownfield systems often depend on vendors, external APIs, or legacy libraries that constrain upgrade paths.

The opposite of brownfield is greenfield development: starting a new project from scratch with full freedom over architecture and tooling.

Strategies for managing brownfield PHP code:

+ Introduce static analysis tools, incrementally using a baseline file to suppress existing errors while preventing new ones
+ Add a test harness around untested modules before refactoring them
+ Use PHP-CS-Fixer or Rector to automate style and upgrade migrations without manual churn
+ Enforce ``declare(strict_types=1)`` file by file as modules are touched.
```php
<?php

    // Brownfield: adding strict types to an existing file during a refactor,
    // without changing behaviour, as part of incremental improvement.

    declare(strict_types=1);

    // Rector rule example (in rector.php): automatically upgrade syntax in legacy files.
    // $rectorConfig->ruleWithConfiguration(
    //     \Rector\TypeDeclaration\Rector\FunctionLike\AddReturnTypeDeclarationRector::class,
    //     [...]
    // );

    // Characterisation test: lock current (possibly wrong) behaviour before refactoring.
    // $this->assertSame(legacyFunction($input), legacyFunction($input));

?>
```

## See Also

+ [Strangler Fig Application (Fowler)](https://martinfowler.com/bliki/StranglerFigApplication.html)

Related : [Greenfield](Greenfield), [Legacy](Legacy), [Technical Debt](Technical Debt), [Refactoring](Refactoring), [Architecture](Architecture)
