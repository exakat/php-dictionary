.. _spiral:
.. _spiral-framework:
.. _spiral-model:
.. meta::
	:description:
		Spiral: Spiral has two main meanings in the PHP and software engineering world.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Spiral
	:twitter:description: Spiral: Spiral has two main meanings in the PHP and software engineering world
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Spiral
	:og:type: article
	:og:description: Spiral has two main meanings in the PHP and software engineering world
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/spiral.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/spiral.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/spiral.ini.html","name":"Spiral","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Spiral has two main meanings in the PHP and software engineering world","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Spiral.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Spiral
------

Spiral has two main meanings in the PHP and software engineering world.

Spiral Framework is a high-performance PHP framework built on top of RoadRunner, a Go-based application server. Unlike traditional PHP frameworks that re-bootstrap the application on every request, Spiral keeps the application alive between requests in long-running workers, significantly reducing overhead. It is well-suited for microservices, APIs, and high-throughput applications.

Spiral model, or spiral development model is a software development lifecycle model that combines iterative development with systematic risk analysis. Each iteration, or spiral, passes through four phases: planning, risk analysis, engineering, and evaluation. It is particularly suited for large, complex, or high-risk projects where requirements may evolve.

Both concepts involve iterative, incremental progression: the spiral metaphor captures the idea of building upon previous cycles.

.. code-block:: php
   
   <?php
   
   // Spiral Framework: defining a simple controller
   namespace App\Controller;
   
   use Spiral\Router\Annotation\Route;
   
   final class HomeController
   {
       #[Route(route: '/', name: 'home')]
       public function index(): string
       {
           return 'Hello from Spiral!';
       }
   }
   
   ?>


`Documentation <https://spiral.dev/docs>`__

See also `Spiral Framework <https://spiral.dev/>`_, `Spiral Development Model (Wikipedia) <https://en.wikipedia.org/wiki/Spiral_model>`_ and `RoadRunner <https://roadrunner.dev/>`_.

Related : :ref:`Framework <framework>`, :ref:`Waterfall <waterfall>`, :ref:`Agile <agile>`, :ref:`Software Development Life Cycle (SDLC) <sdlc>`, :ref:`Microservice <microservice>`, :ref:`Async <async>`

Related packages : `spiral/framework <https://packagist.org/packages/spiral/framework>`_, `spiral/roadrunner <https://packagist.org/packages/spiral/roadrunner>`_
