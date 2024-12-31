.. _while:
.. meta::
	:description:
		While: While is a loop structure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: While
	:twitter:description: While: While is a loop structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: While
	:og:type: article
	:og:description: While is a loop structure
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/while.ini.html
	:og:locale: en


While
-----

While is a loop structure. It runs the block of code until the condition is not met anymore. 

Part of the loop execution may be skipped by using the ``continue`` keyword.

.. code-block:: php
   
   <?php
   
   /*
   while(condition) {
   	// the block
   }
   */
   
   $i = 0;
   while($i < 10) {
   	print "$i\n";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.while.php>`__

See also `While Loop in PHP <https://www.scaler.com/topics/php-tutorial/while-loop-in-php/>`_

Related : :ref:`Continue <continue>`, :ref:`Do...while <dowhile>`, :ref:`Foreach <foreach>`, :ref:`Loops <loop>`, :ref:`For <for>`
