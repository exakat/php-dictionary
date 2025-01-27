.. _backward-incompatible:
.. meta::
	:description:
		Backward Incompatible: A feature is backward incompatible when it cannot work with a previous version, and requires a specific version, or more recent.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Backward Incompatible
	:twitter:description: Backward Incompatible: A feature is backward incompatible when it cannot work with a previous version, and requires a specific version, or more recent
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Backward Incompatible
	:og:type: article
	:og:description: A feature is backward incompatible when it cannot work with a previous version, and requires a specific version, or more recent
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/backward-incompatible.ini.html
	:og:locale: en


Backward Incompatible
---------------------

A feature is backward incompatible when it cannot work with a previous version, and requires a specific version, or more recent.

For example, the function ``str_contains`` is backward incompatible, as it was introduced in PHP 8.0, and is not available in previous versions.

The keyword ``throw`` can be used in expressions such as ``check() or throw new Exception`` since PHP 8.0. In older versions, ``throw`` was available, but needed to be an instruction on its own.

The contrary of a backward incompatible feature is forward compatible. 


Related : :ref:`Forward Compatible <forward-compatible>`
