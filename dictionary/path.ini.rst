.. _path:
.. meta::
	:description:
		Path: A path is a representation of the location of a file or directory within the directory structure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Path
	:twitter:description: Path: A path is a representation of the location of a file or directory within the directory structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Path
	:og:type: article
	:og:description: A path is a representation of the location of a file or directory within the directory structure
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/path.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Path","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"A path is a representation of the location of a file or directory within the directory structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Path.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Path
----

A path is a representation of the location of a file or directory within the directory structure. It describes the route or sequence of directories  one must navigate from the root directory to reach a specific file or directory. There are two types of paths:

+ Absolute Path: This provides the complete path from the root directory to the specific file or directory. For example, in Unix-like systems, an absolute path might look like "/home/user/documents/file.txt" or in Windows, it might look like "C:\Users\User\Documents\file.txt." 
+ Relative Path: This specifies the location of a file or directory relative to the current working directory. It doesn't start from the root directory but describes the path relative to the directory you are currently in. For example, if the current working directory is "/home/user/" and you have a file in the "documents" directory, the relative path might be "documents/file.txt" in Unix-like systems.

In PHP, path are represented by strings. The local OS's directory separator is stored in a constant called ``DIRECTORY_SEPARATOR``. Generally, the ``/`` is converted into the local dialect when needed, although there are special cases for the ``/`` (aka root) string.


