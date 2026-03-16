.. _missing-validation:
.. meta::
	:description:
		Missing Validation: Missing Validation is a common security vulnerability that occurs when an application fails to validate user input or data before processing it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Missing Validation
	:twitter:description: Missing Validation: Missing Validation is a common security vulnerability that occurs when an application fails to validate user input or data before processing it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Missing Validation
	:og:type: article
	:og:description: Missing Validation is a common security vulnerability that occurs when an application fails to validate user input or data before processing it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/missing-validation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/A non-numeric value encountered.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/A non-numeric value encountered.html","name":"Missing Validation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Mar 2026 17:56:01 +0000","dateModified":"Tue, 10 Mar 2026 17:56:01 +0000","description":"Missing Validation is a common security vulnerability that occurs when an application fails to validate user input or data before processing it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Missing Validation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Missing Validation
------------------

Missing Validation is a common security vulnerability that occurs when an application fails to validate user input or data before processing it. This can lead to a wide range of security issues, including injection attacks, data corruption, unauthorized access, or even system compromise.

Missing validation means the application does not check whether the input or data it receives is:

+ Correctly formatted (e.g., an email address, number, or date).
+ Within expected boundaries (e.g., length, type, or range).
+ Safe to process (e.g., free from malicious code or unexpected characters)

It is important to remember that validation applies to incoming variables, such as ``$_GET``, but also with formated data, like ``JSON`` or ``YAML``; formated files like ``PDF`` or ``Zip``; database data, etc. In fact, every external source of data should be considered a potential vector of attack.


.. code-block:: php
   
   <?php
   
   $file = $_GET['fileName'];
   
   // Some validation on the name size.
   if (strlen($file) > 150) { die('This file name is too long');}
   
   // Validation is not sufficient, and any file may be reached on the system
   fopen($filename);
   
   ?>


`Documentation <https://owasp.org/www-project-top-10-for-business-logic-abuse/docs/the-top-10/missing-transition-validation>`__

Related : 
