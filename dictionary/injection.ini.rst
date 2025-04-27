.. _injection:
.. meta::
	:description:
		Injection: Injection is the usage of a resource (data, object, services.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Injection
	:twitter:description: Injection: Injection is the usage of a resource (data, object, services
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Injection
	:og:type: article
	:og:description: Injection is the usage of a resource (data, object, services
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/injection.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Injection is the usage of a resource (data, object, services","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Injection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Injection
---------

Injection is the usage of a resource (data, object, services...) that is provided to the method, by the caller.

There are good injections, as the dependency injection.

There are bad injections : all the security ones. SQL injection, PHP code injection, CSV injection, XML injection, etc. Those attempt to change reroute the execution of the method to gain access to unprotected resources. 



Related : :ref:`Dependency Injection <dependency-injection>`, :ref:`SQL Injection <sql-injection>`, :ref:`Code Injection <code-injection>`, :ref:`CSV Injection <csv-injection>`
