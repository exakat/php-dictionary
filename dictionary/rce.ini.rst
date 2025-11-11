.. _rce:
.. meta::
	:description:
		Remote Code Execution (RCE): It is a type of security vulnerability where an attacker can remotely execute arbitrary code on a target server or system.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Remote Code Execution (RCE)
	:twitter:description: Remote Code Execution (RCE): It is a type of security vulnerability where an attacker can remotely execute arbitrary code on a target server or system
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Remote Code Execution (RCE)
	:og:type: article
	:og:description: It is a type of security vulnerability where an attacker can remotely execute arbitrary code on a target server or system
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/rce.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Remote Code Execution (RCE)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Nov 2025 17:47:16 +0000","dateModified":"Sun, 09 Nov 2025 17:47:16 +0000","description":"It is a type of security vulnerability where an attacker can remotely execute arbitrary code on a target server or system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Remote Code Execution (RCE).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Remote Code Execution (RCE)
---------------------------

It is a type of security vulnerability where an attacker can remotely execute arbitrary code on a target server or system. This typically happens due to improper input validation, insecure deserialization, vulnerable eval-like functions, or unsafe file handling.

.. code-block:: php
   
   <?php
   
   // direct execution of the incoming 
   shell_exec($_GET['shell']);
   
   ?>

