.. _dependency-injection-container:
.. meta::
	:description:
		Dependency Injection Container: A dependency injection container is a tool to make dependency injection easy to use.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dependency Injection Container
	:twitter:description: Dependency Injection Container: A dependency injection container is a tool to make dependency injection easy to use
	:twitter:creator: @exakat
	:og:title: Dependency Injection Container
	:og:type: article
	:og:description: A dependency injection container is a tool to make dependency injection easy to use
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dependency-injection-container.ini.html
	:og:locale: en


Dependency Injection Container
------------------------------

A dependency injection container is a tool to make dependency injection easy to use. 

The application requests an object of class Foo to the container. The container then build any dependency for that object, then build that object and returns it. 

PSR-11 is related to containers. 


See also `Dependency Injection (DI) Container in PHP <https://medium.com/tech-tajawal/dependency-injection-di-container-in-php-a7e5d309ccc6>`_, `Create PHP Dependency Injection Container and Learn How Laravel Initiate Controller and Method with Dependency and Parameter <https://dev.to/emrancu/let-s-create-php-dependency-injection-container-24lm>`_, `How and why to use PHP-DI: a PHP dependency injection container <https://getinstance.com/php-dependency-injection/>`_

Related : :ref:`Dependency Injection <dependency-injection>`, :ref:`PHP Standards Recommendations (PSR) <psr>`

Related packages : `psr/container <https://packagist.org/packages/psr/container>`_, `pimple/pimple <https://packagist.org/packages/pimple/pimple>`_, `php-di/php-di <https://packagist.org/packages/php-di/php-di>`_, `illuminate/container <https://packagist.org/packages/illuminate/container>`_, `nette/di <https://packagist.org/packages/nette/di>`_
