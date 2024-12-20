.. _body:

Body
----

The body, of a function or a command, it the related block that is commanded by the the command. It is often enclosed in curly brackets ``{  }``, as for function or ``switch``, but sometimes optional, as for ``foreach`` or ``ifthen``.

The body is omitted in a method, when the method is ``abstract``. Since an abstract method is only its signature, the body is replaced by a semi colon ``;``.


.. code-block:: php
   
   <?php
   
   abstract class X {
       function foo() {
           // This block is the body
       }
   
       // No body for an abstract method
       abstract function goo();
   }
   
   ?>


Related : :ref:`Block <block>`
