.. _snapshot:
.. meta::
	:description:
		Snapshot: A snapshot captures the complete state of an object or aggregate at a specific point in time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Snapshot
	:twitter:description: Snapshot: A snapshot captures the complete state of an object or aggregate at a specific point in time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Snapshot
	:og:type: article
	:og:description: A snapshot captures the complete state of an object or aggregate at a specific point in time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/snapshot.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Snapshot","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:32:06 +0000","dateModified":"Thu, 28 May 2026 06:32:06 +0000","description":"A snapshot captures the complete state of an object or aggregate at a specific point in time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Snapshot.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Snapshot
--------

A snapshot captures the complete state of an object or aggregate at a specific point in time. It is commonly used as an optimization in event-sourced systems: instead of replaying the full event history to rebuild an aggregate, the system loads the latest snapshot and only replays events that occurred after it.

In testing, snapshot testing serializes the output of a component on the first run and stores it as a reference. Subsequent runs compare against this stored value, automatically detecting unintended changes to rendered output or computed results.

The Memento design pattern is the classical OOP formalization of the snapshot concept.

.. code-block:: php
   
   <?php
   
   final class OrderSnapshot {
       public function __construct(
           public readonly string            $orderId,
           public readonly OrderStatus       $status,
           public readonly DateTimeImmutable $at,
           public readonly int               $lastEventSequence,
       ) {}
   }
   
   ?>


See also `Snapshotting in Event Sourcing <https://event-driven.io/en/how_to_do_snapshots_in_event_sourcing/>`_ and `Spatie Snapshot Testing <https://github.com/spatie/pest-plugin-snapshots>`_.

Related : :ref:`Event Sourcing <event-sourcing>`, :ref:`Immutable <immutable>`, :ref:`Serialization <serialization>`, :ref:`Test <test>`, :ref:`Design Pattern <design-pattern>`, :ref:`Object Persistence <object-persistence>`, :ref:`Domain Design Driven (DDD) <ddd>`

Related packages : `spatie/pest-plugin-snapshots <https://packagist.org/packages/spatie/pest-plugin-snapshots>`_
