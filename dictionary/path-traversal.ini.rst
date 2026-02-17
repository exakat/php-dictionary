.. _path-traversal:
.. _directory-traversal:
.. meta::
	:description:
		Path Traversal: A path traversal vulnerability is a security flaw that allows an attacker to access files or directories outside the intended location on a server.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Path Traversal
	:twitter:description: Path Traversal: A path traversal vulnerability is a security flaw that allows an attacker to access files or directories outside the intended location on a server
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Path Traversal
	:og:type: article
	:og:description: A path traversal vulnerability is a security flaw that allows an attacker to access files or directories outside the intended location on a server
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/path-traversal.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Path Traversal","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 17 Feb 2026 10:30:18 +0000","dateModified":"Tue, 17 Feb 2026 10:30:18 +0000","description":"A path traversal vulnerability is a security flaw that allows an attacker to access files or directories outside the intended location on a server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Path Traversal.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Path Traversal
--------------

A path traversal vulnerability is a security flaw that allows an attacker to access files or directories outside the intended location on a server.

It happens when an application uses user input to build file paths without properly validating or restricting it.

Path traversals are also called directory traversal.

.. code-block:: php
   
   <?php
   
   $file = $_GET['file'];
   include('pages/' . $file);
   
   ?>


`Documentation <https://owasp.org/www-community/attacks/Path_Traversal>`__

See also https://portswigger.net/web-security/file-path-traversal, https://www.ubikasec.com/en/posts/how-to-prevent-exploitation-of-path-traversal-vulnerabilities/
