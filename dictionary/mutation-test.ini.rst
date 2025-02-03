.. _mutation-test:
.. meta::
	:description:
		Mutation Testing: Mutation testing is a way to enhance the quality of tests by checking how they react to a small perturbation of the code source.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Mutation Testing
	:twitter:description: Mutation Testing: Mutation testing is a way to enhance the quality of tests by checking how they react to a small perturbation of the code source
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Mutation Testing
	:og:type: article
	:og:description: Mutation testing is a way to enhance the quality of tests by checking how they react to a small perturbation of the code source
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/mutation-test.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Mutation Testing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Mutation testing is a way to enhance the quality of tests by checking how they react to a small perturbation of the code source","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Mutation Testing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Mutation Testing
----------------

Mutation testing is a way to enhance the quality of tests by checking how they react to a small perturbation of the code source.

After writing a suite of tests and having it pass, mutation testing adds a modification to the code : for example, replacing a `+` by a `-`. Then, it runs the test suite again, and the expectation is that one test (at least) should spot the error. That way, the code is well bordered by the tests. 

When the suite is still green after mutating the code, this means that the test suite is not sufficient to spot it. The code is now a mutant, and the test suite should be updated.

`Infection` is a PHP mutation Testing framework.


`Documentation <https://en.wikipedia.org/wiki/Mutation_testing>`__

See also `Infection <https://infection.github.io/>`_

Related packages : `infection/infection <https://packagist.org/packages/infection/infection>`_
