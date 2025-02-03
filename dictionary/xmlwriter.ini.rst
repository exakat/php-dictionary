.. _xmlwriter:
.. meta::
	:description:
		XMLwriter: The ``XMLWriter`` PHP extension is a built-in extension that provides a simple and efficient way to generate XML documents in PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: XMLwriter
	:twitter:description: XMLwriter: The ``XMLWriter`` PHP extension is a built-in extension that provides a simple and efficient way to generate XML documents in PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: XMLwriter
	:og:type: article
	:og:description: The ``XMLWriter`` PHP extension is a built-in extension that provides a simple and efficient way to generate XML documents in PHP
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/xmlwriter.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"XMLwriter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jan 2025 14:24:26 +0000","dateModified":"Thu, 23 Jan 2025 14:24:26 +0000","description":"The ``XMLWriter`` PHP extension is a built-in extension that provides a simple and efficient way to generate XML documents in PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/XMLwriter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


XMLwriter
---------

The ``XMLWriter`` PHP extension is a built-in extension that provides a simple and efficient way to generate XML documents in PHP. It allows to create XML elements, attributes, text nodes, and other XML constructs using a procedural interface.

The ``XMLWriter`` extension offers several benefits when working with XML in PHP:

+ Efficient and low memory usage: The extension is designed to generate XML incrementally, allowing you to write large XML documents without consuming excessive memory.
+    Stream-oriented output: ``XMLWriter`` writes XML data to a stream, which can be a file, memory, or an HTTP connection. This enables you to generate XML directly without the need to store the entire document in memory.
+    Namespace support: ``XMLWriter`` supports XML namespaces, allowing you to define and assign namespaces to elements and attributes.
+    Character encoding and formatting: ``XMLWriter`` provides methods to set the character encoding of the XML document and control the formatting options, such as indentation and line breaks.
+    Validity and well-formedness checking: ``XMLWriter`` performs automatic validation and well-formedness checking as you write XML, ensuring that the generated XML document is compliant with XML standards.

.. code-block:: php
   
   <?php
   
   // adapted from PHP Manual
   
   $xw = xmlwriter_open_memory();
   xmlwriter_set_indent($xw, 1);
   $res = xmlwriter_set_indent_string($xw, ' ');
   
   xmlwriter_start_document($xw, '1.0', 'UTF-8');
   
   // A first element
   xmlwriter_start_element($xw, 'tag1');
   
   // Attribute 'att1' for element 'tag1'
   xmlwriter_start_attribute($xw, 'att1');
   xmlwriter_text($xw, 'valueofatt1');
   xmlwriter_end_attribute($xw);
   
   xmlwriter_end_document($xw);
   
   echo xmlwriter_output_memory($xw);
   
   ?>
   


`Documentation <https://www.php.net/manual/en/book.xmlwriter.php>`__

See also `PHP XMLWriter <https://www.educba.com/php-xmlwriter/>`_, `Create an XML file using XMLWriter <https://riptutorial.com/php/example/2731/create-an-xml-file-using-xmlwriter>`_

Related : :ref:`XMLReader <xmlreader>`, :ref:`Extensible Markup Language (XML) <xml>`

Related packages : `sabre/xml <https://packagist.org/packages/sabre/xml>`_, `fluentdom/fluentdom <https://packagist.org/packages/fluentdom/fluentdom>`_

Added in PHP 5.0+
