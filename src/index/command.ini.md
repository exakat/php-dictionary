# Command
The Command design pattern encapsulates a request as an object, allowing it to be stored, queued, logged, or undone. A command object contains all the information needed to execute an action: the receiver, the method to call, and any parameters.

The Command pattern separates the object that invokes an operation from the object that knows how to perform it. It is widely used in:

+ CLI applications: each CLI command is an object with an ``execute()`` method.
+ CQRS architectures: write operations are represented as command objects dispatched through a command bus.
+ Undo/redo systems: commands store enough state to reverse their effect.
+ Task queues: serialized command objects are placed on a queue and processed asynchronously.

Symfony Console and Laravel Artisan both build on this pattern for their CLI command systems.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/command.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/command.ini.html","name":"Command","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 09:07:28 +0000","dateModified":"Fri, 17 Jul 2026 09:07:28 +0000","description":"The Command design pattern encapsulates a request as an object, allowing it to be stored, queued, logged, or undone","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Command.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    interface Command {
        public function execute(): void;
    }
    
    class CreateUserCommand implements Command {
        public function __construct(
            private string $email,
            private string $password,
        ) {}
    
        public function execute(): void {
            // Create user logic
            echo "Creating user: {$this->email}" . PHP_EOL;
        }
    }
    
    class CommandBus {
        public function dispatch(Command $command): void {
            $command->execute();
        }
    }
    
    $bus = new CommandBus();
    $bus->dispatch(new CreateUserCommand('user@example.com', 'secret'));

?>
```

**[Documentation](https://refactoring.guru/design-patterns/command)**
## See Also

+ [Command pattern - Wikipedia](https://en.wikipedia.org/wiki/Command_pattern)

## Related

+ [Command Bus](command-bus.ini.html)
+ [Command Query Responsibility Segregation (CQRS)](cqrs.ini.html)
+ [Design Pattern](design-pattern.ini.html)
+ [Command Line Interface (CLI)](cli.ini.html)
+ [Expression](expression.ini.html)
+ [Instruction](instruction.ini.html)
