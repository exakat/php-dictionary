.. _clock:
.. _psr-20:
.. meta::
	:description:
		Clock: A clock abstraction encapsulates the current time behind an interface, making code that depends on the current time testable with a controlled, deterministic value instead of the real system clock.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Clock
	:twitter:description: Clock: A clock abstraction encapsulates the current time behind an interface, making code that depends on the current time testable with a controlled, deterministic value instead of the real system clock
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Clock
	:og:type: article
	:og:description: A clock abstraction encapsulates the current time behind an interface, making code that depends on the current time testable with a controlled, deterministic value instead of the real system clock
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/clock.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Clock","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 28 Jun 2026 10:31:30 +0000","dateModified":"Sun, 28 Jun 2026 10:31:30 +0000","description":"A clock abstraction encapsulates the current time behind an interface, making code that depends on the current time testable with a controlled, deterministic value instead of the real system clock","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Clock.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Clock
-----

A clock abstraction encapsulates the current time behind an interface, making code that depends on the current time testable with a controlled, deterministic value instead of the real system clock.

PSR-20 standardizes this with ClockInterface, which exposes a single method: ``function now(): DateTimeImmutable``. Rather than calling new DateTimeImmutable() or time() directly, a ``ClockInterface`` is injected as a dependency, giving tests full control over the perceived time.

PHP 8.3 introduced the native ``DateTimeImmutable::createFromTimestamp()`` method for testing purposes.

.. code-block:: php
   
   <?php
   
       use Psr\Clock\ClockInterface;
       
       final class Scheduler {
           public function __construct(private readonly ClockInterface $clock) {}
       
           public function isExpired(DateTimeImmutable $expiresAt): bool {
               return $this->clock->now() > $expiresAt;
           }
       }
   
   ?>


`Documentation <https://www.php-fig.org/psr/psr-20/>`__

See also `PSR-20: Clock <https://www.php-fig.org/psr/psr-20/>`_ and `Testing Time-Sensitive Code in PHP <https://symfony.com/doc/current/components/clock.html>`_.

Related : :ref:`DateTime <datetime>`, :ref:`DateInterval <dateinterval>`, :ref:`PHP Standards Recommendations (PSR) <psr>`, :ref:`Dependency Injection <dependency-injection>`, :ref:`Test <test>`, :ref:`Immutable <immutable>`, :ref:`Interoperability <interoperability>`

Related packages : `psr/clock <https://packagist.org/packages/psr/clock>`_, `symfony/clock <https://packagist.org/packages/symfony/clock>`_
