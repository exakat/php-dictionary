.. _srp:
.. meta::
	:description:
		Single Responsability Principle (SRP): Single Responsibility Principle is a coding principle where one component is responsible for one task, and nothing more.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Single Responsability Principle (SRP)
	:twitter:description: Single Responsability Principle (SRP): Single Responsibility Principle is a coding principle where one component is responsible for one task, and nothing more
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Single Responsability Principle (SRP)
	:og:type: article
	:og:description: Single Responsibility Principle is a coding principle where one component is responsible for one task, and nothing more
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/srp.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Single Responsability Principle (SRP)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:52:45 +0000","dateModified":"Wed, 21 Jan 2026 08:52:45 +0000","description":"Single Responsibility Principle is a coding principle where one component is responsible for one task, and nothing more","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Single Responsability Principle (SRP).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Single Responsability Principle (SRP)
-------------------------------------

Single Responsibility Principle is a coding principle where one component is responsible for one task, and nothing more. 

It particularly aims at avoid multiple responsibilities in code, where several tasks are performed at the same time. This means that any modifications to that method has an impact on each of the tasks, leading to potential spillovers. 

Single Responsibility Principle relies on the possibility to identify one responsibility per component, and exclude any other.

`Documentation <https://en.wikipedia.org/wiki/Single-responsibility_principle>`__

See also https://mohasin-dev.medium.com/how-to-use-single-responsibility-principle-in-php-laravel-with-example-9c728360f4f2

Related : :ref:`SOLID <solid>`
