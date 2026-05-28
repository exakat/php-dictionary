.. _specification:
.. _spec:
.. _specification pattern:
.. meta::
	:description:
		Specification: A specification is a formal description of expected behaviour, constraints, or requirements.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Specification
	:twitter:description: Specification: A specification is a formal description of expected behaviour, constraints, or requirements
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Specification
	:og:type: article
	:og:description: A specification is a formal description of expected behaviour, constraints, or requirements
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/specification.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot modify header information - headers already sent.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot modify header information - headers already sent.html","name":"Specification","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"A specification is a formal description of expected behaviour, constraints, or requirements","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Specification.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Specification
-------------

A specification is a formal description of expected behaviour, constraints, or requirements. In software development, the term covers several contexts.

In the specification pattern, a Domain-Driven Design tactical pattern, a specification encapsulates a business rule as an object that can be combined with other specifications using logical operators, like AND, OR, NOT. This allows business rules to be reused, combined, and tested in isolation.

In a broader sense, a specification can refer to an API specificationm such as OpenAPI/Swagger, a language specificationm such as the PHP language specification, a test specification, or an architecture decision record.

.. code-block:: php
   
   <?php
   
   interface Specification
   {
       public function isSatisfiedBy(mixed $candidate): bool;
   }
   
   final class IsAdultUser implements Specification
   {
       public function isSatisfiedBy(mixed $candidate): bool
       {
           return $candidate instanceof User && $candidate->age >= 18;
       }
   }
   
   final class AndSpecification implements Specification
   {
       public function __construct(
           private readonly Specification $left,
           private readonly Specification $right,
       ) {}
   
       public function isSatisfiedBy(mixed $candidate): bool
       {
           return $this->left->isSatisfiedBy($candidate)
               && $this->right->isSatisfiedBy($candidate);
       }
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Specification_pattern>`__

See also `Specification Pattern (Wikipedia) <https://en.wikipedia.org/wiki/Specification_pattern>`_ and `Specifications by Eric Evans & Martin Fowler <https://martinfowler.com/apsupp/spec.pdf>`_.

Related : :ref:`Domain Design Driven (DDD) <ddd>`, :ref:`Design Pattern <design-pattern>`, :ref:`Business Logic <business-logic>`, :ref:`Validation <validation>`, :ref:`Design By Contract (DBC) <contract>`, :ref:`Swagger <swagger>`, :ref:`Architectural Decision Record (ADR) <adr>`

Related packages : `happyr/doctrine-specification <https://packagist.org/packages/happyr/doctrine-specification>`_
