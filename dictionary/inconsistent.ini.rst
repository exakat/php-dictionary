.. _inconsistent:
.. meta::
	:description:
		Inconsistent: Inconsistent is a trait of written code, where different conventions or style are used at the same time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Inconsistent
	:twitter:description: Inconsistent: Inconsistent is a trait of written code, where different conventions or style are used at the same time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Inconsistent
	:og:type: article
	:og:description: Inconsistent is a trait of written code, where different conventions or style are used at the same time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/inconsistent.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Inconsistent","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 05 May 2026 19:43:37 +0000","dateModified":"Tue, 05 May 2026 19:43:37 +0000","description":"Inconsistent is a trait of written code, where different conventions or style are used at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Inconsistent.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Inconsistent
------------

Inconsistent is a trait of written code, where different conventions or style are used at the same time. Inconsistent source code is more difficult to understand and often lead to misunderstanding.

One way to fight inconsistence is to make the consistent rule explicit, and to use tools that both enforce and teach them to developers.

Code may run correctly without being consistent. 


.. code-block:: php
   
   <?php
   
       $first_name = 'PHP';
       $lastName = 'Elephpant';
   
   ?>


See also `How NOT to write code in PHP — 5 Bad Examples <https://sergheipogor.medium.com/how-not-to-write-code-in-php-5-bad-examples-9b4205f8de35>`_, `Explaining Inconsistent Code <https://cs.nyu.edu/~wies/publ/fse2013.pdf>`_ and `The inconsistencies of PHP <https://www.jamiebalfour.scot/articles/posts/the-inconsistencies-of-php>`_.

Related : :ref:`Coding Conventions <coding-convention>`
