.. _domxml:

DOM
---

The DOM extension in PHP is an extension that allows developers to work with XML documents using the Document Object Model (DOM) API. It provides a set of classes and functions to parse, manipulate, and generate XML documents.

The DOM extension provides a tree-based representation of an XML document, where each element, attribute, and text node is represented as an object. This allows developers to traverse and manipulate the XML document easily.


.. code-block:: php
   
   <?php
   
   // from PHP manual : https://www.php.net/manual/en/class.domcomment.php
   
      $xml = new DOMDocument();
       $xml->loadXML('<?xml version="1.0" encoding="utf-8"?>
         <configuration version="2">
         <!-- test &#45;&#45;&gt; -->
         test &#45;&#45;&gt;
         </configuration>'
       );
   $xpath = new DOMXPath($xml);
   $comments = $xpath->query('//comment()');
   $elements = $xpath->query('//configuration');
   
   echo $comments[0]->textContent;
   // result: test &#45;&#45;&gt;
   
   echo $elements[0]->textContent;
   // result: test -->
   
   ?>


`Documentation <https://www.php.net/manual/en/book.dom.php>`__

See also `Using PHP DOMDocument: Code Examples Explained <https://www.bitdegree.org/learn/php-domdocument>`_

Related : :ref:`XML <xml>`, :ref:`SimpleXML <simplexml>`, :ref:`XMLReader <xmlreader>`, :ref:`XMLwriter <xmlwriter>`, :ref:`Unicode <unicode>`
