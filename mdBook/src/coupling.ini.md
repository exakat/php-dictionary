# Coupling
Coupling refers to the degree of dependency between different classes of a software. It measures how interconnected or interdependent these classes are. There are several types of coupling, ranging from loose to tight. 

+ Content Coupling: this is the strongest form of coupling, where one module directly accesses or modifies the internal data or methods of another class. It's considered the most undesirable type of coupling, as it makes the modules highly dependent on each other and difficult to change independently.
+ Common Coupling: in this type, multiple modules share the same data or a common storage location. Changes to this shared data can impact multiple modules simultaneously, leading to potential issues in understanding and maintaining the codebase.
+ External Coupling: this type of coupling occurs when two modules rely on the same external interface, such as a file, a database, or a communication protocol. Changes to the external interface can affect multiple modules, but at least the internal details remain separate.
+ Control Coupling: control coupling happens when one module passes control information, e.g., flags, status, or control variables to another module. The receiving module behaves differently based on this information, introducing dependencies between them.
+ Data Coupling: data coupling is a better form of coupling compared to the above ones. It happens when two modules share data through parameters or arguments, but they do not directly access each other's internal data. It promotes encapsulation and makes it easier to maintain and understand the system.
+ Message Coupling: in this type, modules communicate by passing messages, which can be in the form of method calls, function calls, or events. The modules don't need to know each other's internal details, and they interact based on well-defined interfaces.
+ No Coupling or Content Independence: the ideal type of coupling is no coupling at all, where modules are entirely independent of each other. Each module operates in isolation, and changes to one module do not affect others

Software designers aim to achieve low coupling and high cohesion in their systems to improve maintainability, reusability, and overall system design.

The opposite of coupling is decoupling.

```php
<?php

// User class with high coupling (Content Coupling)
class User {
    private $username;
    private $email;

    public function __construct($username, $email) {
        $this->username = $username;
        $this->email = $email;
    }

    // Content coupling: EmailSender is directly accessed here
    public function register() {
        // Register the user in the database

        // Send a welcome email
        $emailSender = new EmailSender();
        $emailSender->sendWelcomeEmail($this->username, $this->email);
    }
}

?>
```

## See Also

+ [Dependencies and coupling](https://dev.to/franiglesias/dependencies-and-coupling-4365)

Related : [Decoupling](Decoupling), [Dependency](Dependency), [Cohesion](Cohesion), [God Object](God Object), [Program To Interface](Program To Interface), [Separation Of Concerns](Separation Of Concerns), [Tech Island](Tech Island), [Tech Silo](Tech Silo), [Dependency Inversion (DIP)](Dependency Inversion (DIP)), [Distributed Monolith](Distributed Monolith), [Fault Isolation](Fault Isolation), [Shared Database](Shared Database)
