.. _open_basedir:
.. meta::
	:description:
		open_basedir: The ``open_basedir`` directive limits access to files in a list of provided directories, and their nested directories.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: open_basedir
	:twitter:description: open_basedir: The ``open_basedir`` directive limits access to files in a list of provided directories, and their nested directories
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: open_basedir
	:og:type: article
	:og:description: The ``open_basedir`` directive limits access to files in a list of provided directories, and their nested directories
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/open_basedir.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"open_basedir","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Mar 2026 07:17:40 +0000","dateModified":"Mon, 16 Mar 2026 07:17:40 +0000","description":"The ``open_basedir`` directive limits access to files in a list of provided directories, and their nested directories","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/open_basedir.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


open_basedir
------------

The ``open_basedir`` directive limits access to files in a list of provided directories, and their nested directories. That directive can only be set in the ``php.ini``.

Functions such as ``fopen()``, ``file_get_contents``, ``file_put_contents``, ``curl_get()`` when working on local files, ``zip_open()``, etc. are affected 

`Documentation <https://www.php.net/manual/en/ini.core.php#ini.open-basedir>`__

See also https://serveravatar.com/configure-open-basedir/

Related : , :ref:`php.ini <php.ini>`
