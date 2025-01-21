.. _wrapper-https:
.. meta::
	:description:
		http://: The ``http://`` wrapper is a native PHP wrapper, to access files on a remote ``HTTP`` web server.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: http://
	:twitter:description: http://: The ``http://`` wrapper is a native PHP wrapper, to access files on a remote ``HTTP`` web server
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: http://
	:og:type: article
	:og:description: The ``http://`` wrapper is a native PHP wrapper, to access files on a remote ``HTTP`` web server
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/wrapper-https.ini.html
	:og:locale: en


http://
-------

The ``http://`` wrapper is a native PHP wrapper, to access files on a remote ``HTTP`` web server. It handles both ``HTTP`` and ``HTTPS``.

.. code-block:: php
   
   <?php
   
   // display the raw incoming data
   print_r(file_get_content('https://www.php.net/');
   
   ?>


`Documentation <https://www.php.net/manual/en/wrappers.ftp.php>`__

Related : :ref:`Wrapper <wrapper>`, :ref:`PHP Wrappers <php-wrapper>`
