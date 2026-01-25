.. _sunsetting:
.. meta::
	:description:
		Sunsetting: Sunsetting a feature is a period of deprecation, where the feature is still available, but is not recommended for usage.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Sunsetting
	:twitter:description: Sunsetting: Sunsetting a feature is a period of deprecation, where the feature is still available, but is not recommended for usage
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Sunsetting
	:og:type: article
	:og:description: Sunsetting a feature is a period of deprecation, where the feature is still available, but is not recommended for usage
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sunsetting.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Sunsetting","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 12:47:20 +0000","dateModified":"Thu, 22 Jan 2026 12:47:20 +0000","description":"Sunsetting a feature is a period of deprecation, where the feature is still available, but is not recommended for usage","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Sunsetting.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Sunsetting
----------

Sunsetting a feature is a period of deprecation, where the feature is still available, but is not recommended for usage. It is also displaying a warning message to alert of the disappearance, and offers alternatives.

.. code-block:: php
   
   <?php
   
   //Deprecated: foo(): Implicitly marking parameter $i as nullable is deprecated, the explicit nullable type must be used instead 
   function foo(int $i = null) {}
   
   ?>


See also https://producthq.org/agile/product-management/how-to-sunset-a-feature/, https://www.intercom.com/blog/how-to-sunset-a-feature/
