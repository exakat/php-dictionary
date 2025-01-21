.. _wrapper-file:
.. meta::
	:description:
		file://: The ``file://`` wrapper is a native PHP wrapper, to access files on a local files, on the host system.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: file://
	:twitter:description: file://: The ``file://`` wrapper is a native PHP wrapper, to access files on a local files, on the host system
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: file://
	:og:type: article
	:og:description: The ``file://`` wrapper is a native PHP wrapper, to access files on a local files, on the host system
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/wrapper-file.ini.html
	:og:locale: en


file://
-------

The ``file://`` wrapper is a native PHP wrapper, to access files on a local files, on the host system.

It may also be omitted, as the default behavior is to read files on the local system.


.. code-block:: php
   
   <?php
   
   // display the content of a file
   print_r(file_get_content('file:///tmp/file.txt);
   
   // also possible
   print_r(file_get_content('/tmp/file.txt);
   
   ?>


`Documentation <https://www.php.net/manual/en/wrappers.file.php>`__

Related : :ref:`Wrapper <wrapper>`, :ref:`PHP Wrappers <php-wrapper>`
