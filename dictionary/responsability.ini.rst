.. _responsability:
.. meta::
	:description:
		Responsability: Responsibility refers to a reason to change or a goal to achieve.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Responsability
	:twitter:description: Responsability: Responsibility refers to a reason to change or a goal to achieve
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Responsability
	:og:type: article
	:og:description: Responsibility refers to a reason to change or a goal to achieve
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/responsability.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/responsability.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/responsability.ini.html","name":"Responsability","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:30:25 +0000","dateModified":"Fri, 19 Jun 2026 21:30:25 +0000","description":"Responsibility refers to a reason to change or a goal to achieve","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Responsability.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Responsability
--------------

Responsibility refers to a reason to change or a goal to achieve. A class, module, or function should have one, and only one, responsibility: this means it should do one thing and do it well.

Responsability often relate to the key idea of Single Responsibility Principle, the SRP.

The SRP is the ``S`` in SOLID, formalized by ``Robert C. Martin``. It states:  ``A class should have only one reason to change``.

When a class handles both business rules and database storage, it has two responsibilities: and therefore two reasons to change. This happens when business rules change or when the database schema changes, or both.

`Documentation <https://en.wikipedia.org/wiki/Single-responsibility_principle>`__

See also `Single Responsibility Principle(SRP) example using PHP <https://medium.com/@Omojunior11/single-responsibility-principle-srp-example-using-php-337e33d739e>`_.

Related : :ref:`SOLID <solid>`, :ref:`Single Responsability Principle (SRP) <srp>`, :ref:`Accountability <accountability>`
