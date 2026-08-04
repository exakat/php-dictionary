.. _test-impact-analysis:
.. _TIA:
.. meta::
	:description:
		Test Impact Analysis: Test Impact Analysis, or ``TIA``, is a technique that selects and runs only the tests affected by a given code change, instead of running the whole test suite.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Test Impact Analysis
	:twitter:description: Test Impact Analysis: Test Impact Analysis, or ``TIA``, is a technique that selects and runs only the tests affected by a given code change, instead of running the whole test suite
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Test Impact Analysis
	:og:type: article
	:og:description: Test Impact Analysis, or ``TIA``, is a technique that selects and runs only the tests affected by a given code change, instead of running the whole test suite
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/test-impact-analysis.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/test-impact-analysis.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/test-impact-analysis.ini.html","name":"Test Impact Analysis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 05:50:48 +0000","dateModified":"Tue, 04 Aug 2026 05:50:48 +0000","description":"Test Impact Analysis, or ``TIA``, is a technique that selects and runs only the tests affected by a given code change, instead of running the whole test suite","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Test Impact Analysis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Test Impact Analysis
--------------------

Test Impact Analysis, or ``TIA``, is a technique that selects and runs only the tests affected by a given code change, instead of running the whole test suite. It relies on a dependency map between source code and tests, built from static analysis, coverage data, or call graphs, to determine which tests exercise the modified lines.

The main benefit is speed: on a large codebase, running the full test suite for every commit can take many minutes, while TIA may cut that down to seconds by focusing on the small subset of tests that could actually be broken by the change.

TIA is commonly built on top of code coverage information gathered during a previous full run: each line of source code is mapped to the tests that cover it, and a diff against the previous commit is used to compute the impacted set of tests. Some tools instead build a static call graph, which is faster but less precise, since it may miss dynamic behavior such as reflection or dynamic method calls.

TIA trades completeness for speed. Since the mapping may be stale, or miss indirect effects, it is usually paired with periodic full test runs, for instance nightly, or before a release, to catch anything the selective run may have missed.

`Documentation <https://en.wikipedia.org/wiki/Regression_testing#Test_impact_analysis>`__

See also `Test Impact Analysis in .NET <https://learn.microsoft.com/en-us/azure/devops/pipelines/test/test-impact-analysis>`_.

Related : :ref:`Test <test>`, :ref:`Code Coverage <code-coverage>`, :ref:`Regression <regression>`, :ref:`Unit Test <unit-test>`, :ref:`Continuous Integration (CI) <ci>`, :ref:`Continuous Integration <continuous-integration>`, :ref:`Test Pyramid <test-pyramid>`, :ref:`Test Framework <test-framework>`
