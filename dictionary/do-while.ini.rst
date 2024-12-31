.. _do-while:
.. meta::
	:description:
		Do While: Do While is a loop structure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Do While
	:twitter:description: Do While: Do While is a loop structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Do While
	:og:type: article
	:og:description: Do While is a loop structure
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/do-while.ini.html
	:og:locale: en


Do While
--------

Do While is a loop structure. It runs the block of code until the condition is not met anymore. The block is run once before the condition is checked, so it is always run at least once.

Part of the block execution may be skipped by using the `continue` keyword. 

 

.. code-block:: php
   
   <?php
   
   /*
   do {
   	// the block
   } while(condition);
   */
   
   $i = 1;
   do {
   	print "$i\n";
   } while($i < 10);
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.do.while.php>`__

Related : :ref:`Continue <continue>`, :ref:`Foreach <foreach>`, :ref:`Loops <loop>`, :ref:`For <for>`, :ref:`While <while>`
