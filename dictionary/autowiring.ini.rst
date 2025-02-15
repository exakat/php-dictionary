.. _autowiring:
.. _auto-wiring:
.. meta::
	:description:
		Autowiring: Autowiring is the ability of the framework to inject dependencies, based on the constructor signature.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Autowiring
	:twitter:description: Autowiring: Autowiring is the ability of the framework to inject dependencies, based on the constructor signature
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Autowiring
	:og:type: article
	:og:description: Autowiring is the ability of the framework to inject dependencies, based on the constructor signature
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/autowiring.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Autowiring","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Feb 2025 00:13:14 +0000","dateModified":"Sat, 15 Feb 2025 00:13:14 +0000","description":"Autowiring is the ability of the framework to inject dependencies, based on the constructor signature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Autowiring.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Autowiring
----------

Autowiring is the ability of the framework to inject dependencies, based on the constructor signature.

Autowiring is based on types. 

Several PHP frameworks offer autowiring : Laravel, Netter, Slim, Symfony...

.. code-block:: php
   
   <?php
   
   class Renderer {
   	private View $view;
   
   	function __construct(View $view) {
   		$this->view = $view;
   	}
   }
   ?>


`Documentation <https://symfony.com/doc/current/service_container/autowiring.html>`__

See also `PHP OOP Autoloading <https://tutorials.supunkavinda.blog/php/oop-autoloading>`_, `What is autoloading in PHP <https://solidlystated.com/scripting/what-is-autoloading-in-php/>`_, `Defining Services Dependencies Automatically (Autowiring) <https://symfony.com/doc/current/service_container/autowiring.html>`_

Related : :ref:`Dependency Injection <dependency-injection>`, :ref:`Type System <type>`
