.. _browscap:
.. meta::
	:description:
		browscap: Browscap is a browser capabilities project that provides a database and API for determining the capabilities of a web browser.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: browscap
	:twitter:description: browscap: Browscap is a browser capabilities project that provides a database and API for determining the capabilities of a web browser
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: browscap
	:og:type: article
	:og:description: Browscap is a browser capabilities project that provides a database and API for determining the capabilities of a web browser
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/browscap.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"browscap","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Browscap is a browser capabilities project that provides a database and API for determining the capabilities of a web browser","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/browscap.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


browscap
--------

Browscap is a browser capabilities project that provides a database and API for determining the capabilities of a web browser. The term ``Browscap`` is often used to refer to the browser capabilities project as well as the configuration file (browscap.ini) that contains information about various web browsers.

The primary purpose of Browscap is to help web developers tailor their web applications or websites based on the capabilities of the user's browser. It provides details about the browser type, version, and various other characteristics. This information can be used to adapt the presentation or behavior of a website to ensure compatibility with different browsers.

The Browscap project originally started as a part of the PHP project, and PHP developers can use the information from Browscap to improve the accuracy of functions like get_browser(), which is a PHP function used to get information about the capabilities of a user's browser.

.. code-block:: php
   
   <?php
   
   print_r(get_browser($_SERVER['HTTP_USER_AGENT']));
   
   ?>


`Documentation <https://www.php.net/manual/fr/function.get-browser.php>`__
