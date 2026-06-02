.. _aspect-oriented:
.. _aop:
.. meta::
	:description:
		Aspect-Oriented: Aspect-oriented design structures code so that cross-cutting concerns: behaviors that affect multiple classes or layers without belonging to any single one, are isolated into dedicated units called aspects.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Aspect-Oriented
	:twitter:description: Aspect-Oriented: Aspect-oriented design structures code so that cross-cutting concerns: behaviors that affect multiple classes or layers without belonging to any single one, are isolated into dedicated units called aspects
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Aspect-Oriented
	:og:type: article
	:og:description: Aspect-oriented design structures code so that cross-cutting concerns: behaviors that affect multiple classes or layers without belonging to any single one, are isolated into dedicated units called aspects
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/aspect-oriented.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Aspect-Oriented","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 10:23:27 +0000","dateModified":"Thu, 28 May 2026 10:23:27 +0000","description":"Aspect-oriented design structures code so that cross-cutting concerns: behaviors that affect multiple classes or layers without belonging to any single one, are isolated into dedicated units called aspects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Aspect-Oriented.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Aspect-Oriented
---------------

Aspect-oriented design structures code so that cross-cutting concerns: behaviors that affect multiple classes or layers without belonging to any single one, are isolated into dedicated units called aspects.

In PHP, common cross-cutting concerns include logging, caching, authorization, validation, and transaction management. They are typically implemented through decorators, middleware chains, event listeners, or AOP frameworks.

The key principle is that business logic classes should remain unaware of these concerns: they are woven in by the surrounding infrastructure rather than being called explicitly. This improves cohesion, reduces duplication, and makes each concern independently testable and replaceable.

.. code-block:: php
   
   <?php
   
   // Cross-cutting concern isolated as a decorator
   final class LoggingRepository implements UserRepositoryInterface {
       public function __construct(
           private readonly UserRepositoryInterface $inner,
           private readonly LoggerInterface         $logger,
       ) {}
   
       public function find(int $id): User {
           $this->logger->info('find', ['id' => $id]);
           return $this->inner->find($id);
       }
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Aspect-oriented_programming>`__

See also `Go! AOP Framework for PHP <https://github.com/goaop/framework>`_.

Related : :ref:`Aspect Oriented Programming <aspect-programming>`, :ref:`Decorator Pattern <decorator>`, :ref:`Middleware Pattern <middleware>`, :ref:`Proxy <proxy>`, :ref:`Paradigm <paradigm>`, :ref:`Separation Of Concerns <separation-of-concerns>`, :ref:`Decoupling <decoupling>`

Related packages : `goaop/framework <https://packagist.org/packages/goaop/framework>`_
