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

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coupling.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/coupling.html","name":"Coupling","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Coupling refers to the degree of dependency between different classes of a software","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Coupling.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"coupling"}]}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Coupling_(computer_programming))**
## See Also

+ [Dependencies and coupling](https://dev.to/franiglesias/dependencies-and-coupling-4365)

## Related

+ [Decoupling](decoupling.html)
+ [Dependency](dependency.html)
+ [Cohesion](cohesion.html)
+ [God Object](god-object.html)
+ [Program To Interface](program-to-interface.html)
+ [Separation Of Concerns](separation-of-concerns.html)
+ [Tech Island](tech-island.html)
+ [Tech Silo](tech-silo.html)
+ [Dependency Inversion (DIP)](dependency-inversion.html)
+ [Distributed Monolith](distributed-monolith.html)
+ [Fault Isolation](fault-isolation.html)
+ [Shared Database](shared-database.html)
