.. _testable:
.. meta::
	:description:
		Testable: A piece of code is testable when it may have related tests, that checks its behavior.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Testable
	:twitter:description: Testable: A piece of code is testable when it may have related tests, that checks its behavior
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Testable
	:og:type: article
	:og:description: A piece of code is testable when it may have related tests, that checks its behavior
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/testable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot use temporary expression in write context.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot use temporary expression in write context.html","name":"Testable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"A piece of code is testable when it may have related tests, that checks its behavior","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Testable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Testable
--------

A piece of code is testable when it may have related tests, that checks its behavior. 

To make a code testable, the following features are useful:

+ Dependency injection
+ Programming to interface
+ Single responsability principle
+ No global state
+ No static methods
+ No New in business logic
+ Pure functions
+ Deterministic functions
+ No direct output
+ No usage of ``exit()``

The golden rule: ``If it is not possible to write a test for it without setting up the whole world first, the code is not testable``.

See also `Improve your PHP code testability <https://dev.to/fabiothiroki/improve-your-php-code-testability-1onb>`_ and `Manual:Writing testable PHP code <https://www.mediawiki.org/wiki/Manual:Writing_testable_PHP_code>`_.

Related : :ref:`Exit <exit>`, :ref:`Deterministic <deterministic>`, :ref:`Single Responsability Principle (SRP) <srp>`, :ref:`Static Method <static-method>`, :ref:`Static Property <static-property>`, :ref:`Business Logic <business-logic>`, :ref:`Pure Function <pure-function>`, :ref:`Direct Output <direct-output>`, :ref:`Dependency Injection <di>`, :ref:`Program To Interface <program-to-interface>`
