.. _expose_php:
.. meta::
	:description:
		expose_php: The ``expose_php`` directive displays the usage of PHP and its version in the headers of the webserver.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: expose_php
	:twitter:description: expose_php: The ``expose_php`` directive displays the usage of PHP and its version in the headers of the webserver
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: expose_php
	:og:type: article
	:og:description: The ``expose_php`` directive displays the usage of PHP and its version in the headers of the webserver
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/expose_php.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"expose_php","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 25 Mar 2026 20:05:33 +0000","dateModified":"Wed, 25 Mar 2026 20:05:33 +0000","description":"The ``expose_php`` directive displays the usage of PHP and its version in the headers of the webserver","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/expose_php.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


expose_php
----------

The ``expose_php`` directive displays the usage of PHP and its version in the headers of the webserver.

It is considered a security leak to leave this configuration on, as it gives potential attackers information on the available technologies, and potential vulnerabilities. It is recommended to leave it off.

``expose_php`` has no impact on the code itself.

`Documentation <https://www.php.net/manual/en/ini.core.php#ini.expose_php>`__

See also https://www.php.net/manual/en/security.hiding.php

Related : :ref:`php.ini <php.ini>`
