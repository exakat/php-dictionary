.. _security:
.. meta::
	:description:
		Security: Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Security
	:twitter:description: Security: Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Security
	:og:type: article
	:og:description: Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/security.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Security","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 24 Apr 2025 05:25:30 +0000","dateModified":"Thu, 24 Apr 2025 05:25:30 +0000","description":"Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Security.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Security
--------

Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities.

Security risks may be of different nature: data privacy, identity usurpation, resource abuse, privilege escalation, resource access. 

Security applies to PHP itself, and also to the application written with it. 


.. code-block:: php
   
   
   <?php
      // classic example of a XSS injection
      $a = echo $_GET['a'];
   ?>
   


`Documentation <https://www.php.net/manual/en/security.php>`__
