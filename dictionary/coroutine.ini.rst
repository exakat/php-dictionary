.. _coroutine:
.. meta::
	:description:
		Coroutine: Coroutines are methods whose execution may be suspended and resumed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Coroutine
	:twitter:description: Coroutine: Coroutines are methods whose execution may be suspended and resumed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Coroutine
	:og:type: article
	:og:description: Coroutines are methods whose execution may be suspended and resumed
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/coroutine.ini.html
	:og:locale: en


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
