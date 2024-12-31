.. _system-call:
.. meta::
	:description:
		System Call: A system call is a call to an operating system function.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: System Call
	:twitter:description: System Call: A system call is a call to an operating system function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: System Call
	:og:type: article
	:og:description: A system call is a call to an operating system function
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/system-call.ini.html
	:og:locale: en


System Call
-----------

A system call is a call to an operating system function. In PHP, those are done with the shell_exec(), system() and exec() functions; and the `` (back tick) operators.


.. code-block:: php
   
   <?php
   
   // list files
   $list = shell_exec('ls -1');
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/System_call>`__
