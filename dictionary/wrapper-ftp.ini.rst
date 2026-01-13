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
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"ftp:\/\/","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Nov 2025 17:54:00 +0000","dateModified":"Sun, 09 Nov 2025 17:54:00 +0000","description":"The ``ftp:\/\/`` wrapper is a native PHP wrapper, to access files on a remote ``FTP`` server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ftp:\/\/.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


ftp://
------

The ``ftp://`` wrapper is a native PHP wrapper, to access files on a remote ``FTP`` server. It handles both ``FTP`` and ``FTPS``.

.. code-block:: php
   
   <?php
   
   // display a distant file from a FTP server
   print_r(file_get_content('ftp://user:password@ftp.server.com:/pub/file.txt');
   
   ?>


`Documentation <https://www.php.net/manual/en/wrappers.ftp.php>`__

See also https://medium.com/@zoningxtr/mastering-php-wrappers-concepts-use-cases-and-security-risks-380bb59cb6c1

Related : :ref:`Wrapper <wrapper>`, :ref:`PHP Wrappers <php-wrapper>`
