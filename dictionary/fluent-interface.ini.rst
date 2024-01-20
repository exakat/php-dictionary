.. _fluent-interface:
.. _fluent:

Fluent Interface
----------------

A fluent interface is an object-oriented API whose design relies extensively on method chaining.

A fluent interface is not related to an interface : it may be implemented without them. 


.. code-block:: php
   
   <?php
   
   class script {
       function hello() {
           print 'Hello ';
           return $this;
       }
   
       function word() {
           print 'word.';
           return $this;
       }
   }
   
   $script = new Script();
   
   $script->hello()->world();
   // 
   
   ?>


`Documentation <https://designpatternsphp.readthedocs.io/en/latest/Structural/FluentInterface/README.html>`__

See also `Fluent Interface <https://en.wikipedia.org/wiki/Fluent_interface>`_, `Fluent Interfaces Are Bad for Maintainability <https://news.ycombinator.com/item?id=16619171>`_, `Fluent Interfaces are Evil <https://ocramius.github.io/blog/fluent-interfaces-are-evil/>`_

Related : :ref:`Final Keyword <final>`, :ref:`Interfaces <interface>`
