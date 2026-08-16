# Test Impact Analysis
Test Impact Analysis, or ``TIA``, is a technique that selects and runs only the tests affected by a given code change, instead of running the whole test suite. It relies on a dependency map between source code and tests, built from static analysis, coverage data, or call graphs, to determine which tests exercise the modified lines.

The main benefit is speed: on a large codebase, running the full test suite for every commit can take many minutes, while TIA may cut that down to seconds by focusing on the small subset of tests that could actually be broken by the change.

TIA is commonly built on top of code coverage information gathered during a previous full run: each line of source code is mapped to the tests that cover it, and a diff against the previous commit is used to compute the impacted set of tests. Some tools instead build a static call graph, which is faster but less precise, since it may miss dynamic behavior such as reflection or dynamic method calls.

TIA trades completeness for speed. Since the mapping may be stale, or miss indirect effects, it is usually paired with periodic full test runs, for instance nightly, or before a release, to catch anything the selective run may have missed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test-impact-analysis.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/test-impact-analysis.html","name":"Test Impact Analysis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 05:50:48 +0000","dateModified":"Tue, 04 Aug 2026 05:50:48 +0000","description":"Test Impact Analysis, or TIA, is a technique that selects and runs only the tests affected by a given code change, instead of running the whole test suite","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Test Impact Analysis.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"test-impact-analysis"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Regression_testing#Test_impact_analysis)**
## See Also

+ [Test Impact Analysis in .NET](https://learn.microsoft.com/en-us/azure/devops/pipelines/test/test-impact-analysis)

## Related

+ [Test](test.html)
+ [Code Coverage](code-coverage.html)
+ [Regression](regression.html)
+ [Unit Test](unit-test.html)
+ [Continuous Integration (CI)](ci.html)
+ [Continuous Integration](continuous-integration.html)
+ [Test Pyramid](test-pyramid.html)
+ [Test Framework](test-framework.html)
