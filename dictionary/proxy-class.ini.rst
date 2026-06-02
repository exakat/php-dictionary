.. _proxy-class:
.. _lazy proxy:
.. _virtual proxy:
.. meta::
	:description:
		Proxy Class: A proxy class is a class that stands in for another class, intercepting calls and delegating them to the real object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Proxy Class
	:twitter:description: Proxy Class: A proxy class is a class that stands in for another class, intercepting calls and delegating them to the real object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Proxy Class
	:og:type: article
	:og:description: A proxy class is a class that stands in for another class, intercepting calls and delegating them to the real object
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/proxy-class.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Proxy Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 30 May 2026 07:35:25 +0000","dateModified":"Sat, 30 May 2026 07:35:25 +0000","description":"A proxy class is a class that stands in for another class, intercepting calls and delegating them to the real object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Proxy Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Proxy Class
-----------

A proxy class is a class that stands in for another class, intercepting calls and delegating them to the real object. Proxy classes are used to add behaviour transparently: lazy initialisation, access control, logging, or caching.

PHP 8.4 introduced native lazy objects at the engine level, enabling the creation of proxy instances that defer construction of the wrapped object until it is first accessed. This replaces many library-based approaches for virtual proxies.

Before PHP 8.4, proxy classes were typically generated at runtime using tools such as ``ocramius/proxy-manager`` or Symfony's lazy service proxies. These tools generate a subclass that overrides every method to intercept calls, then delegates to the real instance.

A proxy class must implement the same interface or extend the same base class as the proxied object so that it is transparent to callers.

.. code-block:: php
   
   <?php
   
   // PHP 8.4 native lazy proxy
   class HeavyService
   {
       public function __construct()
       {
           // Expensive initialization
       }
   
       public function compute(): int
       {
           return 42;
       }
   }
   
   $reflector = new ReflectionClass(HeavyService::class);
   $proxy = $reflector->newLazyProxy(function (HeavyService $proxy): HeavyService {
       return new HeavyService(); // called only on first access
   });
   
   // HeavyService::__construct() has not been called yet
   echo $proxy->compute(); // triggers initialisation, outputs 42
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.lazy-objects.php>`__

See also `PHP 8.4 Lazy Objects <https://www.php.net/manual/en/language.oop5.lazy-objects.php>`_ and `ocramius/proxy-manager <https://ocramius.github.io/ProxyManager/>`_.

Related : :ref:`Proxy <proxy>`, :ref:`Lazy Objects <lazy-objects>`, :ref:`Lazy Loading <lazy-loading>`, :ref:`Interface <interface>`, :ref:`Design Pattern <design-pattern>`

Related packages : `ocramius/proxy-manager <https://packagist.org/packages/ocramius/proxy-manager>`_

Added in PHP 8.4
