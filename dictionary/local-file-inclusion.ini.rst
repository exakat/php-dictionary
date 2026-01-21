.. _lfi:
.. meta::
	:description:
		Local File Inclusion: A local file inclusion is a security vulnerability, where an external attacker can choose which file from the local system is processed by the called script.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Local File Inclusion
	:twitter:description: Local File Inclusion: A local file inclusion is a security vulnerability, where an external attacker can choose which file from the local system is processed by the called script
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Local File Inclusion
	:og:type: article
	:og:description: A local file inclusion is a security vulnerability, where an external attacker can choose which file from the local system is processed by the called script
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/lfi.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot mix keyed and unkeyed array entries in assignments.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot mix keyed and unkeyed array entries in assignments.html","name":"Local File Inclusion","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:11:49 +0000","dateModified":"Mon, 19 Jan 2026 14:11:49 +0000","description":"A local file inclusion is a security vulnerability, where an external attacker can choose which file from the local system is processed by the called script","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Local File Inclusion.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Local File Inclusion
--------------------

A local file inclusion is a security vulnerability, where an external attacker can choose which file from the local system is processed by the called script. 

This vulnerability is often used to access password files, such as ``/etc/passwd``, or other hidden files. They might be read and display, or furthermore processed and modified.

.. code-block:: php
   
   <?php
   
   // Input URL : http://vulnerable_host/preview.php?file=../../../../etc/passwd
   
   file_get_contents($_GET['file']); 
   
   ?>


`Documentation <https://owasp.org/www-project-web-security-testing-guide/v42/4-Web_Application_Security_Testing/07-Input_Validation_Testing/11.1-Testing_for_Local_File_Inclusion>`__

See also https://gupta-bless.medium.com/exploiting-local-file-inclusion-lfi-using-php-wrapper-89904478b225, https://brightsec.com/blog/local-file-inclusion-lfi/
