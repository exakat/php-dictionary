.. _tech-island:
.. meta::
	:description:
		Tech Island: A tech island is an organisational behaviour where a team replicates tools, libraries, or infrastructure internally rather than depending on external ones.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Tech Island
	:twitter:description: Tech Island: A tech island is an organisational behaviour where a team replicates tools, libraries, or infrastructure internally rather than depending on external ones
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Tech Island
	:og:type: article
	:og:description: A tech island is an organisational behaviour where a team replicates tools, libraries, or infrastructure internally rather than depending on external ones
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/tech-island.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Tech Island","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:01:48 +0000","dateModified":"Fri, 05 Jun 2026 08:01:48 +0000","description":"A tech island is an organisational behaviour where a team replicates tools, libraries, or infrastructure internally rather than depending on external ones","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Tech Island.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Tech Island
-----------

A tech island is an organisational behaviour where a team replicates tools, libraries, or infrastructure internally rather than depending on external ones. The goal is to reduce exposure to outside dependencies: third-party APIs, open-source libraries that may be abandoned, or cloud services that may change pricing or availability.

While this approach grants autonomy and control, it comes at the cost of reinventing the wheel: the internal replicas must be built, maintained, and kept up to date, diverting effort from the core product. Tech islands can drift from standards, accumulate hidden debt, and become a maintenance burden over time.

Tech island is distinct from a tech silo: an island deliberately avoids external tools, whereas a silo is a team that does not share its tools or knowledge with the rest of the organisation.

Related : :ref:`Vendor Lock-in <vendor-lockin>`, :ref:`Dependency <dependency>`, :ref:`Coupling <coupling>`, :ref:`Don't Repeat Yourself (DRY) <dry>`, :ref:`Tech Silo <tech-silo>`
