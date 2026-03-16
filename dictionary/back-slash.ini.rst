.. _back-slash:
.. _anti-slash:
.. meta::
	:description:
		Backslash \: ``\`` is character, used in various situations: .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Backslash \
	:twitter:description: Backslash \: ``\`` is character, used in various situations: 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Backslash \
	:og:type: article
	:og:description: ``\`` is character, used in various situations: 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/back-slash.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Backslash \\","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Mar 2026 14:46:29 +0000","dateModified":"Mon, 16 Mar 2026 14:46:29 +0000","description":"``\\`` is character, used in various situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Backslash \\.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Backslash \
-----------

``\`` is character, used in various situations: 

+ Starts of a escape sequence, in a string
+ Escape character, in various languages
+ Name separator in a namespace.

.. code-block:: php
   
   <?php
   
   namespace A\B\C;
   
   echo \\\\n\\n;  // displays a \n followed by a new line
   
   ?>


Related : :ref:`Slash / <slash>`, :ref:`Escape Character <escape-character>`
