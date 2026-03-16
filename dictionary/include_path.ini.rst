.. _include_path:
.. meta::
	:description:
		include_path: The ``include_path`` directive sets the directories where the file functions look for files to read or write files.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: include_path
	:twitter:description: include_path: The ``include_path`` directive sets the directories where the file functions look for files to read or write files
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: include_path
	:og:type: article
	:og:description: The ``include_path`` directive sets the directories where the file functions look for files to read or write files
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/include_path.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"include_path","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Mar 2026 06:58:02 +0000","dateModified":"Tue, 10 Mar 2026 06:58:02 +0000","description":"The ``include_path`` directive sets the directories where the file functions look for files to read or write files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/include_path.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


include_path
------------

The ``include_path`` directive sets the directories where the file functions look for files to read or write files. 

File functions may be ``require()``, ``include()``, ``fopen()``, ``file()``, ``readfile()``, ``file_get_contents()``.

``include_path`` default to ``.``, the current directory. It may list several directories, using ``::`` as a separator.

`Documentation <https://www.php.net/manual/en/ini.core.php#ini.include-path>`__

Related : :ref:`open_basedir <open_basedir>`
