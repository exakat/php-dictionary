# Command Bus
A command bus is a design pattern used in software development, particularly in the context of Domain-Driven Design, DDD, and CQRS, Command Query Responsibility Segregation. It helps to decouple the sender of a command from its handler, allowing for better separation of concerns and improving the overall architecture of the application.

A command bus works together with commands and command handlers. 

Here's a simplified overview of how a command bus works:

+ The sender, e.g., a controller in a web application, creates a command object and sends it to the command bus
+ The command bus examines the command object and identifies the appropriate command handler based on the type of the commandé
+ The command bus dispatches the command to the identified command handler
+ The command handler processes the command and performs the required actions.
## See Also

+ [What is a command bus and why should you use it?](https://barryvanveen.nl/articles/49-what-is-a-command-bus-and-why-should-you-use-it)
+ [Command Bus](https://laravel.com/docs/5.0/bus)

Related : [Code Architecture](Code Architecture), [Command](Command), [Message Bus](Message Bus)
