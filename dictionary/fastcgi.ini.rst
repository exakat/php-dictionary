.. _fastcgi:
.. meta::
	:description:
		FastCGI: FastCGI stands for Fast Common Gateway Interface.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: FastCGI
	:twitter:description: FastCGI: FastCGI stands for Fast Common Gateway Interface
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: FastCGI
	:og:type: article
	:og:description: FastCGI stands for Fast Common Gateway Interface
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fastcgi.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"FastCGI","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"FastCGI stands for Fast Common Gateway Interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/FastCGI.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


FastCGI
-------

FastCGI stands for Fast Common Gateway Interface. It is a protocol, built on top of CGI. Unlike CGI, FastCGI has persistent processes that can handle more than one request before being destroyed. It also implements multiplexing.

PHP may be build as a fast CGI, in the php-fpm demon.

`Documentation <https://www.php.net/manual/en/install.fpm.php>`__

Related : :ref:`FastCGI Process Manager (FPM) <fpm>`, :ref:`Common Gateway Interface (CGI) <cgi>`, :ref:`Command Line Interface (CLI) <cli>`
