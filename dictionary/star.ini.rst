.. _start:
.. meta::
	:description:
		Star *: ``*`` is character, used in various situations: .
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Star *
	:twitter:description: Star *: ``*`` is character, used in various situations: 
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Star *
	:og:type: article
	:og:description: ``*`` is character, used in various situations: 
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/start.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Star *","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 08 Mar 2026 20:56:36 +0000","dateModified":"Sun, 08 Mar 2026 20:56:36 +0000","description":"``*`` is character, used in various situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Star *.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Star *
------

``*`` is character, used in various situations: 

+ multiplication: ``3 * 2 == 6``
+ power: ``3 ** 2 == 3 * 3 == 9``
+ With slash, ``/*`` is a multi line comment: ``/* */``
+ With double star and a slash, ``/**`` is a phpdoc comment: ``/** */``.

.. code-block:: php
   
   <?php
   
   file_get_contents('/tmp/test.txt');
   
   echo 2 * 3; // 6 
   echo 2 ** 3; // * 
   
   /*
    A multiline comment
   */
   
   ?>


Related : :ref:`Multiplication <multiplication>`, :ref:`Comments <comment>`
