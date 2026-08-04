# Test Impact Analysis
Test Impact Analysis, or ``TIA``, is a technique that selects and runs only the tests affected by a given code change, instead of running the whole test suite. It relies on a dependency map between source code and tests, built from static analysis, coverage data, or call graphs, to determine which tests exercise the modified lines.

The main benefit is speed: on a large codebase, running the full test suite for every commit can take many minutes, while TIA may cut that down to seconds by focusing on the small subset of tests that could actually be broken by the change.

TIA is commonly built on top of code coverage information gathered during a previous full run: each line of source code is mapped to the tests that cover it, and a diff against the previous commit is used to compute the impacted set of tests. Some tools instead build a static call graph, which is faster but less precise, since it may miss dynamic behavior such as reflection or dynamic method calls.

TIA trades completeness for speed. Since the mapping may be stale, or miss indirect effects, it is usually paired with periodic full test runs, for instance nightly, or before a release, to catch anything the selective run may have missed.
## See Also

+ [Test Impact Analysis in .NET](https://learn.microsoft.com/en-us/azure/devops/pipelines/test/test-impact-analysis)

Related : [Test](Test), [Code Coverage](Code Coverage), [Regression](Regression), [Unit Test](Unit Test), [Continuous Integration (CI)](Continuous Integration (CI)), [Continuous Integration](Continuous Integration), [Test Pyramid](Test Pyramid), [Test Framework](Test Framework)
