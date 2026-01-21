.. _phpdoc:
.. meta::
	:description:
		PHPdoc: PHPDoc is a style of PHP comments.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHPdoc
	:twitter:description: PHPdoc: PHPDoc is a style of PHP comments
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PHPdoc
	:og:type: article
	:og:description: PHPDoc is a style of PHP comments
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/phpdoc.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"PHPdoc","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:53:06 +0000","dateModified":"Wed, 21 Jan 2026 08:53:06 +0000","description":"PHPDoc is a style of PHP comments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PHPdoc.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


PHPdoc
------

PHPDoc is a style of PHP comments. Those comments are delimited by `/** */`. 

PHPdoc comments are different from the other styles of PHP comments in their syntax. They are also used for PHP annotations, and are sometimes confused with them. 

PHPDoc annotations are an adaptation of Javadoc for the PHP programming language. It is a formal way to comment specific PHP structures, that is machine readable.

PHPDoc has a special token, to make it easier to extract it from the code.

PHPdoc may be exploited by automated documentation tools, or static analyzer, IDE.

.. code-block:: php
   
   <?php
   /**
    * Check if a number is prime
    *
    * @param int     $int       The number to test
    *
    * @return bool : is it prime or not
    */
    public function prime(int $int): bool {
        // ...
    }
   
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/PHPDoc>`__

See also https://www.educba.com/php-annotations/, https://www.phpdoc.org/

Related : :ref:`Attribute <attribute>`, :ref:`Annotations <annotation>`, :ref:`Comments <comment>`
