.. _htmlentities:
.. meta::
	:description:
		htmlentities(): ``htmlentities()`` is a native PHP function which convert special characters in a string to their equivalent in HTML.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: htmlentities()
	:twitter:description: htmlentities(): ``htmlentities()`` is a native PHP function which convert special characters in a string to their equivalent in HTML
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: htmlentities()
	:og:type: article
	:og:description: ``htmlentities()`` is a native PHP function which convert special characters in a string to their equivalent in HTML
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/htmlentities.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"htmlentities()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"``htmlentities()`` is a native PHP function which convert special characters in a string to their equivalent in HTML","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/htmlentities().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


htmlentities()
--------------

``htmlentities()`` is a native PHP function which convert special characters in a string to their equivalent in HTML. 

``htmlentities()`` takes the string to be encoded, as argument. It also accepts an argument ``$encoding`` to specify which is the original encoding of the string, in particular when it is not ``utf-8``, which is the default in PHP. 

There are options to control which characters shall be encoded: for example, single and double quotes may be converted to not, with ``ENT_QUOTES`` and ``ENT_NOQUOTES``, respectively. 

Finally, ``$double_encode`` makes ``htmlentities()`` skip encoding a second time any entities already set in the string. 

The contrary to ``htmlentities()`` is ``html_entity_decode()``.

.. code-block:: php
   
   <?php
   
       $str = "A 'quote' is <b>bold</b>";
       
       echo htmlentities($str);
       echo "\n\n";
       echo htmlentities($str, ENT_COMPAT);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.htmlentities.php>`__

See also `HTML Entity List <https://www.freeformatter.com/html-entities.html>`_.

Related : :ref:`HyperText Markup Language (HTML) <html>`, :ref:`Entities <entity>`, :ref:`default_charset <default_charset>`, :ref:`html_entity_decode <html_entity_decode>`, :ref:`htmlspecialchars <htmlspecialchars>`
