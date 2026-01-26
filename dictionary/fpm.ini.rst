.. _fpm:
.. _php-fpm:
.. meta::
	:description:
		FastCGI Process Manager (FPM): FPM stands for FastCGI Process Manager.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: FastCGI Process Manager (FPM)
	:twitter:description: FastCGI Process Manager (FPM): FPM stands for FastCGI Process Manager
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: FastCGI Process Manager (FPM)
	:og:type: article
	:og:description: FPM stands for FastCGI Process Manager
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fpm.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"FastCGI Process Manager (FPM)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 13:49:04 +0000","dateModified":"Mon, 26 Jan 2026 13:49:04 +0000","description":"FPM stands for FastCGI Process Manager","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/FastCGI Process Manager (FPM).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


FastCGI Process Manager (FPM)
-----------------------------

FPM stands for FastCGI Process Manager. It is a PHP FastCGI implementation.

Instead of nesting PHP in the web server, php-fpm makes PHP a server by itself. The web server then delegates the work to the PHP server. The advantage is to lower the memory footprint of PHP and the web server, and the whole of them both. It helps with stability, by keeping the two processes separated.

`Documentation <https://www.php.net/manual/en/install.fpm.php>`__

See also https://www.plesk.com/blog/various/why-do-you-need-php-fpm/, https://www.digitalocean.com/community/tutorials/php-fpm-nginx, https://docs.cpanel.net/knowledge-base/php-fpm/php-fastcgi-process-manager-php-fpm/

Related : :ref:`Common Interface Gateway (CGI) <cgi>`
