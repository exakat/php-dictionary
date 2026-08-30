---
type: "concept"
title: "Data Hiding"
description: "Data hiding is a core principle of object-oriented programming that restricts direct access to certain components of an object."
resource: "https://www.php.net/manual/en/language.oop5.php"
tags: ["oop", "concept", "encapsulation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Data Hiding

Data hiding is a core principle of object-oriented programming that restricts direct access to certain components of an object. It is achieved through visibility modifiers: ``private``, ``protected``, and ``public``.

By hiding internal state, a class controls how its data is accessed and modified, preventing accidental corruption and enforcing invariants. This leads to more maintainable, testable, and robust code.

PHP provides several mechanisms for data hiding:

+ Visibility modifiers on properties and methods: ``private``, ``protected``, ``public``
+ The ``readonly`` keyword for immutable properties
+ The ``__get()`` and ``__set()`` magic methods for controlled access
+ Typed properties which enforce type constraints on assignment

Data hiding is closely related to the concept of encapsulation, which bundles data and methods that operate on that data within a single unit, controlling external access.

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

## Documentation
- [https://www.php.net/manual/en/language.oop5.php](https://www.php.net/manual/en/language.oop5.php)

## See Also
- [PHP Visibility](https://www.php.net/manual/en/language.oop5.php#language.oop5.visibility)
- [PHP Readonly Properties](https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties)

## Related
- [Encapsulation](/features/encapsulation.md)
- [Visibility](/features/visibility.md)
- [Private Visibility](/features/private.md)
- [Protected Visibility](/features/protected.md)
- [Public Visibility](/features/public.md)
- [Readonly](/features/readonly.md)
- [Properties](/features/property.md)
- [OOP (Object Oriented Programming)](/features/oop.md)
- [Class Getter Method](/features/getter.md)
- [Class Setter Method](/features/setter.md)
- [Defensive Programming](/features/defensive-programming.md)
- [Mutable State](/features/mutable-state.md)

