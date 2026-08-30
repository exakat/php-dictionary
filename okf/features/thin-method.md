---
type: "PHP Feature"
title: "Thin Method"
description: "A thin method is an informal term used to describe a method that contains very little logic of its own and mostly delegates work to another method or object."
resource: "https://refactoring.guru/design-patterns/decorator"
tags: ["structure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Thin Method

A thin method is an informal term used to describe a method that contains very little logic of its own and mostly delegates work to another method or object.

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

## Documentation
- [https://refactoring.guru/design-patterns/decorator](https://refactoring.guru/design-patterns/decorator)

## See Also
- [Martin Fowler: Tell, Don't Ask](https://martinfowler.com/bliki/TellDontAsk.html)
- [Facade pattern - Refactoring.Guru](https://refactoring.guru/design-patterns/facade)

## Related
- [PHP Wrappers](/features/php-wrapper.md)
- [file://](/features/wrapper-file.md)
- [Wrapper Pattern](/features/wrapper-pattern.md)

