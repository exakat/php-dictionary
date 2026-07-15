.. _complexity:
.. meta::
	:description:
		Complexity: Complexity refers to how difficult the code is to understand, maintain, test, and modify.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Complexity
	:twitter:description: Complexity: Complexity refers to how difficult the code is to understand, maintain, test, and modify
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Complexity
	:og:type: article
	:og:description: Complexity refers to how difficult the code is to understand, maintain, test, and modify
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/complexity.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/complexity.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/complexity.ini.html","name":"Complexity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 28 Jun 2026 10:35:34 +0000","dateModified":"Sun, 28 Jun 2026 10:35:34 +0000","description":"Complexity refers to how difficult the code is to understand, maintain, test, and modify","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Complexity.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Complexity
----------

Complexity refers to how difficult the code is to understand, maintain, test, and modify. It may be objectively measured, but also subjectively estimated.

Complexity is measured with cyclomatic complexity, cognitive complexity, algorithmic complexity. 

Complexity increases when:

+ Code takes many decisions in one context
+ Logic is deeply nested
+ Responsibilities are mixed and matched
+ Behavior is not obvious, and includes magic
+ Code is not readable
+ Naming is confusing

Non-complex code tends to:

+ Have small functions
+ Clear naming
+ Limited branching
+ Avoid exploding combinaisons as much as possible

Code complexity applies to all programming languages, and is not specific to PHP.

`Documentation <https://en.wikipedia.org/wiki/Cyclomatic_complexity>`__

See also `Code Complexity: An In-Depth Explanation and Metrics <https://blog.codacy.com/code-complexity>`_ and `What is Code Complexity? <https://jellyfish.co/library/code-complexity/>`_.

Related : :ref:`Cognitive Complexity <cognitive-complexity>`, :ref:`Cyclomatic Complexity <cyclomatic-complexity>`, :ref:`Algorithmic Complexity <algorithmic-complexity>`

Related packages : `sebastian/complexity <https://packagist.org/packages/sebastian/complexity>`_, `phpmetrics/phpmetrics <https://packagist.org/packages/phpmetrics/phpmetrics>`_
