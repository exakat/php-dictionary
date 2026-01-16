.. _deprecation:
.. _obsolete:
.. meta::
	:description:
		Deprecation: Deprecation is the state of a feature which is still available, but not recommended anymore.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Deprecation
	:twitter:description: Deprecation: Deprecation is the state of a feature which is still available, but not recommended anymore
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Deprecation
	:og:type: article
	:og:description: Deprecation is the state of a feature which is still available, but not recommended anymore
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/deprecation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Deprecation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 17:01:22 +0000","dateModified":"Fri, 16 Jan 2026 17:01:22 +0000","description":"Deprecation is the state of a feature which is still available, but not recommended anymore","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Deprecation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Deprecation
-----------

Deprecation is the state of a feature which is still available, but not recommended anymore. The next stage of life for the feature is the removal, usually in a major release.

.. code-block:: php
   
   <?php
   
   1 ? 2 : 3 ? 4 : 5;   // deprecated in PHP 7.4, removed in PHP 8.0
   (1 ? 2 : 3) ? 4 : 5; // ok
   
   ?>


`Documentation <https://www.php.net/manual/en/migration74.deprecated.php#migration74.deprecated.core.nested-ternary>`__
