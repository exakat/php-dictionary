.. _link:
.. _hyperlink:
.. meta::
	:description:
		Link: A link connects two resources, allowing navigation or reference from one to the other.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Link
	:twitter:description: Link: A link connects two resources, allowing navigation or reference from one to the other
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Link
	:og:type: article
	:og:description: A link connects two resources, allowing navigation or reference from one to the other
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/link.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Link","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A link connects two resources, allowing navigation or reference from one to the other","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Link.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Link
----

A link connects two resources, allowing navigation or reference from one to the other.

In web development, links are expressed as HTML ``<a>`` anchor elements and ``<link>`` elements. PHP generates both when rendering HTML.

In the filesystem, a link is a reference to a file or directory. PHP provides ``link()`` for hard links and ``symlink()`` for symbolic links. Both are used for deployment strategies, shared asset management, and plugin architectures.

In data structures, a linked list uses node-to-node references to chain elements. PHP does not have a native linked list, but ``SplDoublyLinkedList`` provides one.

In REST APIs, links in responses describe available actions and related resources as URLs.

.. code-block:: php
   
   <?php
   
       // Filesystem symlink
       symlink('/var/www/releases/v2.0', '/var/www/current');
       
       // HTML link generation
       $url = htmlspecialchars('https://www.php.net/', ENT_QUOTES, 'UTF-8');
       echo "<a href=\"$url\">PHP Manual</a>";
       
       // HTML <link> element for stylesheet
       echo '<link rel="stylesheet" href="style.css">';
   
   ?>


`Documentation <https://www.php.net/manual/en/function.symlink.php>`__

See also `PHP symlink() <https://www.php.net/manual/en/function.symlink.php>`_ and `PHP link() <https://www.php.net/manual/en/function.link.php>`_.

Related : :ref:`Anchor <anchor>`, :ref:`Universal Resource Locator (URL) <url>`, :ref:`Universal Resource Identifier (URI) <uri>`, :ref:`HyperText Markup Language (HTML) <html>`, :ref:`Cross Site Scripting (XSS) <xss>`, :ref:`File System <filesystem>`
