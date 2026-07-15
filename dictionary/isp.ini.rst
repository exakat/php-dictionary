.. _isp:
.. meta::
	:description:
		Interface Segregation Principle (ISP): The interface segregation principle, or ISP, states that no code should be forced to depend on methods it does not use.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Interface Segregation Principle (ISP)
	:twitter:description: Interface Segregation Principle (ISP): The interface segregation principle, or ISP, states that no code should be forced to depend on methods it does not use
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Interface Segregation Principle (ISP)
	:og:type: article
	:og:description: The interface segregation principle, or ISP, states that no code should be forced to depend on methods it does not use
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/isp.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/isp.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/isp.ini.html","name":"Interface Segregation Principle (ISP)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 15:08:57 +0000","dateModified":"Sat, 11 Jul 2026 15:08:57 +0000","description":"The interface segregation principle, or ISP, states that no code should be forced to depend on methods it does not use","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Interface Segregation Principle (ISP).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Interface Segregation Principle (ISP)
-------------------------------------

The interface segregation principle, or ISP, states that no code should be forced to depend on methods it does not use. It is the ``I`` in the SOLID principles of object-oriented design, and it recommends splitting large, general-purpose interfaces into smaller, more specific ones, so that implementing classes only need to know about the methods that are actually relevant to them. Violating ISP typically shows up as ``fat`` interfaces, where implementers are forced to provide empty or throwing stubs for methods they don't need, which increases coupling and makes the codebase harder to maintain and extend.

`Documentation <https://en.wikipedia.org/wiki/Interface_segregation_principle>`__

See also `SOLID Design Principles Explained: Interface Segregation with Code Examples <https://stackify.com/interface-segregation-principle/>`_ and `How To Use Interface Segregation Principle in PHP/Laravel <https://mohasin-dev.medium.com/how-to-use-interface-segregation-principle-in-php-laravel-e5442d847da3>`_.

Related : :ref:`SOLID <solid>`
