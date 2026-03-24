.. _sca:
.. _static-code-analysis:
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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Static Code Analysis (SCA)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 23 Mar 2026 16:19:10 +0000","dateModified":"Mon, 23 Mar 2026 16:19:10 +0000","description":"Static code analysis, or SCA, analyze the source code: it reports possible bugs, conventions violations, incorrect structures, vulnerabilities, versions or OS portability incompatibilities, etc","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Static Code Analysis (SCA).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Static Code Analysis (SCA)
--------------------------

Static code analysis, or SCA, analyze the source code: it reports possible bugs, conventions violations, incorrect structures, vulnerabilities, versions or OS portability incompatibilities, etc. 

PHP includes static code analysis, by reporting a wide range of errors before executing the code, at linting time. Then, the other errors are reported at execution time. SCA works in-between these two phases: after the code compiles, but before it is executed. 

SCA is usually invoked manually, during development time, at commit time, to avoid pushing incorrect code, and in CI/CD pipelines, to ensure it was correctly run.

Related packages : `phpstan/phpstan <https://packagist.org/packages/phpstan/phpstan>`_, `phan/phan <https://packagist.org/packages/phan/phan>`_, `psalm/psalm <https://packagist.org/packages/psalm/psalm>`_, `exakat/exakat <https://packagist.org/packages/exakat/exakat>`_, `mago/mago <https://packagist.org/packages/mago/mago>`_
