.. _class-alias:

Class aliases
-------------

It is possible to make an alias of a class and call it with this new name. It either rely on the `use` expression, preferable at the beginning of the namespace, or the class_alias() function, for dynamic and application-wide aliases. 

`use` expressions are valid only in one file, while class_alias() impacts the whole application, once it is called. class_alias() may also be used with dynamic elements, such as variabless.


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

Related : :ref:`Use <use>`
