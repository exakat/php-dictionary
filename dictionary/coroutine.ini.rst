.. _coroutine:

Coroutine
---------

Coroutines are methods whose execution may be suspended and resumed. 

PHP generators a sort of subroutines.

swoole, openswoole and fibers extensions offer coroutines.


.. code-block:: php
   
   
   <?php
   
   // Example from OpenSwoole (https://openswoole.com/docs/modules/swoole-coroutine)
   Co\run(function()
   {
       go(function()
       {
           Co::sleep(1);
           echo "Done 1\n";
       });
   
       go(function()
       {
           Co::sleep(1);
           echo "Done 2\n";
       });
   });
   ?>
   


`Documentation <https://en.wikipedia.org/wiki/Coroutine>`__

See also `Coroutine in PHP <https://openswoole.com/coroutine>`_

Related : :ref:`Generator <generator>`

Related packages : `swow/swow <https://packagist.org/packages/swow/swow>`_, `swlib/saber <https://packagist.org/packages/swlib/saber>`_, `amphp/amp <https://packagist.org/packages/amphp/amp>`_
