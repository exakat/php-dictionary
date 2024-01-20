.. _mutation-test:

Mutation Testing
----------------

Mutation testing is a way to enhance the quality of tests by checking how they react to a small perturbation of the code source.

After writing a suite of tests and having it pass, mutation testing adds a modification to the code : for example, replacing a `+` by a `-`. Then, it runs the test suite again, and the expectation is that one test (at least) should spot the error. That way, the code is well bordered by the tests. 

When the suite is still green after mutating the code, this means that the test suite is not sufficient to spot it. The code is now a mutant, and the test suite should be updated.

`Infection` is a PHP mutation Testing framework.


`Documentation <https://en.wikipedia.org/wiki/Mutation_testing>`__

See also `Infection <https://infection.github.io/>`_

Related packages : `infection/infection <https://packagist.org/packages/infection/infection>`_
