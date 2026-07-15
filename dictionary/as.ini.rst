.. _as:
.. meta::
	:description:
		As: The as operator has several usage:.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: As
	:twitter:description: As: The as operator has several usage:
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: As
	:og:type: article
	:og:description: The as operator has several usage:
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/as.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/as.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/as.ini.html","name":"As","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The as operator has several usage:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/As.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


As
--

The as operator has several usage:

+ It is an optional keyword with the ``foreach()`` control structure, to access the key of the looped array
+ It is an optional keyword with the use expression, in trait import
+ It is an optional keyword with the use expression, in namespace import

The ``as`` operator often works to give a distinct name to an existing structure.

.. code-block:: php
   
   <?php
   
       use stdClass as StandardClass;
   
       foreach($map as $key => $value) {
           print "$key => $value\n";
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.assignment.php>`__

Related : :ref:`foreach() <foreach>`, :ref:`Use Alias <use-alias>`, :ref:`Alias <alias>`
