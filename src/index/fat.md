# Fat
Fat is an informal qualifier applied to a class, most commonly a controller or a model, that has grown too large in terms of responsibilities, methods, and lines of code.

A fat class violates the Single Responsibility Principle. It is harder to test, understand, and maintain. Common symptoms include: many unrelated methods, large amounts of private helper code, direct database access mixed with business logic, and deep dependencies on infrastructure.

The opposite is a thin class, which delegates most work to collaborators. The right balance depends on architecture: an MVC application typically favours thin controllers and rich domain models or services.

Related terms: fat controller, fat model, god class, big ball of mud.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fat.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fat.html","name":"Fat","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 06:03:07 +0000","dateModified":"Tue, 01 Sep 2026 06:03:07 +0000","description":"Fat is an informal qualifier applied to a class, most commonly a controller or a model, that has grown too large in terms of responsibilities, methods, and lines of code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fat.html"]}],"alternateName":["fat-model","fat-class"],"keywords":["anti-pattern","concept","adjective"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fat-controller.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/thin.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/slim.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/srp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/god-object.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/refactoring.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/business-logic.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/God_object"},{"@type":"CreativeWork","name":"Large Class code smell","url":"https:\/\/refactoring.guru\/smells\/large-class"},{"@type":"CreativeWork","name":"Thin controllers, fat models","url":"https:\/\/symfony.com\/doc\/current\/best_practices.html#controllers"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"fat"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/God_object)**
## See Also

+ [Large Class code smell](https://refactoring.guru/smells/large-class)
+ [Thin controllers, fat models](https://symfony.com/doc/current/best_practices.html#controllers)

## Related

+ [Fat Controller](fat-controller.html)
+ [Thin](thin.html)
+ [Slim](slim.html)
+ [Single Responsability Principle (SRP)](srp.html)
+ [God Object](god-object.html)
+ [Refactoring](refactoring.html)
+ [Business Logic](business-logic.html)
