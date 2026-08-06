# Thin Method
A thin method is an informal term used to describe a method that contains very little logic of its own and mostly delegates work to another method or object.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/thin-method.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/thin-method.html","name":"Thin Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A thin method is an informal term used to describe a method that contains very little logic of its own and mostly delegates work to another method or object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Thin Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [PHP Wrappers](php-wrapper.ini.html)
+ [file://](wrapper-file.ini.html)
+ [Wrapper Pattern](wrapper-pattern.ini.html)
