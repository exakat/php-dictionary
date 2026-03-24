.. _preg_split:
.. meta::
	:description:
		preg_split(): ``preg_split()`` splits strings with a regular expression.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: preg_split()
	:twitter:description: preg_split(): ``preg_split()`` splits strings with a regular expression
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: preg_split()
	:og:type: article
	:og:description: ``preg_split()`` splits strings with a regular expression
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/preg_split.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"preg_split()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 24 Mar 2026 06:17:41 +0000","dateModified":"Tue, 24 Mar 2026 06:17:41 +0000","description":"``preg_split()`` splits strings with a regular expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/preg_split().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


preg_split()
------------

``preg_split()`` splits strings with a regular expression. 

That function allows for complex splitting of strings, including capturing the separators. For simpler splits where the separator is a static value, use ``explode()``.


.. code-block:: php
   
   <?php
   
   $sentence = 'hypertext language, programming';
   
   $keywords = preg_split('/[\s,]+/', $sentence);
   // ['hypertext', 'language', 'programming']
   
   // This needs the parenthesis in the regex. Multiple parenthesis are possible.
   $separators = preg_split('/([\s,]+)/', $sentence, flags: PREG_SPLIT_DELIM_CAPTURE);
   // ['hypertext', ' ', 'language', ', ', 'programming']
   print_r($separators);
   
   $words = explode(' ', $sentence);
   // ['hypertext', 'language,', 'programming']
   // comma is still collected
   
   ?>


`Documentation <https://www.php.net/manual/en/function.preg-split.php>`__

See also https://clouddevs.com/php/preg_split-function/, https://www.youtube.com/watch?v=cNp-0pYErV0

Related : :ref:`explode() <explode>`
