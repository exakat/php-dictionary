.. _autowiring:
.. _auto-wiring:

Autowiring
----------

Autowiring is the ability of the framework to inject dependencies, based on the constructor signature.

Autowiring is based on types. 

Several PHP frameworks offer autowiring : Laravel, Netter, Slim, Symfony.



.. code-block:: php
   
   <?php
   
   class Renderer {
   	private View $view;
   
   	function __construct(View $view) {
   		$this->view = $view;
   	}
   }
   ?>


See also `PHP OOP Autoloading <https://tutorials.supunkavinda.blog/php/oop-autoloading>`_, `What is autoloading in PHP <https://solidlystated.com/scripting/what-is-autoloading-in-php/>`_, `Defining Services Dependencies Automatically (Autowiring) <https://symfony.com/doc/current/service_container/autowiring.html>`_

Related : :ref:`Dependency Injection <dependency-injection>`
