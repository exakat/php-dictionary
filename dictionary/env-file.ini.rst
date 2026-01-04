.. _env-file:
.. _dotenv:
.. meta::
	:description:
		.env File: Environment files are a way to store and access environmement variables, and store them in a file, not in the OS environment.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: .env File
	:twitter:description: .env File: Environment files are a way to store and access environmement variables, and store them in a file, not in the OS environment
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: .env File
	:og:type: article
	:og:description: Environment files are a way to store and access environmement variables, and store them in a file, not in the OS environment
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/env-file.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":".env File","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 03 Jan 2026 17:19:36 +0000","dateModified":"Sat, 03 Jan 2026 17:19:36 +0000","description":"Environment files are a way to store and access environmement variables, and store them in a file, not in the OS environment","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/.env File.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


.env File
---------

Environment files are a way to store and access environmement variables, and store them in a file, not in the OS environment.

The env file holds a set of environment variables and their values. It is loaded instead of the actual operating system value. That way, there may be several sets of values for the variables, each of them stored in a distinct file, and accessed via the file name.

`Documentation <https://www.dotenv.org/>`__

See also https://blog.devsense.com/2025/mastering-.env-files-in-php-concepts-tools-and-best-pra/, https://upsun.com/blog/what-is-env-file/, https://dotenvx.com/

Related : 

Related packages : `vlucas/phpdotenv <https://packagist.org/packages/vlucas/phpdotenv>`_, `symfony/dotenv <https://packagist.org/packages/symfony/dotenv>`_
