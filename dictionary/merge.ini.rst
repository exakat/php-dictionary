.. _merge:
.. meta::
	:description:
		Merge: To merge is the action of combining two things into one.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Merge
	:twitter:description: Merge: To merge is the action of combining two things into one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Merge
	:og:type: article
	:og:description: To merge is the action of combining two things into one
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/merge.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Merge","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"To merge is the action of combining two things into one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Merge.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Merge
-----

To merge is the action of combining two things into one. There are usually two meaning associated with PHP code : 

+ merging arrays, with the eponymous function ``array_merge()``, or the ``+`` operator
+ code merge, using a VCS, such as git, svn, etc.



.. code-block:: php
   
   <?php
   
   $array1 = [1,2];
   $array2 = [3,4];
   
   array_merge($array1, $array2); // [1,2,3,4]
   $array1 + $array2;             // [1,2,3,4]
   
   ?>


Related : :ref:`array_merge() <array_merge>`, :ref:`VCS <vcs>`
