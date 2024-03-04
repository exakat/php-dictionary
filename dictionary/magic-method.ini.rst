.. _magic-method:
.. _magicmethod:

Magic Methods
-------------

Special methods, which provide extended support for PHP features.

The magic methods are  : __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __toString(), __invoke(), __set_state(), __clone() and __debugInfo().

The constructor and destructors are not considered as magic methods, even though they are reserved. 



.. code-block:: php
   
   <?php
   
   class x {
       //
       function __get($name) {
           return $this->$name;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.constants.magic.php>`__

See also `What are magic methods in PHP? and How to Implement them? <https://www.edureka.co/blog/magic-methods-in-php>`_, `PHP Magic Methods Explained <https://atakde.medium.com/php-magic-methods-explained-bac7053c007d>`_

Related : :ref:`__get() method <-__get>`, :ref:`__set() method <-__set>`, :ref:`__call() Method <-__call>`, :ref:`__isset() method <-__isset>`, :ref:`__clone() method <-__clone>`, :ref:`__callStatic() method <-__callStatic>`, :ref:`__isset() method <-__isset>`, :ref:`__sleep() method <-__sleep>`, :ref:`__wakeup() method <-__wakeup>`, :ref:`__toString() Method <-__tostring>`, :ref:`__invoke() method <-__invoke>`, :ref:`__set_state() method <-__set_state>`
