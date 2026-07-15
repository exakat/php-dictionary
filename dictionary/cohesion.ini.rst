.. _cohesion:
.. _high-cohesion:
.. meta::
	:description:
		Cohesion: Cohesion measures how closely related and focused the responsibilities of a single module, class, or function are.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cohesion
	:twitter:description: Cohesion: Cohesion measures how closely related and focused the responsibilities of a single module, class, or function are
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cohesion
	:og:type: article
	:og:description: Cohesion measures how closely related and focused the responsibilities of a single module, class, or function are
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cohesion.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/cohesion.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/cohesion.ini.html","name":"Cohesion","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Cohesion measures how closely related and focused the responsibilities of a single module, class, or function are","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cohesion.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Cohesion
--------

Cohesion measures how closely related and focused the responsibilities of a single module, class, or function are. High cohesion means that a unit has a single, well-defined purpose and all its parts work toward that purpose. Low cohesion means it handles many unrelated concerns.

High cohesion is a desirable property: it makes code easier to understand, test, maintain, and reuse. It is the ``C`` in the SOLID principle of Single Responsibility, or SRP, and is the counterpart of low coupling.

``Robert C. Martin``'s common forms of cohesion, from weakest to strongest:

+ Coincidental: parts are grouped arbitrarily, worst case
+ Logical: parts perform similar operations, e.g., a utility class
+ Temporal: parts are executed at the same time
+ Procedural: parts follow a sequence of steps
+ Communicational: parts operate on the same data
+ Sequential: output of one part is input to the next
+ Functional: all parts contribute to a single well-defined task, best case

Architectes aim for high cohesion and low coupling.


.. code-block:: php
   
   <?php
   
   // Low cohesion: the class does too many unrelated things
   class Utilities {
       public function sendEmail(string $to, string $body): void { /* ... */ }
       public function calculateTax(float $price): float { return $price * 0.2; }
       public function parseDate(string $date): DateTime { return new DateTime($date); }
   }
   
   // High cohesion: each class has one focused responsibility
   class Mailer {
       public function send(string $to, string $body): void { /* ... */ }
   }
   
   class TaxCalculator {
       public function calculate(float $price): float { return $price * 0.2; }
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Cohesion_(computer_science)>`__

See also `PHP and Microservices: Balancing Cohesion and Coupling <https://php-include.com/php-and-microservices-balancing-cohesion-and-coupling/>`_.

Related : :ref:`Coupling <coupling>`, :ref:`Decoupling <decoupling>`, :ref:`Single Responsability Principle (SRP) <srp>`, :ref:`SOLID <solid>`, :ref:`Separation Of Concerns <separation-of-concerns>`, :ref:`God Object <god-object>`, :ref:`Tech Silo <tech-silo>`
