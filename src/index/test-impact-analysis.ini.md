# Test Impact Analysis
Test Impact Analysis, or ``TIA``, is a technique that selects and runs only the tests affected by a given code change, instead of running the whole test suite. It relies on a dependency map between source code and tests, built from static analysis, coverage data, or call graphs, to determine which tests exercise the modified lines.

The main benefit is speed: on a large codebase, running the full test suite for every commit can take many minutes, while TIA may cut that down to seconds by focusing on the small subset of tests that could actually be broken by the change.

TIA is commonly built on top of code coverage information gathered during a previous full run: each line of source code is mapped to the tests that cover it, and a diff against the previous commit is used to compute the impacted set of tests. Some tools instead build a static call graph, which is faster but less precise, since it may miss dynamic behavior such as reflection or dynamic method calls.

TIA trades completeness for speed. Since the mapping may be stale, or miss indirect effects, it is usually paired with periodic full test runs, for instance nightly, or before a release, to catch anything the selective run may have missed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/test-impact-analysis.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/test-impact-analysis.ini.html","name":"Test Impact Analysis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 05:50:48 +0000","dateModified":"Tue, 04 Aug 2026 05:50:48 +0000","description":"Test Impact Analysis, or ``TIA``, is a technique that selects and runs only the tests affected by a given code change, instead of running the whole test suite","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Test Impact Analysis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Regression_testing#Test_impact_analysis)**
## See Also

+ [Test Impact Analysis in .NET](https://learn.microsoft.com/en-us/azure/devops/pipelines/test/test-impact-analysis)

## Related

+ [Test](test.ini.html)
+ [Code Coverage](code-coverage.ini.html)
+ [Regression](regression.ini.html)
+ [Unit Test](unit-test.ini.html)
+ [Continuous Integration (CI)](ci.ini.html)
+ [Continuous Integration](continuous-integration.ini.html)
+ [Test Pyramid](test-pyramid.ini.html)
+ [Test Framework](test-framework.ini.html)
