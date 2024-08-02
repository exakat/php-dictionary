.. _simplexml:

SimpleXML
---------

The SimpleXML extension provides a very simple and easily usable toolset to convert XML to an object that can be processed with normal property selectors and array iterators.

.. code-block:: php
   
   <?php
   $books = new SimpleXMLElement('<?xml version="1.0"?>
   <books>
   <book>
   <title>Les miserables</title>
   <genre>Novel</genre>
   </book>
   <book>
   <title>The old man and the sea</title>
   <genre>Novel</genre>
   </book>
   <book>
   <title>The journey to the west</title>
   <genre>Epic</genre>
   </book>
   </books>');
   
   echo $movies->books[0]->title;
   ?>


`Documentation <https://www.php.net/manual/en/book.simplexml.php>`__

Related : :ref:`XMLwriter <xmlwriter>`, :ref:`XMLReader <xmlreader>`, :ref:`XML <xml>`, :ref:`Unicode <unicode>`

Added in PHP 5.0+
