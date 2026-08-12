# Command Bus
A command bus is a design pattern used in software development, particularly in the context of Domain-Driven Design, DDD, and CQRS, Command Query Responsibility Segregation. It helps to decouple the sender of a command from its handler, allowing for better separation of concerns and improving the overall architecture of the application.

A command bus works together with commands and command handlers. 

Here's a simplified overview of how a command bus works:

+ The sender, e.g., a controller in a web application, creates a command object and sends it to the command bus
+ The command bus examines the command object and identifies the appropriate command handler based on the type of the command
+ The command bus dispatches the command to the identified command handler
+ The command handler processes the command and performs the required actions.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/command-bus.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/command-bus.html","name":"Command Bus","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:31:02 +0000","dateModified":"Sat, 08 Aug 2026 14:31:02 +0000","description":"A command bus is a design pattern used in software development, particularly in the context of Domain-Driven Design, DDD, and CQRS, Command Query Responsibility Segregation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Command Bus.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"command-bus"}]}]}</script>
**[Documentation](https://tactician.thephpleague.com/)**
## See Also

+ [What is a command bus and why should you use it?](https://barryvanveen.nl/articles/49-what-is-a-command-bus-and-why-should-you-use-it)
+ [Command Bus](https://laravel.com/docs/5.0/bus)

## Related

+ [Code Architecture](code-architecture.html)
+ [Command](command.html)
+ [Message Bus](message-bus.html)

## Related packages

+ [league/tactician](https://packagist.org/packages/league/tactician)
+ [simple-bus/message-bus](https://packagist.org/packages/simple-bus/message-bus)
+ [simple-bus/symfony-bridge](https://packagist.org/packages/simple-bus/symfony-bridge)
