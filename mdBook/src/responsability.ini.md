# Responsability
Responsibility refers to a reason to change or a goal to achieve. A class, module, or function should have one, and only one, responsibility: this means it should do one thing and do it well.

Responsability often relate to the key idea of Single Responsibility Principle, the SRP.

The SRP is the ``S`` in SOLID, formalized by ``Robert C. Martin``. It states:  ``A class should have only one reason to change``.

When a class handles both business rules and database storage, it has two responsibilities: and therefore two reasons to change. This happens when business rules change or when the database schema changes, or both.
## See Also

+ [Single Responsibility Principle(SRP) example using PHP](https://medium.com/@Omojunior11/single-responsibility-principle-srp-example-using-php-337e33d739e)

Related : [SOLID](SOLID), [Single Responsability Principle (SRP)](Single Responsability Principle (SRP)), [Accountability](Accountability)
