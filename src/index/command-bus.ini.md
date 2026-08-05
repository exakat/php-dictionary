# Command Bus
A command bus is a design pattern used in software development, particularly in the context of Domain-Driven Design, DDD, and CQRS, Command Query Responsibility Segregation. It helps to decouple the sender of a command from its handler, allowing for better separation of concerns and improving the overall architecture of the application.

A command bus works together with commands and command handlers. 

Here's a simplified overview of how a command bus works:

+ The sender, e.g., a controller in a web application, creates a command object and sends it to the command bus
+ The command bus examines the command object and identifies the appropriate command handler based on the type of the commandé
+ The command bus dispatches the command to the identified command handler
+ The command handler processes the command and performs the required actions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/command-bus.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/command-bus.ini.html","name":"Command Bus","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 17:01:01 +0000","dateModified":"Mon, 20 Jul 2026 17:01:01 +0000","description":"A command bus is a design pattern used in software development, particularly in the context of Domain-Driven Design, DDD, and CQRS, Command Query Responsibility Segregation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Command Bus.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://tactician.thephpleague.com/)**
## See Also

+ [What is a command bus and why should you use it?](https://barryvanveen.nl/articles/49-what-is-a-command-bus-and-why-should-you-use-it)
+ [Command Bus](https://laravel.com/docs/5.0/bus)

## Related

+ [Code Architecture](code-architecture.ini.html)
+ [Command](command.ini.html)
+ [Message Bus](message-bus.ini.html)

## Related packages

+ [league/tactician](https://packagist.org/packages/league/tactician)
+ [simple-bus/message-bus](https://packagist.org/packages/simple-bus/message-bus)
+ [simple-bus/symfony-bridge](https://packagist.org/packages/simple-bus/symfony-bridge)
