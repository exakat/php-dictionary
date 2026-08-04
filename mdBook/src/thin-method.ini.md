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

Related : [PHP Wrappers](PHP Wrappers), [file://](file://), [Wrapper Pattern](Wrapper Pattern)
