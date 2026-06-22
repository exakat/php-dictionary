.. _fat:
.. _fat-model:
.. _fat-class:
.. meta::
	:description:
		Fat: Fat is an informal qualifier applied to a class, most commonly a controller or a model, that has grown too large in terms of responsibilities, methods, and lines of code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Fat
	:twitter:description: Fat: Fat is an informal qualifier applied to a class, most commonly a controller or a model, that has grown too large in terms of responsibilities, methods, and lines of code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Fat
	:og:type: article
	:og:description: Fat is an informal qualifier applied to a class, most commonly a controller or a model, that has grown too large in terms of responsibilities, methods, and lines of code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fat.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Fat","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:17 +0000","dateModified":"Fri, 19 Jun 2026 21:25:17 +0000","description":"Fat is an informal qualifier applied to a class, most commonly a controller or a model, that has grown too large in terms of responsibilities, methods, and lines of code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Fat.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Fat
---

Fat is an informal qualifier applied to a class, most commonly a controller or a model, that has grown too large in terms of responsibilities, methods, and lines of code.

A fat class violates the Single Responsibility Principle. It is harder to test, understand, and maintain. Common symptoms include: many unrelated methods, large amounts of private helper code, direct database access mixed with business logic, and deep dependencies on infrastructure.

The opposite is a thin class, which delegates most work to collaborators. The right balance depends on architecture: an MVC application typically favours thin controllers and rich domain models or services.

Related terms: fat controller, fat model, god class, big ball of mud.

`Documentation <https://en.wikipedia.org/wiki/God_object>`__

See also `Large Class code smell <https://refactoring.guru/smells/large-class>`_ and `Thin controllers, fat models <https://symfony.com/doc/current/best_practices.html#controllers>`_.

Related : :ref:`Fat Controller <fat-controller>`, :ref:`Thin <thin>`, :ref:`Slim <slim>`, :ref:`Single Responsability Principle (SRP) <srp>`, :ref:`God Object <god-class>`, :ref:`Refactoring <refactoring>`, :ref:`Business Logic <business-logic>`
