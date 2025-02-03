.. _supply-chain-attack:
.. meta::
	:description:
		Supply Chain Attack: Supply Chain Attack is a security attack that uses dependencies to infect a program.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Supply Chain Attack
	:twitter:description: Supply Chain Attack: Supply Chain Attack is a security attack that uses dependencies to infect a program
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Supply Chain Attack
	:og:type: article
	:og:description: Supply Chain Attack is a security attack that uses dependencies to infect a program
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/supply-chain-attack.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Supply Chain Attack","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Supply Chain Attack is a security attack that uses dependencies to infect a program","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Supply Chain Attack.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Supply Chain Attack
-------------------

Supply Chain Attack is a security attack that uses dependencies to infect a program.

Modern applications are built on top of components which are fetched from central repositories. In the PHP world, composer is the most popular PHP repository.

When those external repositories are infected with malicious component or code, the dependency manager loads them like the rest of the code. Blind trust in the imported code lead to vulnerabilities.



`Documentation <https://en.wikipedia.org/wiki/Supply_chain_attack>`__

See also `PHP Supply Chain Attack on Composer <https://blog.sonarsource.com/php-supply-chain-attack-on-composer/>`_
