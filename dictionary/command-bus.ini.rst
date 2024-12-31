.. _command-bus:
.. meta::
	:description:
		Command Bus: A command bus is a design pattern used in software development, particularly in the context of Domain-Driven Design (DDD) and CQRS (Command Query Responsibility Segregation).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Command Bus
	:twitter:description: Command Bus: A command bus is a design pattern used in software development, particularly in the context of Domain-Driven Design (DDD) and CQRS (Command Query Responsibility Segregation)
	:twitter:creator: @exakat
	:og:title: Command Bus
	:og:type: article
	:og:description: A command bus is a design pattern used in software development, particularly in the context of Domain-Driven Design (DDD) and CQRS (Command Query Responsibility Segregation)
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/command-bus.ini.html
	:og:locale: en


Command Bus
-----------

A command bus is a design pattern used in software development, particularly in the context of Domain-Driven Design (DDD) and CQRS (Command Query Responsibility Segregation). It helps to decouple the sender of a command from its handler, allowing for better separation of concerns and improving the overall architecture of the application.

A command bus works together with commands and command handlers. 

Here's a simplified overview of how a command bus works:

+ The sender (e.g., a controller in a web application) creates a command object and sends it to the command bus.
+ The command bus examines the command object and identifies the appropriate command handler based on the type of the command.
+ The command bus dispatches the command to the identified command handler.
+ The command handler processes the command and performs the required actions (e.g., modifying the database, updating the domain model, etc.).



`What is a Command Bus?bb <https://tactician.thephpleague.com/>`_

See also `What is a command bus and why should you use it?  <https://barryvanveen.nl/articles/49-what-is-a-command-bus-and-why-should-you-use-it>`_, `Command Bus <https://laravel.com/docs/5.0/bus>`_

Related packages : `league/tactician <https://packagist.org/packages/league/tactician>`_, `simple-bus/message-bus <https://packagist.org/packages/simple-bus/message-bus>`_, `simple-bus/symfony-bridge <https://packagist.org/packages/simple-bus/symfony-bridge>`_
