.. _data-hiding:
.. meta::
	:description:
		Data Hiding: Data hiding is a core principle of object-oriented programming that restricts direct access to certain components of an object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Data Hiding
	:twitter:description: Data Hiding: Data hiding is a core principle of object-oriented programming that restricts direct access to certain components of an object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Data Hiding
	:og:type: article
	:og:description: Data hiding is a core principle of object-oriented programming that restricts direct access to certain components of an object
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/data-hiding.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/data-hiding.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/data-hiding.ini.html","name":"Data Hiding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:12:27 +0000","dateModified":"Tue, 14 Jul 2026 06:12:27 +0000","description":"Data hiding is a core principle of object-oriented programming that restricts direct access to certain components of an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Data Hiding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Data Hiding
-----------

Data hiding is a core principle of object-oriented programming that restricts direct access to certain components of an object. It is achieved through visibility modifiers: ``private``, ``protected``, and ``public``.

By hiding internal state, a class controls how its data is accessed and modified, preventing accidental corruption and enforcing invariants. This leads to more maintainable, testable, and robust code.

PHP provides several mechanisms for data hiding:

+ Visibility modifiers on properties and methods: ``private``, ``protected``, ``public``
+ The ``readonly`` keyword for immutable properties
+ The ``__get()`` and ``__set()`` magic methods for controlled access
+ Typed properties which enforce type constraints on assignment

Data hiding is closely related to the concept of encapsulation, which bundles data and methods that operate on that data within a single unit, controlling external access.

.. code-block:: php
   
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


`Documentation <https://www.php.net/manual/en/language.oop5.php>`__

See also `PHP Visibility <https://www.php.net/manual/en/language.oop5.php#language.oop5.visibility>`_ and `PHP Readonly Properties <https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties>`_.

Related : :ref:`Encapsulation <encapsulation>`, :ref:`Visibility <visibility>`, :ref:`Private Visibility <private>`, :ref:`Protected Visibility <protected>`, :ref:`Public Visibility <public>`, :ref:`Readonly <readonly>`, :ref:`Properties <property>`, :ref:`OOP (Object Oriented Programming) <oop>`, :ref:`Class Getter Method <getter>`, :ref:`Class Setter Method <setter>`, :ref:`Defensive Programming <defensive-programming>`, :ref:`Mutable State <mutable-state>`
