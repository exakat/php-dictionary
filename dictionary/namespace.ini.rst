.. _namespace:

Namespaces
----------

In PHP, namespaces are a way to encapsulate items like classes, interfaces, enumerations, traits, functions, and constants, preventing naming conflicts between different parts of a program. They help organize and structure code, especially in larger projects where multiple developers may be contributing.


.. code-block:: php
   
   <?php
   
   namespace a {
       class x {
       }
   }
   
   namespace b {
       // a second class x, although distinct from the previous one
       class x {
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.rationale.php>`__

See also `Understanding PHP Namespaces: Organising Your Code <https://medium.com/@bluznierca1/understanding-php-namespaces-organising-your-code-ba2590c5e529>`_

Related : :ref:`Use Alias <use-alias>`, :ref:`Fully Qualified Name <fully-qualified-name>`

Added in PHP 5.3
