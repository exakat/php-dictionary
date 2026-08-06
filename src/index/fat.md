# Fat
Fat is an informal qualifier applied to a class, most commonly a controller or a model, that has grown too large in terms of responsibilities, methods, and lines of code.

A fat class violates the Single Responsibility Principle. It is harder to test, understand, and maintain. Common symptoms include: many unrelated methods, large amounts of private helper code, direct database access mixed with business logic, and deep dependencies on infrastructure.

The opposite is a thin class, which delegates most work to collaborators. The right balance depends on architecture: an MVC application typically favours thin controllers and rich domain models or services.

Related terms: fat controller, fat model, god class, big ball of mud.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fat.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/fat.html","name":"Fat","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:17 +0000","dateModified":"Fri, 19 Jun 2026 21:25:17 +0000","description":"Fat is an informal qualifier applied to a class, most commonly a controller or a model, that has grown too large in terms of responsibilities, methods, and lines of code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Fat.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/God_object)**
## See Also

+ [Large Class code smell](https://refactoring.guru/smells/large-class)
+ [Thin controllers, fat models](https://symfony.com/doc/current/best_practices.html#controllers)

## Related

+ [Fat Controller](fat-controller.ini.html)
+ [Thin](thin.ini.html)
+ [Slim](slim.ini.html)
+ [Single Responsability Principle (SRP)](srp.ini.html)
+ [God Object](god-class.ini.html)
+ [Refactoring](refactoring.ini.html)
+ [Business Logic](business-logic.ini.html)
