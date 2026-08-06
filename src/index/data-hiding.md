# Data Hiding
Data hiding is a core principle of object-oriented programming that restricts direct access to certain components of an object. It is achieved through visibility modifiers: ``private``, ``protected``, and ``public``.

By hiding internal state, a class controls how its data is accessed and modified, preventing accidental corruption and enforcing invariants. This leads to more maintainable, testable, and robust code.

PHP provides several mechanisms for data hiding:

+ Visibility modifiers on properties and methods: ``private``, ``protected``, ``public``
+ The ``readonly`` keyword for immutable properties
+ The ``__get()`` and ``__set()`` magic methods for controlled access
+ Typed properties which enforce type constraints on assignment

Data hiding is closely related to the concept of encapsulation, which bundles data and methods that operate on that data within a single unit, controlling external access.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/data-hiding.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/data-hiding.html","name":"Data Hiding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:12:27 +0000","dateModified":"Tue, 14 Jul 2026 06:12:27 +0000","description":"Data hiding is a core principle of object-oriented programming that restricts direct access to certain components of an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Data Hiding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class BankAccount {
        private float $balance;
        private string $owner;

        public function __construct(string $owner, float $initialBalance) {
            $this->owner = $owner;
            $this->balance = $initialBalance;
        }

        // Controlled access through methods
        public function deposit(float $amount): void {
            if ($amount <= 0) {
                throw new \InvalidArgumentException('Amount must be positive');
            }
            $this->balance += $amount;
        }

        public function getBalance(): float {
            return $this->balance;
        }
    }

    $account = new BankAccount('Alice', 1000);
    // $account->balance = 999999; // Fatal error: cannot access private property
    $account->deposit(500);
    echo $account->getBalance(); // 1500

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.php)**
## See Also

+ [PHP Visibility](https://www.php.net/manual/en/language.oop5.php#language.oop5.visibility)
+ [PHP Readonly Properties](https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties)

## Related

+ [Encapsulation](encapsulation.ini.html)
+ [Visibility](visibility.ini.html)
+ [Private Visibility](private.ini.html)
+ [Protected Visibility](protected.ini.html)
+ [Public Visibility](public.ini.html)
+ [Readonly](readonly.ini.html)
+ [Properties](property.ini.html)
+ [OOP (Object Oriented Programming)](oop.ini.html)
+ [Class Getter Method](getter.ini.html)
+ [Class Setter Method](setter.ini.html)
+ [Defensive Programming](defensive-programming.ini.html)
+ [Mutable State](mutable-state.ini.html)
