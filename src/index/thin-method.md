# Thin Method
A thin method is an informal term used to describe a method that contains very little logic of its own and mostly delegates work to another method or object.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/thin-method.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/thin-method.html","name":"Thin Method","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 28 Aug 2026 09:39:42 +0000","dateModified":"Fri, 28 Aug 2026 09:39:42 +0000","description":"A thin method is an informal term used to describe a method that contains very little logic of its own and mostly delegates work to another method or object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/thin-method.html"]}],"keywords":["structure"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-wrapper.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-file.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-pattern.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/refactoring.guru\/design-patterns\/decorator"},{"@type":"CreativeWork","name":"Martin Fowler: Tell, Don't Ask","url":"https:\/\/martinfowler.com\/bliki\/TellDontAsk.html"},{"@type":"CreativeWork","name":"Facade pattern - Refactoring.Guru","url":"https:\/\/refactoring.guru\/design-patterns\/facade"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"thin-method"}]}]}</script>
```php
<?php

class X {
    public function __construct(private Repository $repository,
                       private Logger $logger,
                       ) {}

    public function save(User $user): void
    {
        $this->logger->info('Saving user');
        $this->repository->save($user);
    }
}

?>
```

**[Documentation](https://refactoring.guru/design-patterns/decorator)**
## See Also

+ [Martin Fowler: Tell, Don't Ask](https://martinfowler.com/bliki/TellDontAsk.html)
+ [Facade pattern - Refactoring.Guru](https://refactoring.guru/design-patterns/facade)

## Related

+ [PHP Wrappers](php-wrapper.html)
+ [file://](wrapper-file.html)
+ [Wrapper Pattern](wrapper-pattern.html)
