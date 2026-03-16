.. _hash-character:
.. meta::
	:description:
		Hash #: ``#`` is character, used in various situations: .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Hash #
	:twitter:description: Hash #: ``#`` is character, used in various situations: 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Hash #
	:og:type: article
	:og:description: ``#`` is character, used in various situations: 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hash-character.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Hash #","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 08 Mar 2026 20:59:33 +0000","dateModified":"Sun, 08 Mar 2026 20:59:33 +0000","description":"``#`` is character, used in various situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Hash #.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Hash #
------

``#`` is character, used in various situations: 

+ one line comment: ``# comments after the character``
+ Separator in a URL, for the anchor: ``https://www.php.net/ChangeLog-8.php#8.5.3``

A hash may also be a type of arrays.

.. code-block:: php
   
   <?php
   
   file_get_contents('https://www.php.net/ChangeLog-8.php#8.5.3');
   
   echo 1; # A single line comment
   
   ?>


Related : :ref:`Comments <comment>`, :ref:`Hash <hash>`
