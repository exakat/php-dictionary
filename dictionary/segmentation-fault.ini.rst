.. _segmentation-fault:
.. meta::
	:description:
		Segmentation Fault: ``Segmentation fault`` is the laconic error message that is displayed when PHP crashes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Segmentation Fault
	:twitter:description: Segmentation Fault: ``Segmentation fault`` is the laconic error message that is displayed when PHP crashes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Segmentation Fault
	:og:type: article
	:og:description: ``Segmentation fault`` is the laconic error message that is displayed when PHP crashes
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/segmentation-fault.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Segmentation Fault","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"``Segmentation fault`` is the laconic error message that is displayed when PHP crashes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Segmentation Fault.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Segmentation Fault
------------------

``Segmentation fault`` is the laconic error message that is displayed when PHP crashes. It signals an error occurred during the execution of the PHP code, and it was not handled by any part of the engine. 

Segmentation fault are notoriously hard to fix. They are often linked to a bug, and there are some rare PHP syntax that leads to them. PHP 8.3 addresses them with a sensor that stops the problem before going out of hand.


.. code-block:: php
   
   <?php
   
   // start the file by including itself immediately.
   // What do you expect? 
   include __FILE__; 
   
   // Segmentation fault
   
   ?>


`Documentation <https://www.zend.com/blog/debugging-php-segmentation-faults>`__

See also `Find Segfaults in PHP like a boss <https://jolicode.com/blog/find-segfaults-in-php-like-a-boss>`_
