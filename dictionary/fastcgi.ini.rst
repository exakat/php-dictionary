.. _fastcgi:

FastCGI
-------

CGI stands for fast CGI, so fast Common Interface Gateway. It is a protocol, built on top of CGI. Unlike CGI, fastCGI has persistent processes that can handle more than one request before being destroyed. It also implements multiplexing.

PHP may be build as a fast CGI, in the php-fpm demon. 

`Documentation <https://www.php.net/manual/en/install.fpm.php>`__

Related : :ref:`PHP-FPM <fpm>`, :ref:`FastCGI <fastcgi>`, :ref:`Command Line Interface <cli>`
