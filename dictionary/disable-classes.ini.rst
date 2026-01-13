.. _disable-classes:
.. meta::
	:description:
		Disable Classes: This directive disables the provided list of classes in the `php.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Disable Classes
	:twitter:description: Disable Classes: This directive disables the provided list of classes in the `php
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Disable Classes
	:og:type: article
	:og:description: This directive disables the provided list of classes in the `php
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/disable-classes.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Disable Classes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"This directive disables the provided list of classes in the `php","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Disable Classes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Disable Classes
---------------

This directive disables the provided list of classes in the `php.ini`.

Once disabled, the classes may be created, via an extension or in the code of PHP. Custom classes may still be created and used. 


.. code-block:: php
   
   // in php.ini
   
   disable_classes="mysqli,socket,soapserver" 
   
   


`Documentation <https://www.php.net/manual/en/ini.core.php#ini.disable-classes>`__

Related : :ref:`Disable Functions <disable-functions>`, :ref:`php.ini <php.ini>`
