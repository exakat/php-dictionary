# Data Hiding
Data hiding is a core principle of object-oriented programming that restricts direct access to certain components of an object. It is achieved through visibility modifiers: ``private``, ``protected``, and ``public``.

By hiding internal state, a class controls how its data is accessed and modified, preventing accidental corruption and enforcing invariants. This leads to more maintainable, testable, and robust code.

PHP provides several mechanisms for data hiding:

+ Visibility modifiers on properties and methods: ``private``, ``protected``, ``public``
+ The ``readonly`` keyword for immutable properties
+ The ``__get()`` and ``__set()`` magic methods for controlled access
+ Typed properties which enforce type constraints on assignment

Data hiding is closely related to the concept of encapsulation, which bundles data and methods that operate on that data within a single unit, controlling external access.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-hiding.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/data-hiding.html","name":"Data Hiding","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:12:27 +0000","dateModified":"Tue, 14 Jul 2026 06:12:27 +0000","description":"Data hiding is a core principle of object-oriented programming that restricts direct access to certain components of an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Data Hiding.html"]}],"keywords":["oop","concept","encapsulation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/encapsulation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/private.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/protected.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/public.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readonly.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/oop.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/getter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/setter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/defensive-programming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mutable-state.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.php"},{"@type":"CreativeWork","name":"PHP Visibility","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.php#language.oop5.visibility"},{"@type":"CreativeWork","name":"PHP Readonly Properties","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.properties.php#language.oop5.properties.readonly-properties"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"data-hiding"}]}]}</script>
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

+ [Encapsulation](encapsulation.html)
+ [Visibility](visibility.html)
+ [Private Visibility](private.html)
+ [Protected Visibility](protected.html)
+ [Public Visibility](public.html)
+ [Readonly](readonly.html)
+ [Properties](property.html)
+ [OOP (Object Oriented Programming)](oop.html)
+ [Class Getter Method](getter.html)
+ [Class Setter Method](setter.html)
+ [Defensive Programming](defensive-programming.html)
+ [Mutable State](mutable-state.html)
