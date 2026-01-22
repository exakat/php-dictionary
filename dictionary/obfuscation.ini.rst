.. _obfuscation:
.. meta::
	:description:
		Obfuscation: Obfuscation refers to the practice of deliberately making something difficult to understand or obscure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Obfuscation
	:twitter:description: Obfuscation: Obfuscation refers to the practice of deliberately making something difficult to understand or obscure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Obfuscation
	:og:type: article
	:og:description: Obfuscation refers to the practice of deliberately making something difficult to understand or obscure
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/obfuscation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Obfuscation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 07:57:08 +0000","dateModified":"Thu, 22 Jan 2026 07:57:08 +0000","description":"Obfuscation refers to the practice of deliberately making something difficult to understand or obscure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Obfuscation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Obfuscation
-----------

Obfuscation refers to the practice of deliberately making something difficult to understand or obscure. In the context of web security, code obfuscation is a technique used to make source code more difficult to filter and identify as a threat. The primary goal is not to improve the program's functionality but rather to hinder reverse engineering, the extraction of sensitive information from the code.

.. code-block:: php
   
   <?php
   
   // built with base64_encode(_GET); 
   $v = "X0dFVA=="; 
   
   // obfuscated code : this displays $_GET
   print_r($\{base64_decode($v)\}); 
   
   ?>


Related : :ref:`Minification <minification>`
