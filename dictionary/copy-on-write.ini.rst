.. _copy-on-write:
.. meta::
	:description:
		Copy On Write (COW): ``Copy on write``, or COW, is a data management technique where data is shared between contexts, until it is actually modified.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Copy On Write (COW)
	:twitter:description: Copy On Write (COW): ``Copy on write``, or COW, is a data management technique where data is shared between contexts, until it is actually modified
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Copy On Write (COW)
	:og:type: article
	:og:description: ``Copy on write``, or COW, is a data management technique where data is shared between contexts, until it is actually modified
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/copy-on-write.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Copy On Write (COW)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 17 May 2026 07:43:09 +0000","dateModified":"Sun, 17 May 2026 07:43:09 +0000","description":"``Copy on write``, or COW, is a data management technique where data is shared between contexts, until it is actually modified","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Copy On Write (COW).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Copy On Write (COW)
-------------------

``Copy on write``, or COW, is a data management technique where data is shared between contexts, until it is actually modified. When a modification happens, the data is then duplicated, to avoid polluting the original data. Otherwise, simple reads keep the data intact, and save a copy operation and memory. 

PHP uses this technique for arrays and strings, unless they are passed by reference. It is totally transparent for the code.

.. code-block:: php
   
   <?php
   
       $array = [1,2,3];
       
       function foo($a) {
           echo $a[1]; // 
           
           $a[2] = 4; // $a is copied, then modified.
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Copy-on-write>`__

See also `Writing PHP Extensions: Copy on Write <https://www.zend.com/resources/php-extensions/copy-on-write>`_.

Related : :ref:`Internals <internals>`
