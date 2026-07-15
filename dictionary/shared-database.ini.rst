.. _shared-database:
.. _shared-database-anti-pattern:
.. _shared-database-integration:
.. meta::
	:description:
		Shared Database: The shared database pattern, and more commonly, the shared database anti-pattern, describes multiple services or applications reading from and writing to the same database schema.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Shared Database
	:twitter:description: Shared Database: The shared database pattern, and more commonly, the shared database anti-pattern, describes multiple services or applications reading from and writing to the same database schema
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Shared Database
	:og:type: article
	:og:description: The shared database pattern, and more commonly, the shared database anti-pattern, describes multiple services or applications reading from and writing to the same database schema
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/shared-database.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/shared-database.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/shared-database.ini.html","name":"Shared Database","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:24:00 +0000","dateModified":"Mon, 06 Jul 2026 10:24:00 +0000","description":"The shared database pattern, and more commonly, the shared database anti-pattern, describes multiple services or applications reading from and writing to the same database schema","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Shared Database.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Shared Database
---------------

The shared database pattern, and more commonly, the shared database anti-pattern, describes multiple services or applications reading from and writing to the same database schema.

In a monolithic application, a shared database is natural and appropriate. In a microservices architecture, it is an anti-pattern: it creates tight coupling between services at the data layer. A schema change, such as renaming a column, changing a data type, splitting a table, in one service can silently break another, even with no API change. Services cannot be deployed or scaled independently when they share schema.

The alternative is the database-per-service pattern: each service owns its data exclusively, and other services access it only through the service's API or via events. This decouples the services at the data level, enabling independent schema evolution.

The shared database pattern is sometimes intentionally used during a monolith-to-microservices migration as a transitional step, but should be eliminated progressively.

.. code-block:: php
   
   <?php
   
       // Anti-pattern: two services query the same 'orders' table directly
       
       // OrderService writes
       $pdo->exec('INSERT INTO orders (user_id, total) VALUES (1, 9900)');
       
       // ShippingService reads — tightly coupled to OrderService's schema
       $rows = $pdo->query('SELECT id, user_id, total FROM orders WHERE shipped = 0')->fetchAll();
       // A rename of 'total' to 'amount' in OrderService silently breaks ShippingService.
       
       // Correct approach: ShippingService calls the OrderService API or subscribes to events
       $orders = $httpClient->get('http://order-service/orders?shipped=false');
       // OR
       $event = new OrderPlaced($orderId, $total); // ShippingService listens for this event
   
   ?>


`Documentation <https://microservices.io/patterns/data/shared-database.html>`__

Related : :ref:`Distributed Monolith <distributed-monolith>`, :ref:`Microservice <microservice>`, :ref:`Database <database>`, :ref:`Coupling <coupling>`, :ref:`Domain Design Driven (DDD) <ddd>`, :ref:`Event Driven <event-driven>`
