.. _pcntl:

Process Control (pcntl)
-----------------------

Process Control is a set of native PHP function, that handles signals coming from the OS. 

``pcntl`` is suited for CLI operations, and not for web serving operations. 

``pcntl`` manage process creation, program execution, signal handling and process termination. 

.. code-block:: php
   
   <?php
   
   $pid = pcntl_fork();
   if ($pid == -1) {
        die('could not fork');
   } else if ($pid) {
        // we are the parent
        pcntl_wait($status); //Protect against Zombie children
   } else {
        // we are the child
   }
   
   ?>
   


`Documentation <https://www.php.net/manual/en/book.pcntl.php>`__

See also `Example: Parallel processing in PHP using pcntl_fork()  <https://gist.github.com/nicksantamaria/21dce5ff2a6640cdff76ce7bc57d2981>`_

Related : :ref:`PHP Handlers <handler>`, :ref:`Shell <shell>`, :ref:`System Event <system-event>`
