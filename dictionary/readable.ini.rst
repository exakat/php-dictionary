.. _readable:
.. meta::
	:description:
		Readable: Something is readable when its current value may be accessed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Readable
	:twitter:description: Readable: Something is readable when its current value may be accessed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Readable
	:og:type: article
	:og:description: Something is readable when its current value may be accessed
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/readable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/readable.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/readable.ini.html","name":"Readable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:29:38 +0000","dateModified":"Fri, 19 Jun 2026 21:29:38 +0000","description":"Something is readable when its current value may be accessed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Readable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Readable
--------

Something is readable when its current value may be accessed. For example, a variable is readable, as it may be read at any moment. On the other hand, a property may be unreadable, depending on the context, because of the visibility configuration.

Variable, properties with the correct visibility, static properties, constants, class constants with the correct visibility, array elements are readable.

Files are another object that requires permissions. This time, the operating system provides the permissions. A file is readable when the ``is_readable()`` function returns true.


.. code-block:: php
   
   <?php
   
       $x = 3;
       echo $x;
   
   ?>


`Documentation <https://www.php.net/manual/en/function.is-readable.php>`__

Related : :ref:`Visibility <visibility>`, :ref:`Variables <variable>`, :ref:`Static Property <static-property>`, :ref:`Properties <property>`, :ref:`Container <container>`, :ref:`Array Element <array-element>`, :ref:`Writeable <writeable>`, :ref:`Technical Debt <debt>`, :ref:`fopen() <fopen>`, :ref:`Maintenability <maintenability>`, :ref:`Writable <writable>`, :ref:`Floating Point Numbers <float>`
