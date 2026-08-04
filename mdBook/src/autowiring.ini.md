# Autowiring
Autowiring is the ability of the framework to inject dependencies, based on the constructor signature.

Autowiring is based on types, in the signature of the controller.

Autowiring is  commonly used in dependency injection, ``DI`` containers.

Autowiring reduce boilerplate code, enhance type usage and make refactoring easier.
```php
<?php

    class Renderer {
        private View $view;
    
        function __construct(View $view) {
            $this->view = $view;
        }
    }

?>
```

## See Also

+ [Autowiring - php-di](https://php-di.org/doc/autowiring.html)

Related : [Dependency Injection](Dependency Injection), [Constructor](Constructor), [Boilerplate](Boilerplate), [Type System](Type System), [Refactoring](Refactoring)
