# Thin Method
A thin method is an informal term used to describe a method that contains very little logic of its own and mostly delegates work to another method or object.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/thin-method.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/thin-method.html","name":"Thin Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A thin method is an informal term used to describe a method that contains very little logic of its own and mostly delegates work to another method or object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Thin Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Thin Method"}]}]}</script>
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
## Related

+ [PHP Wrappers](php-wrapper.html)
+ [file://](wrapper-file.html)
+ [Wrapper Pattern](wrapper-pattern.html)
