.. _thin:
.. _thin-controller:
.. _thin-class:
.. meta::
	:description:
		Thin: Thin is an informal qualifier applied to a class that has very few responsibilities: it receives input, calls one collaborator, and returns output.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Thin
	:twitter:description: Thin: Thin is an informal qualifier applied to a class that has very few responsibilities: it receives input, calls one collaborator, and returns output
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Thin
	:og:type: article
	:og:description: Thin is an informal qualifier applied to a class that has very few responsibilities: it receives input, calls one collaborator, and returns output
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/thin.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Thin","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:36 +0000","dateModified":"Fri, 19 Jun 2026 21:24:36 +0000","description":"Thin is an informal qualifier applied to a class that has very few responsibilities: it receives input, calls one collaborator, and returns output","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Thin.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Thin
----

Thin is an informal qualifier applied to a class that has very few responsibilities: it receives input, calls one collaborator, and returns output. It contains no business logic of its own.

A thin controller delegates all domain work to services, repositories, or domain objects. This makes it trivially testable and easy to replace.

The term is often used in the phrase ``thin controllers, fat models``, which is a common recommendation in MVC frameworks.

The opposite is a fat class. Taken to the extreme, a thin class becomes a mere passthrough: at that point it may be unnecessary altogether.

.. code-block:: php
   
   <?php
   
   // Thin controller example
   class ArticleController {
       public function __construct(private ArticleService $articles) {}
   
       public function show(int $id): Response {
           return response()->json(
               $this->articles->findOrFail($id)
           );
       }
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller>`__

See also `Thin controllers, fat models <https://symfony.com/doc/current/best_practices.html#controllers>`_.

Related : :ref:`Fat <fat>`, :ref:`Slim <slim>`, :ref:`Thin Method <thin-method>`, :ref:`Fat Controller <fat-controller>`, :ref:`Controller <controller>`, :ref:`Single Responsability Principle (SRP) <srp>`, :ref:`Service <service>`
