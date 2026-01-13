.. _finally:
.. meta::
	:description:
		Finally: Finally is the default clause of a try-catch expression.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Finally
	:twitter:description: Finally: Finally is the default clause of a try-catch expression
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Finally
	:og:type: article
	:og:description: Finally is the default clause of a try-catch expression
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/finally.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Finally","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Finally is the default clause of a try-catch expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Finally.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Finally
-------

Finally is the default clause of a try-catch expression. It is run after all the catch clauses have been called.

Finally is run every time after a try, with or without any catch clause. It is also run before the return expression, if any. 



.. code-block:: php
   
   <?php
   
   try{
       doSomething();
   } catch (\Exception $e) {
       print "An exception was raised and caught";
   } finally {
       print "Finally\n";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.exceptions.php#language.exceptions.finally>`__

See also `How to use Try - Catch - Finally in PHP  <https://thecodeprogram.com/how-to-use-try---catch---finally-in-php>`_

Related : :ref:`Try-catch <try-catch>`, :ref:`Catch <catch>`

Added in PHP 7.0
