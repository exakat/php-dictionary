.. _sca:
.. _static-code-analysis:
.. _static-analysis:
.. meta::
	:description:
		Static Code Analysis (SCA): Static code analysis, or SCA, analyze the source code: it reports possible bugs, conventions violations, incorrect structures, vulnerabilities, versions or OS portability incompatibilities, etc.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Static Code Analysis (SCA)
	:twitter:description: Static Code Analysis (SCA): Static code analysis, or SCA, analyze the source code: it reports possible bugs, conventions violations, incorrect structures, vulnerabilities, versions or OS portability incompatibilities, etc
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Static Code Analysis (SCA)
	:og:type: article
	:og:description: Static code analysis, or SCA, analyze the source code: it reports possible bugs, conventions violations, incorrect structures, vulnerabilities, versions or OS portability incompatibilities, etc
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sca.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/sca.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/sca.ini.html","name":"Static Code Analysis (SCA)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 23 Jun 2026 11:45:46 +0000","dateModified":"Tue, 23 Jun 2026 11:45:46 +0000","description":"Static code analysis, or SCA, analyze the source code: it reports possible bugs, conventions violations, incorrect structures, vulnerabilities, versions or OS portability incompatibilities, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Static Code Analysis (SCA).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Static Code Analysis (SCA)
--------------------------

Static code analysis, or SCA, analyze the source code: it reports possible bugs, conventions violations, incorrect structures, vulnerabilities, versions or OS portability incompatibilities, etc. 

PHP includes static code analysis, by reporting a wide range of errors before executing the code, at linting time. Then, the other errors are reported at execution time. SCA works in-between these two phases: after the code compiles, but before it is executed. 

SCA is usually invoked manually, during development time, at commit time, to avoid pushing incorrect code, and in CI/CD pipelines, to ensure it was correctly run.

`Documentation <https://en.wikipedia.org/wiki/Static_program_analysis>`__

Related : :ref:`Analysis <analysis>`, :ref:`Audit <audit>`, :ref:`Autocompletion <autocompletion>`, :ref:`Static Application Security Testing (SAST) <sast>`, :ref:`Static Single Assignment Form (SSA) <ssa>`, :ref:`Tool <tool>`, :ref:`Type Checking <type-checking>`

Related packages : `phpstan/phpstan <https://packagist.org/packages/phpstan/phpstan>`_, `phan/phan <https://packagist.org/packages/phan/phan>`_, `psalm/psalm <https://packagist.org/packages/psalm/psalm>`_, `exakat/exakat <https://packagist.org/packages/exakat/exakat>`_, `mago/mago <https://packagist.org/packages/mago/mago>`_
