.. _star:
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
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/star.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Star *","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Apr 2026 16:50:28 +0000","dateModified":"Fri, 10 Apr 2026 16:50:28 +0000","description":"``*`` is character, used in various situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Star *.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Star *
------

``*`` is character, used in various situations: 

+ multiplication: ``3 * 2 == 6``
+ power: ``3 ** 2 == 3 * 3 == 9``
+ with slash, ``/*`` is a multi line comment: ``/* */``
+ with double star and a slash, ``/**`` is a phpdoc comment: ``/** */``.
+ as a wildcard in ``glob()`` calls
+ as a wildcard in ``fnmatch()`` calls
+ as a wildcard for all columns in SQL queries: ``SELECT * FROM table``
+ as a quantifier in regex: 0 or more, i.e. ``/a*/``
+ as part of a multiline comment with ``/** */`` and ``/* */``


.. code-block:: php
   
   <?php
   
   file_get_contents('/tmp/test.txt');
   
   echo 2 * 3; // 6 
   echo 2 ** 3; // * 
   
   /*
    A multiline comment
   */
   
   ?>


Related : :ref:`Multiplication <multiplication>`, :ref:`Comments <comment>`, :ref:`Exponential <exponential>`, :ref:`Regular Expressions <regex>`, :ref:`Simple Query Language (SQL) <sql>`, :ref:`glob() <glob>`, 
