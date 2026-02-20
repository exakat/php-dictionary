.. _readable:
.. meta::
	:description:
		Readable: Something is readable when the current value may be accessed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Readable
	:twitter:description: Readable: Something is readable when the current value may be accessed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Readable
	:og:type: article
	:og:description: Something is readable when the current value may be accessed
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/readable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Readable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 19 Feb 2026 22:33:37 +0000","dateModified":"Thu, 19 Feb 2026 22:33:37 +0000","description":"Something is readable when the current value may be accessed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Readable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Readable
--------

Something is readable when the current value may be accessed. For example, a variable is readable, as it may be read at any moment. On the other hand, a property may be unreadable, depending on the context, because of the visibility configuration.

Variable, properties (given the correct visibility), static properties, constants, class constants (given the correct visibility), array elements are readable.

.. code-block:: php
   
   <?php
   
   $x = 3;
   echo $x;
   
   ?>


Related : :ref:`Visibility <visibility>`, :ref:`Variables <variable>`, :ref:`Static Property <static-property>`, :ref:`Properties <property>`, :ref:`Container <container>`, :ref:`Array Element <array-element>`, 
