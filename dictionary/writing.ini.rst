.. _writing:
.. meta::
	:description:
		Writing: Writing is the action to replace a value in a data container with another one.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Writing
	:twitter:description: Writing: Writing is the action to replace a value in a data container with another one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Writing
	:og:type: article
	:og:description: Writing is the action to replace a value in a data container with another one
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/writing.ini.html
	:og:locale: en


Writing
-------

Writing is the action to replace a value in a data container with another one. It does not need to be read. The value is simply changed.

Writing happens when a value is being assigned a new value, used with some operators such as ``++`` or ``--``. 

This operation is usually the counterpart of reading. It may also happen at the same time.

.. code-block:: php
   
   <?php
   
   $x = 1; // writing 1
   
   ++$x; // reading 1 and writing 2 
   
   echo $x; // reading 2
   
   ?>


Related : :ref:`Reading <reading>`
