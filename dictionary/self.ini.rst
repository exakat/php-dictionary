.. _self:

Self
----

``self`` is one of the three special keywords that are used to access properties or methods from inside the class definition. It relates to the current written class.

``self`` is traditionally written lower-case, although it is case-insensitive. ``self`` is a PHP keyword.


.. code-block:: php
   
   <?php
   
   class X {
       private const X = 1;
       
       function foo() {
           // same as \X::C;
           return self::C;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php>`__

See also `PHP self Vs this <https://phppot.com/php/php-self-vs-this/>`_, `PHP $this Keyword <https://www.studytonight.com/php/php-this-keyword>`_

Related : :ref:`static <static>`, :ref:`parent <parent>`, :ref:`Keyword <keyword>`, :ref:`Late Static Binding <late-static-binding>`
