# Deterministic
A deterministic function is a function that produces the same output, based on the same input. 

``strlen()`` is a deterministic function: it always returns the length of a string the same way. 

``time()`` is not a deterministic function: it always returns a different values, as time passes. ``rand()``, ``time()`` are non deterministic.

A function becomes non-deterministic when it relies on systems that may change between two calls. This is the case for files or database accesses.
## See Also

+ [Understanding the differences between deterministic and probabilistic observability](https://docs.blackfire.io/continuous-profiling-cookbooks/understanding)

Related : [Random](Random), [Testable](Testable), [Determinism](Determinism), [Random\Engine](Random\Engine)
