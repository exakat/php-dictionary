.. _wrapper-ftps:
.. meta::
	:description:
		ftp://: The ``ftp://`` wrapper is a native PHP wrapper, to access files on a remote ``FTP`` server.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ftp://
	:twitter:description: ftp://: The ``ftp://`` wrapper is a native PHP wrapper, to access files on a remote ``FTP`` server
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: ftp://
	:og:type: article
	:og:description: The ``ftp://`` wrapper is a native PHP wrapper, to access files on a remote ``FTP`` server
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/wrapper-ftps.ini.html
	:og:locale: en


ftp://
------

The ``ftp://`` wrapper is a native PHP wrapper, to access files on a remote ``FTP`` server. It handles both ``FTP`` and ``FTPS``.

.. code-block:: php
   
   <?php
   
   // display a distant file from a FTP server
   print_r(file_get_content('ftp://user:password@ftp.server.com:/pub/file.txt');
   
   ?>


`Documentation <https://www.php.net/manual/en/wrappers.ftp.php>`__

Related : :ref:`Wrapper <wrapper>`, :ref:`PHP Wrappers <php-wrapper>`
