.. _file-mode:
.. meta::
	:description:
		File Mode: The file mode is the configuration of the pointer when accessing to the file.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: File Mode
	:twitter:description: File Mode: The file mode is the configuration of the pointer when accessing to the file
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: File Mode
	:og:type: article
	:og:description: The file mode is the configuration of the pointer when accessing to the file
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/file-mode.ini.html
	:og:locale: en


File Mode
---------

The file mode is the configuration of the pointer when accessing to the file. 

In the example above, ``w+`` indicates that the file is open for writing and reading, and place the pointer at the beginning of the file.

There are several valid modes: 'r', 'r+', 'w', 'w+', 'a', 'a+', 'x', 'x+', 'c', 'c+', 'e'. Check docs for details about them.


.. code-block:: php
   
   <?php
   
   $fp = fopen($file, 'w+');
   
   ?>


`Documentation <https://www.php.net/manual/fr/function.fopen.php>`__

See also https://www.php.net/manual/en/function.fopen.php
