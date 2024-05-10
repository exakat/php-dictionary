.. _mock:

Mock
----

A mock replaces a code dependency with an object, to make testing easier. Mocks are used when the dependency is difficult to set in a reproducible state : for example, in a rare state, or after a long set up.

Mocks turns the dependency into another piece of code, with total control over its behavior. 

On the other hand, mocks have to be coded to replace the dependency, and emulates its behavior as closely as possible : any change to the dependency behavior has to be back-ported. 

Mock objects are also called ``test double``. 


`Documentation <https://www.radview.com/glossary/what-is-mock-testing/>`__

See also `Test doubles <https://phpunit.readthedocs.io/en/9.5/test-doubles.html>`_, `Mocking <https://laravel.com/docs/9.x/mocking>`_, `Avoid mocking repositories by using in-memory implementations <https://danielrotter.at/2023/09/22/avoid-mocking-repositories-by-using-in-memory-implementations.html>`_, `Testing without mocking frameworks <https://blog.frankdejonge.nl/testing-without-mocking-frameworks/>`_

Related : :ref:`Test Data Provider <test-data-provider>`

Related packages : `mockery/mockery <https://packagist.org/packages/mockery/mockery>`_, `phpspec/prophecy <https://packagist.org/packages/phpspec/prophecy>`_
