.. _cascading:
.. meta::
	:description:
		Cascading: Cascading is the general pattern where an action, or a change, applied to one element automatically triggers the same, or a related, action on the elements that depend on it, propagating outward from the original point.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cascading
	:twitter:description: Cascading: Cascading is the general pattern where an action, or a change, applied to one element automatically triggers the same, or a related, action on the elements that depend on it, propagating outward from the original point
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cascading
	:og:type: article
	:og:description: Cascading is the general pattern where an action, or a change, applied to one element automatically triggers the same, or a related, action on the elements that depend on it, propagating outward from the original point
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cascading.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/cascading.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/cascading.ini.html","name":"Cascading","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 06:11:55 +0000","dateModified":"Tue, 04 Aug 2026 06:11:55 +0000","description":"Cascading is the general pattern where an action, or a change, applied to one element automatically triggers the same, or a related, action on the elements that depend on it, propagating outward from the original point","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cascading.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Cascading
---------

Cascading is the general pattern where an action, or a change, applied to one element automatically triggers the same, or a related, action on the elements that depend on it, propagating outward from the original point.

Cascading is a neutral, structural concept: it appears as a deliberate feature, such as ``ON DELETE CASCADE`` in a database, cascading style sheets, where a rule applies down through nested selectors, or cascading configuration, where a setting inherits from a parent scope unless overridden. It also appears as an unwanted side effect, as in a cascading failure, where a single fault propagates through dependent components until the whole system is affected.

Whether cascading is desirable depends entirely on whether the propagation is intended and bounded. A cascading delete that removes orphaned child rows is convenient; an unbounded cascade that silently deletes far more than expected is a bug. The same duality applies to type propagation, event propagation, and configuration inheritance, which are all instances of cascading.

`Documentation <https://en.wikipedia.org/wiki/Cascading_style_sheets>`__

Related : :ref:`Propagation <propagation>`, :ref:`Cascading Failure <cascading-failure>`, :ref:`Foreign Key <foreign-key>`, :ref:`Referential Integrity <referential-integrity>`, :ref:`Inheritance <inheritance>`
