.. _coupling:
.. meta::
	:description:
		Coupling: Coupling refers to the degree of dependency between different classes of a software.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Coupling
	:twitter:description: Coupling: Coupling refers to the degree of dependency between different classes of a software
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Coupling
	:og:type: article
	:og:description: Coupling refers to the degree of dependency between different classes of a software
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/coupling.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Coupling","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Coupling refers to the degree of dependency between different classes of a software","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Coupling.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Coupling
--------

Coupling refers to the degree of dependency between different classes of a software. It measures how interconnected or interdependent these classes are. There are several types of coupling, ranging from loose (good) to tight (undesirable). 

    Content Coupling: This is the strongest form of coupling, where one module directly accesses or modifies the internal data or methods of another class. It's considered the most undesirable type of coupling, as it makes the modules highly dependent on each other and difficult to change independently.

    Common Coupling: In this type, multiple modules share the same data or a common storage location. Changes to this shared data can impact multiple modules simultaneously, leading to potential issues in understanding and maintaining the codebase.

    External Coupling: This type of coupling occurs when two modules rely on the same external interface, such as a file, a database, or a communication protocol. Changes to the external interface can affect multiple modules, but at least the internal details remain separate.

    Control Coupling: Control coupling happens when one module passes control information (e.g., flags, status, or control variables) to another module. The receiving module behaves differently based on this information, introducing dependencies between them.

    Data Coupling: Data coupling is a better form of coupling compared to the above ones. It happens when two modules share data through parameters or arguments, but they do not directly access each other's internal data. It promotes encapsulation and makes it easier to maintain and understand the system.

    Message Coupling: In this type, modules communicate by passing messages, which can be in the form of method calls, function calls, or events. The modules don't need to know each other's internal details, and they interact based on well-defined interfaces.

    No Coupling (or Content Independence): The ideal type of coupling is no coupling at all, where modules are entirely independent of each other. Each module operates in isolation, and changes to one module do not affect others.

Software designers aim to achieve low coupling and high cohesion (a measure of how closely the elements within a module are related) in their systems to improve maintainability, reusability, and overall system design.

.. code-block:: php
   
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


`Documentation <https://en.wikipedia.org/wiki/Coupling_(computer_programming)>`__

See also `Dependencies and coupling <https://dev.to/franiglesias/dependencies-and-coupling-4365>`_
