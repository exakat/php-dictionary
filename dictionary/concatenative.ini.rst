.. _concatenative:
.. meta::
	:description:
		Concatenative: A concatenative structure is a structure that is valid after placing values one after the other.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Concatenative
	:twitter:description: Concatenative: A concatenative structure is a structure that is valid after placing values one after the other
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Concatenative
	:og:type: article
	:og:description: A concatenative structure is a structure that is valid after placing values one after the other
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/concatenative.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Concatenative","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Dec 2025 05:49:36 +0000","dateModified":"Tue, 30 Dec 2025 05:49:36 +0000","description":"A concatenative structure is a structure that is valid after placing values one after the other","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Concatenative.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Concatenative
-------------

A concatenative structure is a structure that is valid after placing values one after the other. 

For example, strings are concatenative, using the ``.`` dot operator. On the other hand, JSON is not concatenative, as two JSON strings placed one after the other does not create a valid JSON (although, it is still a string).

There are concatenative programming languages, and natural languages.

.. code-block:: php
   
   <?php
   
   $fullName = John .  . Doe;
   
   ?>


See also https://en.wikipedia.org/wiki/Concatenative_programming_language, https://inlpglossary.ca/concatenative-morphology/

Related : :ref:`Concatenation <dot>`
