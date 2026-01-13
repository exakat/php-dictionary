.. _hydrate:
.. meta::
	:description:
		Hydratation: To hydrate is to fill an object with data coming from an unstructured format, before using it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Hydratation
	:twitter:description: Hydratation: To hydrate is to fill an object with data coming from an unstructured format, before using it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Hydratation
	:og:type: article
	:og:description: To hydrate is to fill an object with data coming from an unstructured format, before using it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hydrate.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Hydratation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 19 Apr 2025 15:23:55 +0000","dateModified":"Sat, 19 Apr 2025 15:23:55 +0000","description":"To hydrate is to fill an object with data coming from an unstructured format, before using it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Hydratation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Hydratation
-----------

To hydrate is to fill an object with data coming from an unstructured format, before using it. This happens when reading data from a database, a dataset, or from the incoming superglobals.

Hydration is quite repetitive, as the source data must be mapped to the corresponding property. Validation may also play a part in that operation.

See also https://www.doctrine-project.org/projects/doctrine1/en/latest/manual/data-hydrators.html, https://mvaliolahi.medium.com/laravel-request-hydration-f8aba2ae4851

Related : :ref:`Serialization <serialize>`, :ref:`Data Mapper <mapper>`

Related packages : `patchlevel/hydrator <https://packagist.org/packages/patchlevel/hydrator>`_, `cuyz/valinor <https://packagist.org/packages/cuyz/valinor>`_, `laminas/laminas-hydrator <https://packagist.org/packages/laminas/laminas-hydrator>`_, `eventsauce/object-hydrator <https://packagist.org/packages/eventsauce/object-hydrator>`_
