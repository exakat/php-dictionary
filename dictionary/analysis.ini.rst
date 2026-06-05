.. _analysis:
.. meta::
	:description:
		Analysis: Analysis in software development refers to the systematic examination of source code, runtime behaviour, or architecture to detect issues, measure quality, or derive understanding.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Analysis
	:twitter:description: Analysis: Analysis in software development refers to the systematic examination of source code, runtime behaviour, or architecture to detect issues, measure quality, or derive understanding
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Analysis
	:og:type: article
	:og:description: Analysis in software development refers to the systematic examination of source code, runtime behaviour, or architecture to detect issues, measure quality, or derive understanding
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/analysis.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Type iterable|array contains both iterable and array, which is redundant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Type iterable|array contains both iterable and array, which is redundant.html","name":"Analysis","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"Analysis in software development refers to the systematic examination of source code, runtime behaviour, or architecture to detect issues, measure quality, or derive understanding","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Analysis.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Analysis
--------

Analysis in software development refers to the systematic examination of source code, runtime behaviour, or architecture to detect issues, measure quality, or derive understanding.

Static analysis examines code without executing it. Tools such as PHPStan, Psalm, and Phan inspect PHP source files for type errors, undefined variables, dead code, and security vulnerabilities. Exakat is a static analyser specifically designed for PHP, able to audit large codebases and enforce rules across many categories.

Dynamic analysis examines code during execution. It covers profiling, fuzzing, mutation testing, and runtime error detection.

Architectural analysis focuses on the relationships between components, coupling, cohesion, and adherence to intended design patterns.

.. code-block:: php
   
   <?php
   
   // Running static analysis from PHP (e.g., as part of a CI pipeline)
   $output    = [];
   $exitCode  = 0;
   exec('vendor/bin/phpstan analyse src --level=8 --no-progress', $output, $exitCode);
   
   if ($exitCode !== 0) {
       echo implode(PHP_EOL, $output);
       exit($exitCode);
   }
   
   ?>


`Documentation <https://phpstan.org/>`__

See also `PHPStan <https://phpstan.org/>`_, `Psalm <https://psalm.dev/>`_ and `Exakat <https://www.exakat.io/>`_.

Related : :ref:`Static Application Security Testing (SAST) <sast>`, :ref:`Linting <linting>`, :ref:`Abstract Syntactic Tree (AST) <ast>`, :ref:`Metrics <metrics>`, :ref:`Quality <quality>`, :ref:`Code Review <code-review>`, :ref:`Continuous Integration (CI) <ci>`, :ref:`Dead Code <dead-code>`, :ref:`Type Coverage <type-coverage>`, :ref:`Code Inventory <inventory>`, :ref:`Static Code Analysis (SCA) <sca>`, :ref:`Tool <tool>`

Related packages : `phpstan/phpstan <https://packagist.org/packages/phpstan/phpstan>`_, `vimeo/psalm <https://packagist.org/packages/vimeo/psalm>`_, `phan/phan <https://packagist.org/packages/phan/phan>`_
