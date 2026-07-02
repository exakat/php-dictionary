.. _anchor:
.. _html-anchor:
.. meta::
	:description:
		Anchor: An anchor is an HTML element ``<a>`` used to create hyperlinks, allowing navigation to other pages, resources, or sections within the same page.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Anchor
	:twitter:description: Anchor: An anchor is an HTML element ``<a>`` used to create hyperlinks, allowing navigation to other pages, resources, or sections within the same page
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Anchor
	:og:type: article
	:og:description: An anchor is an HTML element ``<a>`` used to create hyperlinks, allowing navigation to other pages, resources, or sections within the same page
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/anchor.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Type iterable|array contains both iterable and array, which is redundant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Type iterable|array contains both iterable and array, which is redundant.html","name":"Anchor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 08:53:24 +0000","dateModified":"Thu, 02 Jul 2026 08:53:24 +0000","description":"An anchor is an HTML element ``<a>`` used to create hyperlinks, allowing navigation to other pages, resources, or sections within the same page","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Anchor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Anchor
------

An anchor is an HTML element ``<a>`` used to create hyperlinks, allowing navigation to other pages, resources, or sections within the same page. When the ``href`` attribute references a fragment identifier, e.g. ``#id``, the link jumps to a specific section of the current document.

Anchors are frequently generated programmatically when building HTML output, navigation menus, or documentation pages. Developers must be careful to escape user-supplied content used in anchor ``href`` attributes to prevent XSS vulnerabilities.


.. code-block:: php
   
   <?php
   
       // Generating an anchor safely in PHP
       $url   = 'https://www.php.net/';
       $label = 'PHP Manual';
       
       // htmlspecialchars prevents XSS
       echo '<a href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '">'
           . htmlspecialchars($label, ENT_QUOTES, 'UTF-8')
           . '</a>';
       
       // Fragment / in-page anchor
       echo '<a href="#section-2">Go to section 2</a>';
   
   ?>


`Documentation <https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a>`__

See also `Nested Anchor Links using CSS <https://www.amitmerchant.com/nested-anchor-links-using-css/>`_.

Related : :ref:`HyperText Markup Language (HTML) <html>`, :ref:`Cross Site Scripting (XSS) <xss>`, :ref:`Universal Resource Locator (URL) <url>`, :ref:`parse_url() <parse_url>`, :ref:`http_build_query() <http_build_query>`, :ref:`HTML Escaping <escape-html>`, :ref:`Link <link>`, :ref:`Pound # <pound>`
