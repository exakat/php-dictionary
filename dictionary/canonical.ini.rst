.. _canonical:
.. _non-canonical:
.. meta::
	:description:
		Canonical: Canonical PHP are the PHP recommended operators and functions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Canonical
	:twitter:description: Canonical: Canonical PHP are the PHP recommended operators and functions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Canonical
	:og:type: article
	:og:description: Canonical PHP are the PHP recommended operators and functions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/canonical.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Canonical","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 20:46:12 +0000","dateModified":"Sun, 25 Jan 2026 20:46:12 +0000","description":"Canonical PHP are the PHP recommended operators and functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Canonical.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Canonical
---------

Canonical PHP are the PHP recommended operators and functions. This adjective is often used as non-canonical, to highlight that the feature exists, but is not recommended.

There are non-canonical functions (``sizeof()`` versus ``count()``), cast operators (``boolean`` versus ``bool``), property options (``var`` versus ``public``), constants (``true`` versus ``'on'``), etc.

.. code-block:: php
   
   <?php
   
   $array = [1, 2, 3];
   echo sizeof($array); // 3
   
   ?>

