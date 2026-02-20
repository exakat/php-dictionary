.. _disable:
.. meta::
	:description:
		Disable: To disable is to prevent a feature to perform.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Disable
	:twitter:description: Disable: To disable is to prevent a feature to perform
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Disable
	:og:type: article
	:og:description: To disable is to prevent a feature to perform
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/disable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Disable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 19 Feb 2026 21:37:58 +0000","dateModified":"Thu, 19 Feb 2026 21:37:58 +0000","description":"To disable is to prevent a feature to perform","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Disable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Disable
-------

To disable is to prevent a feature to perform. For example, using ``disable_functions=foo`` prevents the function ``foo`` to be available at the start of execution, even if PHP has a definition for it. The function ``foo`` is cannot be run anymore, unless defined again.

Another example is ``memory_limit=-1``, which sets the maximum memory used by a PHP application to ``-1``, effectively disabling the control of the maximum amount of used memory.

Putting a piece of code in a comment is a way to disable it: it cannot be run anymore.

To disable implies a permanant state: it is different from a conditional statement. 

Related : :ref:`Enable <enable>`
