.. _wrapper-php:
.. meta::
	:description:
		php://: The ``php://`` wrapper is a native PHP wrapper, to access ``stdin``, ``stdout`` and ``stderr``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: php://
	:twitter:description: php://: The ``php://`` wrapper is a native PHP wrapper, to access ``stdin``, ``stdout`` and ``stderr``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: php://
	:og:type: article
	:og:description: The ``php://`` wrapper is a native PHP wrapper, to access ``stdin``, ``stdout`` and ``stderr``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/wrapper-php.ini.html
	:og:locale: en


php://
------

The ``php://`` wrapper is a native PHP wrapper, to access ``stdin``, ``stdout`` and ``stderr``. These are the incoming, outgoing and error streams of the executed PHP code.

.. code-block:: php
   
   <?php
   
   // display the raw incoming data
   print_r(file_get_content('php://stdin');
   
   ?>


`Documentation <https://www.php.net/manual/en/class.streamwrapper.php>`__

Related : :ref:`Wrapper <wrapper>`, :ref:`PHP Wrappers <php-wrapper>`
