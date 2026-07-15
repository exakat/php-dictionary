.. _explanation:
.. meta::
	:description:
		Explanation: In the context of static analysis and code review, an explanation is a natural-language description of why a piece of code is flagged, what rule it violates, and how to fix it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Explanation
	:twitter:description: Explanation: In the context of static analysis and code review, an explanation is a natural-language description of why a piece of code is flagged, what rule it violates, and how to fix it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Explanation
	:og:type: article
	:og:description: In the context of static analysis and code review, an explanation is a natural-language description of why a piece of code is flagged, what rule it violates, and how to fix it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/explanation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/explanation.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/explanation.ini.html","name":"Explanation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:08 +0000","dateModified":"Fri, 19 Jun 2026 21:25:08 +0000","description":"In the context of static analysis and code review, an explanation is a natural-language description of why a piece of code is flagged, what rule it violates, and how to fix it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Explanation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Explanation
-----------

In the context of static analysis and code review, an explanation is a natural-language description of why a piece of code is flagged, what rule it violates, and how to fix it.

Good explanations bridge the gap between a raw finding, with context data such as file, line, severity,... and actionable understanding. They include: the name and rationale of the rule, a concrete example of the problematic pattern, the recommended alternative, and links to documentation or further reading.

In a broader software context, explanation also refers to the practice of making code behavior transparent and understandable: through comments, documentation, naming conventions, and readable structure. Self-explanatory code minimizes the need for inline comments by making intent visible in the code itself.

AI-assisted code explanation is an emerging use case where a language model summarises what a function or class does, identifies its contract, and describes its edge cases.

`Documentation <https://en.wikipedia.org/wiki/Self-documenting_code>`__

Related : :ref:`Comments <comment>`, :ref:`Docblock <docblock>`, :ref:`Documentation <documentation>`, :ref:`Best Practices <best-practice>`, :ref:`Clean Code <clean-code>`
