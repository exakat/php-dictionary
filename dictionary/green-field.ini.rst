.. _green-field:
.. _greenfield-project:
.. _greenfield-development:
.. _greenfield:
.. meta::
	:description:
		Greenfield: A greenfield project is a software development effort that starts from scratch, with no existing codebase, legacy constraints, or inherited technical debt.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Greenfield
	:twitter:description: Greenfield: A greenfield project is a software development effort that starts from scratch, with no existing codebase, legacy constraints, or inherited technical debt
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Greenfield
	:og:type: article
	:og:description: A greenfield project is a software development effort that starts from scratch, with no existing codebase, legacy constraints, or inherited technical debt
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/green-field.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/green-field.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/green-field.ini.html","name":"Greenfield","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 07:28:40 +0000","dateModified":"Thu, 09 Jul 2026 07:28:40 +0000","description":"A greenfield project is a software development effort that starts from scratch, with no existing codebase, legacy constraints, or inherited technical debt","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Greenfield.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Greenfield
----------

A greenfield project is a software development effort that starts from scratch, with no existing codebase, legacy constraints, or inherited technical debt. The term comes from civil engineering, where building on undeveloped land, aka a green field, imposes no constraints from prior construction.

Greenfield development offers maximum design freedom: the team chooses the architecture, language runtime, framework, data model, and tooling without having to preserve backward compatibility or work around previous decisions. This freedom also means that all foundational choices, such as dependency injection strategy, persistence layer, authentication model, error handling conventions, must be made explicitly and early.

Characteristics of greenfield PHP projects:

+ No legacy code to maintain: the team can adopt modern PHP features such as named arguments, fibers, readonly properties, union types, and current best practices from day one.
+ Framework choice is open: a framework, such as Laravel, Symfony, Slim, or a custom stack can be selected on merit rather than migration cost.
+ No migration risk: the database schema, API contracts, and deployment pipeline are defined for the target state, not constrained by an existing one.
+ Higher up-front design cost: decisions that a brownfield project has already made, even poorly, must be made here deliberately.

The opposite of greenfield is brownfield development: working inside or alongside an existing system, where the constraints of prior decisions shape every new choice.

Greenfield projects benefit from:

+ Composer and Packagist for dependency management from the start.
+ Strict type declarations ``declare(strict_types=1)`` enforced project-wide from the first file.
+ Modern tooling: static analysis, automated refactoring, testing, all configured before the first feature is written.

.. code-block:: php
   
   <?php
   
      // Greenfield entry point: strict types and modern conventions from file one.
      declare(strict_types=1);
   
      // Dependency injection container wired at bootstrap, no global state.
      $container = new \DI\Container();
   
      $app = $container->get(App::class);
      $app->run();
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Greenfield_project>`__

Related : :ref:`Brownfield <brownfield>`, :ref:`Legacy <legacy>`, :ref:`Technical Debt <technical-debt>`, :ref:`Architecture <architecture>`, :ref:`Dependency Injection <dependency-injection>`, :ref:`Composer <composer>`
