.. _proxy:
.. _proxy pattern:
.. _proxy class:
.. meta::
	:description:
		Proxy: A proxy class is a structural design pattern that provides a substitute or placeholder for another object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Proxy
	:twitter:description: Proxy: A proxy class is a structural design pattern that provides a substitute or placeholder for another object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Proxy
	:og:type: article
	:og:description: A proxy class is a structural design pattern that provides a substitute or placeholder for another object
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/proxy.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Proxy","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 21 May 2026 09:29:45 +0000","dateModified":"Thu, 21 May 2026 09:29:45 +0000","description":"A proxy class is a structural design pattern that provides a substitute or placeholder for another object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Proxy.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Proxy
-----

A proxy class is a structural design pattern that provides a substitute or placeholder for another object. The proxy controls access to the original object, allowing actions to be performed before or after the request reaches it.

A proxy implements the same interface as the real subject, so it can be used wherever the original object is expected. The actual object is stored inside the proxy, which delegates calls to it.

Common proxy types are: virtual proxy (lazy initialization, creating the real object only when needed), protection proxy (access control, checking permissions before delegating), logging proxy (recording operations for audit or debugging), and caching proxy (storing results to avoid repeated work).

In PHP, proxy classes are often built using magic methods such as ``__call()``, ``__get()``, and ``__set()`` to intercept and forward access transparently. PHP 8.4 also introduced native lazy objects in the engine, which implement the virtual proxy pattern at the language level.

.. code-block:: php
   
   <?php
   
   interface UserRepository {
       public function find(int $id): array;
   }
   
   class RealUserRepository implements UserRepository {
       public function find(int $id): array {
           // expensive database call
           return ['id' => $id, 'name' => 'Alice'];
       }
   }
   
   class CachingUserRepositoryProxy implements UserRepository {
       private array $cache = [];
   
       public function __construct(private UserRepository $real) {}
   
       public function find(int $id): array {
           if (!isset($this->cache[$id])) {
               $this->cache[$id] = $this->real->find($id);
           }
   
           return $this->cache[$id];
       }
   }
   
   $repo = new CachingUserRepositoryProxy(new RealUserRepository());
   $user = $repo->find(1); // hits the database
   $user = $repo->find(1); // served from cache
   
   ?>


`Documentation <https://refactoring.guru/design-patterns/proxy/php/example>`__

See also `Proxy in PHP <https://refactoring.guru/design-patterns/proxy/php/example>`_, `PHP: The Right Way — Design Patterns <https://phptherightway.com/pages/Design-Patterns.html>`_ and `Revisiting Lazy-Loading Proxies in PHP <https://nicolas-grekas.medium.com/revisiting-lazy-loading-proxies-in-php-ef813eabeb67>`_.

Related : :ref:`Lazy Loading <lazy-loading>`, :ref:`Lazy Objects <lazy-objects>`, :ref:`Interface <interface>`, :ref:`__call() Method <-__call>`

Related packages : `ocramius/proxy-manager <https://packagist.org/packages/ocramius/proxy-manager>`_
