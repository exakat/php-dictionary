.. _writeable:
.. meta::
	:description:
		Writeable: Something is writeable when its current value may be modified.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Writeable
	:twitter:description: Writeable: Something is writeable when its current value may be modified
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Writeable
	:og:type: article
	:og:description: Something is writeable when its current value may be modified
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/writeable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Writeable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Something is writeable when its current value may be modified","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Writeable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Writeable
---------

Something is writeable when its current value may be modified. For example, a variable is writeable, as it may be changed at any moment: it may be unset, appended, prepended, replaced, or incremented. 

On the other hand, a property may be unwriteable, depending on the context, because of the visibility configuration.

Variable, properties with the correct visibility, static properties, array elements are all writeable. To check if a property is writeable or not, one should use the reflection engine. Most often, it is base on code knowledge.

Properties may be ``readonly``, which means they can be written once, and won't change value later. Modification limiting, and fine grained access may be achieved with property hooks.

Writeable also applies to files, as the operating system may or may not allow the modification of files. This may be checked with ``is_writeable()`` function.


.. code-block:: php
   
   <?php
   
       $v = 3;
       ++$v; // $v was incremented
       
       class X {
           private int $p;
           
           function __construct() {
               // The property p is writeable in this part of the code
               $this->p = 1;
           }
       }
       
       $x = new X();
       // The property p is not writeable from this part of the code
   
   ?>


Related : :ref:`Visibility <visibility>`, :ref:`Variables <variable>`, :ref:`Static Property <static-property>`, :ref:`Properties <property>`, :ref:`Container <container>`, :ref:`Array Element <array-element>`, :ref:`Readable <readable>`, :ref:`Reflection <reflection>`, :ref:`Readonly <readonly>`, :ref:`Property Hook <property-hook>`, :ref:`fopen() <fopen>`
