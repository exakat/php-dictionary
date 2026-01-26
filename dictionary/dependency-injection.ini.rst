.. _dependency-injection:
.. _di:
.. _dip:
.. meta::
	:description:
		Dependency Injection: Dependency injection is a design pattern in which an object receives other objects that it depends on.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dependency Injection
	:twitter:description: Dependency Injection: Dependency injection is a design pattern in which an object receives other objects that it depends on
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dependency Injection
	:og:type: article
	:og:description: Dependency injection is a design pattern in which an object receives other objects that it depends on
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dependency-injection.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Dependency Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 11:11:34 +0000","dateModified":"Mon, 26 Jan 2026 11:11:34 +0000","description":"Dependency injection is a design pattern in which an object receives other objects that it depends on","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dependency Injection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dependency Injection
--------------------

Dependency injection is a design pattern in which an object receives other objects that it depends on.Dependency injection is a design pattern where an object receives its dependencies from external sources rather than creating them internally. This promotes loose coupling, easier testing, and greater flexibility in code maintenance. By injecting dependencies, developers can swap implementations more easily, making systems more modular and adaptable to change.

.. code-block:: php
   
   <?php
   
   class MyObject {
       function __construct(private readonly Connection $database) {}
       
       function load(int $id): self {
           return $this->connection->select($id);
       }
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Dependency_injection>`__

See also https://matthiasnoback.nl/2018/06/road-to-dependency-injection/, https://php-di.org/
