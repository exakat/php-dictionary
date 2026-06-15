.. _slug:
.. meta::
	:description:
		Slug: A slug is a URL-friendly string derived from a human-readable label.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Slug
	:twitter:description: Slug: A slug is a URL-friendly string derived from a human-readable label
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Slug
	:og:type: article
	:og:description: A slug is a URL-friendly string derived from a human-readable label
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/slug.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Slug","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A slug is a URL-friendly string derived from a human-readable label","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Slug.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Slug
----

A slug is a URL-friendly string derived from a human-readable label. It typically consists of lowercase letters, digits, and hyphens, with spaces and special characters removed or replaced.

Slugs are widely used in web applications to build readable, SEO-friendly URLs. For example, the title ``Hello World!`` becomes the slug ``hello-world``.

PHP does not have a built-in slug generator, but the transformation can be achieved by combining ``strtolower()``, ``preg_replace()``, and transliteration via ``iconv()``. Many frameworks and libraries also provide dedicated helpers.

.. code-block:: php
   
   <?php
   
       function slugify(string $text): string {
           $text = iconv('UTF-8', 'ASCII//TRANSLIT', $text);
           $text = strtolower($text);
           $text = preg_replace('/[^a-z0-9]+/', '-', $text);
           return trim($text, '-');
       }
   
       echo slugify('Hello World!'); // hello-world
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Clean_URL#Slug>`__

See also `What is a slug? <https://yoast.com/slug/>`_.

Related : :ref:`Universal Resource Locator (URL) <url>`, :ref:`Search Engine Optimization (SEO) <seo>`, :ref:`strtolower() <strtolower>`, :ref:`String <string>`, :ref:`Unique Identifier <unique-identifier>`
