.. _stdout:
.. _standard-output:
.. meta::
	:description:
		STDOUT: stdout refers to the standard output stream.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: STDOUT
	:twitter:description: STDOUT: stdout refers to the standard output stream
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: STDOUT
	:og:type: article
	:og:description: stdout refers to the standard output stream
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/stdout.ini.html
	:og:locale: en


STDOUT
------

stdout refers to the standard output stream. It is a common term used in programming to represent the destination for standard output data. 

Native PHP functions echo and print typically send their argument to the standard output stream.

The standard output stream is explicitly available with the constant ``STDOUT``. This is a writeonly stream. 

The standard output is also available via the protocol ``php``, with the special URI ``stdout``. This is a writeonly stream. 


.. code-block:: php
   
   <?php
   
   // implicitely write to the standard output
   echo 'Hello world';
   
   // explicitely write to the standard output
   fwrite(STDOUT, 'Hello world');
   
   // explicitely write to the standard output
   $fp = fopen('php://stdout', 'w');
   fwrite($fp, 'Hello world');
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.constants.php>`__

See also `PHP Protocol <https://www.php.net/manual/en/wrappers.php.php>`_
