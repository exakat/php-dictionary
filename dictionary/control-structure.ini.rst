.. _control-structure:
.. meta::
	:description:
		Control Structures: Control structures are PHP statements that control the flow of execution.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Control Structures
	:twitter:description: Control Structures: Control structures are PHP statements that control the flow of execution
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Control Structures
	:og:type: article
	:og:description: Control structures are PHP statements that control the flow of execution
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/control-structure.ini.html
	:og:locale: en


Control Structures
------------------

Control structures are PHP statements that control the flow of execution. 

+ if / elseif / else if
+ while
+ do-while
+ for
+ foreach
+ break
+ continue
+ switch
+ match
+ declare
+ return
+ require()
+ include()
+ require_once()
+ include_once()
+ goto

Usually, instructions and commands are executed one after each other. With control structures, this flow is changed and the execution will go to another part of the code for its next step. For example, inside a loop, when PHP encounters a break command, it will then execute the next command after the loop, instead of the next command sequentially.


.. code-block:: php
   
   <?php
   
   if (rand(0, 1) > 0) {
       print 'Hello, world.';
   } else {
       print 'World : hello!';
   }
   ?>


`Documentation <https://www.php.net/manual/en/language.control-structures.php>`__
