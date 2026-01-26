.. _forward-compatible:
.. meta::
	:description:
		Forward Compatible: A forward compatible feature is a feature that will be available in future versions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Forward Compatible
	:twitter:description: Forward Compatible: A forward compatible feature is a feature that will be available in future versions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Forward Compatible
	:og:type: article
	:og:description: A forward compatible feature is a feature that will be available in future versions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/forward-compatible.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Forward Compatible","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 13:49:04 +0000","dateModified":"Mon, 26 Jan 2026 13:49:04 +0000","description":"A forward compatible feature is a feature that will be available in future versions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Forward Compatible.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Forward Compatible
------------------

A forward compatible feature is a feature that will be available in future versions. In particular, it might be couple with a forward incompatible feature, which will be dropped, while the forward compatible feature will stay. 

For example, PHP allows the increment of non-numeric strings. This feature might be deprecated, and could be removed in a future version (not defined at the time of writing). The functions ``str_increment()`` and ``str_decrement()`` were introduced in PHP 8.3. They can replace the current feature, and they will be available in the future versions, making them forward compatible.

.. code-block:: php
   
   <?php
   
   $a = 't';
   echo ++$a; //u
   
   $a = str_increment($a);
   echo $a; // v
   
   ?>

