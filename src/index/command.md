# Command
The Command design pattern encapsulates a request as an object, allowing it to be stored, queued, logged, or undone. A command object contains all the information needed to execute an action: the receiver, the method to call, and any parameters.

The Command pattern separates the object that invokes an operation from the object that knows how to perform it. It is widely used in:

+ CLI applications: each CLI command is an object with an ``execute()`` method.
+ CQRS architectures: write operations are represented as command objects dispatched through a command bus.
+ Undo/redo systems: commands store enough state to reverse their effect.
+ Task queues: serialized command objects are placed on a queue and processed asynchronously.

Symfony Console and Laravel Artisan both build on this pattern for their CLI command systems.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/command.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/command.html","name":"Command","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 09:07:28 +0000","dateModified":"Fri, 17 Jul 2026 09:07:28 +0000","description":"The Command design pattern encapsulates a request as an object, allowing it to be stored, queued, logged, or undone","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/command.html"]}],"alternateName":["command-pattern"],"keywords":["design pattern","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/command-bus.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cqrs.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/design-pattern.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cli.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/expression.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instruction.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/refactoring.guru\/design-patterns\/command"},{"@type":"CreativeWork","name":"Command pattern - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Command_pattern"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"command"}]}]}</script>
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

+ [Command Bus](command-bus.html)
+ [Command Query Responsibility Segregation (CQRS)](cqrs.html)
+ [Design Pattern](design-pattern.html)
+ [Command Line Interface (CLI)](cli.html)
+ [Expression](expression.html)
+ [Instruction](instruction.html)
