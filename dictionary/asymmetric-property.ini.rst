.. _asymmetric-property:
.. meta::
	:description:
		Asymmetric Property: An asymmetric property is a property that specify the asymmetric visibility.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Asymmetric Property
	:twitter:description: Asymmetric Property: An asymmetric property is a property that specify the asymmetric visibility
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Asymmetric Property
	:og:type: article
	:og:description: An asymmetric property is a property that specify the asymmetric visibility
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/asymmetric-property.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Asymmetric Property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 04 Jul 2025 16:44:29 +0000","dateModified":"Fri, 04 Jul 2025 16:44:29 +0000","description":"An asymmetric property is a property that specify the asymmetric visibility","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Asymmetric Property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Asymmetric Property
-------------------

An asymmetric property is a property that specify the asymmetric visibility. This means that the property has a different visibility for read and for write. By default, visibility is symmetric: identical to write and read.

.. code-block:: php
   
   <?php
   
   class x {
   	public private(set) int $property;
   }
   
   ?>


Related : :ref:`Asymetric Visibility <asymmetric-visibility>`
