.. _hardening:
.. meta::
	:description:
		Hardening: Hardening refers to the raise of security level in the installation of PHP (or other technologies).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Hardening
	:twitter:description: Hardening: Hardening refers to the raise of security level in the installation of PHP (or other technologies)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Hardening
	:og:type: article
	:og:description: Hardening refers to the raise of security level in the installation of PHP (or other technologies)
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hardening.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Hardening","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 26 Apr 2025 07:35:49 +0000","dateModified":"Sat, 26 Apr 2025 07:35:49 +0000","description":"Hardening refers to the raise of security level in the installation of PHP (or other technologies)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Hardening.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Hardening
---------

Hardening refers to the raise of security level in the installation of PHP (or other technologies). It means reviewing the default or installed configurations and set ups, to make them safer.

For example, by default, PHP displays its version number in the HTTP headers, with ``X-Powered-By``. This may be hidden, so as not to disclose any information, by setting ``expose_php`` directive to off (``0``) in the php.ini file.


See also https://www.tecmint.com/hide-php-version-http-header/, https://www.zend.com/blog/php-hardening-strategies, https://cheatsheetseries.owasp.org/cheatsheets/PHP_Configuration_Cheat_Sheet.html

Related packages : `drupal/core-vendor-hardening <https://packagist.org/packages/drupal/core-vendor-hardening>`_, `jvmtech/neos-hardening <https://packagist.org/packages/jvmtech/neos-hardening>`_
