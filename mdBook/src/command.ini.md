# Command
The Command design pattern encapsulates a request as an object, allowing it to be stored, queued, logged, or undone. A command object contains all the information needed to execute an action: the receiver, the method to call, and any parameters.

The Command pattern separates the object that invokes an operation from the object that knows how to perform it. It is widely used in:

+ CLI applications: each CLI command is an object with an ``execute()`` method.
+ CQRS architectures: write operations are represented as command objects dispatched through a command bus.
+ Undo/redo systems: commands store enough state to reverse their effect.
+ Task queues: serialized command objects are placed on a queue and processed asynchronously.

Symfony Console and Laravel Artisan both build on this pattern for their CLI command systems.

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

## See Also

+ [Command pattern - Wikipedia](https://en.wikipedia.org/wiki/Command_pattern)

Related : [Command Bus](Command Bus), [Command Query Responsibility Segregation (CQRS)](Command Query Responsibility Segregation (CQRS)), [Design Pattern](Design Pattern), [Command Line Interface (CLI)](Command Line Interface (CLI)), [Expression](Expression), [Instruction](Instruction)
