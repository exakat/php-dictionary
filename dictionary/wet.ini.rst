.. _wet:
.. meta::
	:description:
		Write Everything Twice (WET): Write Everything Twice (WET) is a principle of software development aimed at reducing abstraction levels and decoupling code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Write Everything Twice (WET)
	:twitter:description: Write Everything Twice (WET): Write Everything Twice (WET) is a principle of software development aimed at reducing abstraction levels and decoupling code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Write Everything Twice (WET)
	:og:type: article
	:og:description: Write Everything Twice (WET) is a principle of software development aimed at reducing abstraction levels and decoupling code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/wet.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Write Everything Twice (WET)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 09:28:29 +0000","dateModified":"Tue, 20 Jan 2026 09:28:29 +0000","description":"Write Everything Twice (WET) is a principle of software development aimed at reducing abstraction levels and decoupling code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Write Everything Twice (WET).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Write Everything Twice (WET)
----------------------------

Write Everything Twice (WET) is a principle of software development aimed at reducing abstraction levels and decoupling code.

The basic idea is that centralizing pieces of code, just because they are the same, leads to extra abstraction layers, that ends up counter productive. It is more reasonable to duplicate code as needed, and review what part of the code are truly shared before centralizing them.

This principle's nemesis is DRY : Don't Repeat Yourself'.

`Documentation <https://en.wikipedia.org/wiki/Don%27t_repeat_yourself>`__

See also https://medium.com/@nrk25693/dry-or-wet-and-why-867ac3096483, https://dev.to/nettab/we-should-all-be-writing-wet-code-3d95
