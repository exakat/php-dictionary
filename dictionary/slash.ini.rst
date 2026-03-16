.. _slash:
.. meta::
	:description:
		Slash /: ``/`` is character, used in various situations: .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Slash /
	:twitter:description: Slash /: ``/`` is character, used in various situations: 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Slash /
	:og:type: article
	:og:description: ``/`` is character, used in various situations: 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/slash.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/The backtick (`) operator is deprecated, use shell_exec() instead.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/The backtick (`) operator is deprecated, use shell_exec() instead.html","name":"Slash \/","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Mar 2026 17:35:11 +0000","dateModified":"Tue, 10 Mar 2026 17:35:11 +0000","description":"``\/`` is character, used in various situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Slash \/.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Slash /
-------

``/`` is character, used in various situations: 

+ decimal division: ``3 / 2``
+ Path separator: ``/user/php/document.txt``
+ Regex delimiter: ``/[abc]/i``, very frequent but not the only one
+ Regex escape char: ``/a\.b/i``
+ Double slash is the marker of a comment: ``// a comment till the end of the line``
+ With star, ``/*`` is a multi line comment: ``/* */``
+ With double star, ``/**`` is a phpdoc comment: ``/** */``

The slash looks like the back-slash character ``\``, though they have very different use.

.. code-block:: php
   
   <?php
   
   file_get_contents('/tmp/test.txt');
   
   echo 1234 / 2; 
   
   // Just a comment
   
   ?>


Related : :ref:`Backslash \ <back-slash>`, :ref:`Escape Character <escape-character>`
