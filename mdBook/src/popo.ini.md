# Plain Old PHP Object (POPO)
``Plain Old PHP Object``, or POPO for shorts, refers to a simple PHP class that does not depend on any framework, library, or special inheritance. POPOs are just basic classes with properties and methods, used to represent data or logic without any external dependencies. They are often contrasted with objects that are tied to frameworks, like Doctrine entities in Symfony, or use magic methods or reflection heavily.

``Plain Old <Language> Object`` also works for any other programming language.
```php
<?php

    class User {
        public string $name;
        public string $email;
    
        public function __construct(string $name, string $email)
        {
            $this->name = $name;
            $this->email = $email;
        }
    
        public function getInfo(): string
        {
            return "Name: {$this->name}, Email: {$this->email}";
        }
    }
    
    // Usage
    $user = new User('Elephpant PHP', 'elephpant@php.net');
    echo $user->getInfo(); // Output: Name: Elephpant PHP, Email: elephpant@php.net

?>
```

## See Also

+ [POPO — What is it, and why should you not use it?](https://medium.com/@damiankryger/popo-what-is-it-and-why-should-you-not-use-it-29c1487e2740)
+ [Plain old PHP Object - Usability and benefits in modern PHP programming](https://dev.to/fuadardiono/plain-old-php-object-usability-and-benefits-in-modern-php-programming-32oc)
+ [Do not Forget POPO, the Plain Old PHP Object approach](https://ivonascimento.com/2014/03/06/do-not-forget-popo-the-plain-old-php-object-approach/)

Related : [Data Transfer Object (DTO)](Data Transfer Object (DTO)), [Value Object (VO)](Value Object (VO)), [stdclass](stdclass)
