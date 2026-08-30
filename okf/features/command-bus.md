---
type: "concept"
title: "Command Bus"
description: "A command bus is a design pattern used in software development, particularly in the context of Domain-Driven Design, DDD, and CQRS, Command Query Responsibility Segregation."
resource: "https://tactician.thephpleague.com/"
tags: ["design pattern", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Command Bus

A command bus is a design pattern used in software development, particularly in the context of Domain-Driven Design, DDD, and CQRS, Command Query Responsibility Segregation. It helps to decouple the sender of a command from its handler, allowing for better separation of concerns and improving the overall architecture of the application.

A command bus works together with commands and command handlers. 

Here's a simplified overview of how a command bus works:

+ The sender, e.g., a controller in a web application, creates a command object and sends it to the command bus
+ The command bus examines the command object and identifies the appropriate command handler based on the type of the command
+ The command bus dispatches the command to the identified command handler
+ The command handler processes the command and performs the required actions.

## Documentation
- [https://tactician.thephpleague.com/](https://tactician.thephpleague.com/)

## See Also
- [What is a command bus and why should you use it?](https://barryvanveen.nl/articles/49-what-is-a-command-bus-and-why-should-you-use-it)
- [Command Bus](https://laravel.com/docs/5.0/bus)

## Related
- [Code Architecture](/features/code-architecture.md)
- [Command](/features/command.md)
- [Message Bus](/features/message-bus.md)

## Details
- Packagist: [league/tactician](https://packagist.org/packages/league/tactician)
- Packagist: [simple-bus/message-bus](https://packagist.org/packages/simple-bus/message-bus)
- Packagist: [simple-bus/symfony-bridge](https://packagist.org/packages/simple-bus/symfony-bridge)

