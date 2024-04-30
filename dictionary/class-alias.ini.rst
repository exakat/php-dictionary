.. _class-alias:

Class Aliases
-------------

It is possible to make an alias of a class and call it with this new name. It either rely on the `use` expression, preferable at the beginning of the namespace, or the class_alias() function, for dynamic and application-wide aliases. 

`use` expressions are valid only in one file, while class_alias() impacts the whole application, once it is called. class_alias() may also be used with dynamic elements, such as variables.


.. code-block:: php
   
   <?php
   
   use a as b;
   
   class_alias('a', 'c');
   
   class a {
       function __construct() {
           print __CLASS__;
       }
   }
   
   new a;
   new b;
   new c;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.importing.php>`__

See also `PHP 8.3: class_alias() supports aliasing built-in PHP classes <https://php.watch/versions/8.3/class_alias-php-built-in-classes-supported>`_, `PHP Magic Methods and Class Aliases <https://alanastorm.com/php_magic_methods_and_class_aliases/>`_, `How to deprecate a type in php <https://dev.to/greg0ire/how-to-deprecate-a-type-in-php-48cf />`_

Related : :ref:`Use <use>`
