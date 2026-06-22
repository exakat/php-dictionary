.. _separation-of-concerns:
.. _soc:
.. meta::
	:description:
		Separation Of Concerns: Separation of concerns is a design principle that advocates dividing a software system into distinct sections, each addressing a distinct concern.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Separation Of Concerns
	:twitter:description: Separation Of Concerns: Separation of concerns is a design principle that advocates dividing a software system into distinct sections, each addressing a distinct concern
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Separation Of Concerns
	:og:type: article
	:og:description: Separation of concerns is a design principle that advocates dividing a software system into distinct sections, each addressing a distinct concern
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/separation-of-concerns.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Separation Of Concerns","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Separation of concerns is a design principle that advocates dividing a software system into distinct sections, each addressing a distinct concern","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Separation Of Concerns.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Separation Of Concerns
----------------------

Separation of concerns is a design principle that advocates dividing a software system into distinct sections, each addressing a distinct concern. A concern is any piece of interest or focus in a program.

The principle helps keep each section focused on one specific responsibility, making the code easier to understand, maintain, and test. It is closely related to the Single Responsibility Principle, SRP, from SOLID, but applies more broadly at the architectural level as well as at the code level.

Classic examples include separating business logic from presentation, separating configuration from code, and separating I/O from computation.

Violations of this principle often manifest as God Classes or functions that mix unrelated responsibilities, leading to tight coupling and reduced cohesion.

.. code-block:: php
   
   <?php
   
       // Concerns mixed: business logic and output together
       function getUserAndDisplay(int $id): void {
           $user = fetchFromDatabase($id); // data access
           echo "<h1>" . $user['name'] . "</h1>"; // presentation
       }
   
       // Concerns separated
       function getUser(int $id): array {
           return fetchFromDatabase($id); // data access only
       }
   
       function displayUser(array $user): void {
           echo "<h1>" . $user['name'] . "</h1>"; // presentation only
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Separation_of_concerns>`__

See also `Code Decoupling and Modularization in PHP <https://codesignal.com/learn/courses/refactoring-code-for-readability-and-maintainability-6/lessons/code-decoupling-and-modularization-in-php>`_ and `On the Criteria To Be Used in Decomposing Systems into Modules <https://www.win.tue.nl/~wstomv/edu/2ip30/references/criteria_for_modularization.pdf>`_.

Related : :ref:`SOLID <solid>`, :ref:`Single Responsability Principle (SRP) <srp>`, :ref:`Model - View - Controller (MVC) <mvc>`, :ref:`God Object <god-object>`, :ref:`Clean Architecture <clean-architecture>`, :ref:`Coupling <coupling>`, :ref:`Decoupling <decoupling>`, :ref:`Cohesion <cohesion>`, :ref:`Abstraction <abstraction>`, :ref:`Onion Architecture <onion-architecture>`, :ref:`Aspect-Oriented <aspect-oriented>`, :ref:`Business Logic <business-logic>`
