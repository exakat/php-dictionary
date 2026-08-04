# Testable
A piece of code is testable when it may have related tests, that checks its behavior. 

To make a code testable, the following features are useful:

+ Dependency injection
+ Programming to interface
+ Single responsability principle
+ No global state
+ No static methods
+ No New in business logic
+ Pure functions
+ Deterministic functions
+ No direct output
+ No usage of ``exit()``

The golden rule: ``If it is not possible to write a test for it without setting up the whole world first, the code is not testable``.
## See Also

+ [Improve your PHP code testability](https://dev.to/fabiothiroki/improve-your-php-code-testability-1onb)
+ [Manual:Writing testable PHP code](https://www.mediawiki.org/wiki/Manual:Writing_testable_PHP_code)

Related : [Exit](Exit), [Deterministic](Deterministic), [Single Responsability Principle (SRP)](Single Responsability Principle (SRP)), [Static Method](Static Method), [Static Property](Static Property), [Business Logic](Business Logic), [Pure Function](Pure Function), [Direct Output](Direct Output), [Dependency Injection](Dependency Injection), [Program To Interface](Program To Interface), [Maintenability](Maintenability)
