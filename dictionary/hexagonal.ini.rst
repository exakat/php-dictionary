.. _hexagonal:
.. _hexagonal-architecture:
.. meta::
	:description:
		Hexagonal Architecture: Hexagonal architecture, also known as Ports and Adapters architecture or the Onion architecture, is a software architectural pattern that promotes the separation of concerns and emphasizes modularity and flexibility.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Hexagonal Architecture
	:twitter:description: Hexagonal Architecture: Hexagonal architecture, also known as Ports and Adapters architecture or the Onion architecture, is a software architectural pattern that promotes the separation of concerns and emphasizes modularity and flexibility
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Hexagonal Architecture
	:og:type: article
	:og:description: Hexagonal architecture, also known as Ports and Adapters architecture or the Onion architecture, is a software architectural pattern that promotes the separation of concerns and emphasizes modularity and flexibility
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hexagonal.ini.html
	:og:locale: en


Hexagonal Architecture
----------------------

Hexagonal architecture, also known as Ports and Adapters architecture or the Onion architecture, is a software architectural pattern that promotes the separation of concerns and emphasizes modularity and flexibility. It was introduced by Alistair Cockburn in 2005 as a way to address the challenges of building maintainable and testable software systems.

In hexagonal architecture, the core principle is the isolation of the application's business logic from external dependencies such as databases, frameworks, user interfaces, and external services. The architecture consists of three main components:

    Core/Application Layer: This layer represents the business logic or the application's core functionality. It encapsulates the use cases and domain models that define the behavior of the system. The core does not depend on any specific technologies or external systems.

    Ports and Adapters: This layer acts as a boundary between the application and its external dependencies. It consists of two types of components:
    
    Ports: These are interfaces or contracts that define the interaction between the core/application layer and the external systems. They provide a way for the core to communicate its needs and receive data or trigger actions.
    
    Adapters: These are the implementations of the ports, connecting the core with the external systems. Adapters translate the core's requests into a format that external systems can understand and vice versa. They handle the technical details of communication, such as data persistence, network protocols, or user interface rendering.

    External Systems: This layer includes databases, frameworks, user interfaces, messaging systems, or any other external dependencies. The core does not have direct knowledge of these systems. Instead, it communicates through the defined ports and relies on the adapters to interact with them.

The hexagonal architecture promotes loose coupling, which makes the system more maintainable, testable, and adaptable to changes. It allows for easier swapping of external dependencies or modifying user interfaces without affecting the core business logic. The separation of concerns and clear boundaries between layers also make the system easier to understand and reason about.

`Documentation <https://en.wikipedia.org/wiki/Hexagonal_architecture_(software)>`__

See also `Hexagonal Architecture in PHP <https://www.developers.nl/blog/35/hexagonal-architecture-in-php>`_

Related : :ref:`Adapters <adapter>`

Related packages : `pccomponentes/ddd <https://packagist.org/packages/pccomponentes/ddd>`_
