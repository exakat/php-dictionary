.. _fastcgi:
.. meta::
	:description:
		FastCGI: CGI stands for fast CGI, so fast Common Interface Gateway.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: FastCGI
	:twitter:description: FastCGI: CGI stands for fast CGI, so fast Common Interface Gateway
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: FastCGI
	:og:type: article
	:og:description: CGI stands for fast CGI, so fast Common Interface Gateway
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fastcgi.ini.html
	:og:locale: en


FastCGI
-------

CGI stands for fast CGI, so fast Common Interface Gateway. It is a protocol, built on top of CGI. Unlike CGI, fastCGI has persistent processes that can handle more than one request before being destroyed. It also implements multiplexing.

PHP may be build as a fast CGI, in the php-fpm demon. 

`Documentation <https://www.php.net/manual/en/install.fpm.php>`__

Related : :ref:`PHP-FPM (FPM) <fpm>`, :ref:`Common Interface Gateway (CGI) <cgi>`, :ref:`Command Line Interface (CLI) <cli>`
