.. _exit:
.. _die:
.. meta::
	:description:
		Exit: Exit and dies terminates the current process.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Exit
	:twitter:description: Exit: Exit and dies terminates the current process
	:twitter:creator: @exakat
	:og:title: Exit
	:og:type: article
	:og:description: Exit and dies terminates the current process
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/exit.ini.html
	:og:locale: en


Exit
----

Exit and dies terminates the current process. 

exit is a language construct. 

shutdown functions and constructor are still executed after a call to exit.


.. code-block:: php
   
   <?php
   
   class x {
       final const X = 1;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.constants.php>`__

See also `PHP | exit( ) Function <https://www.geeksforgeeks.org/php-exit-function/>`_

Related : :ref:`Language Construct <language-construct>`, :ref:`Shutdown Function <shutdown-function>`, :ref:`Destructor <destructor>`

Added in PHP 8.1
