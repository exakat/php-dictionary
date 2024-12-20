.. _xmlreader:

XMLReader
---------

The ``XMLReader`` extension is an XML Pull parser. The reader acts as a cursor going forward on the document stream and stopping at each node on the way.

.. code-block:: php
   
   <?php
   //creating an XML documents that is to be parsed using XML reader to retrieve the contents
   $xmlDocument = '<?xml version="1.0"?>
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
   </books>';
   //declaring an instance of XML Reader
   $xml = new XMLReader();
   $xml->XML($xmlDocument);
   //parsing the contents of the XML document and retrieving the required contents from the document
   echo "List of the book titles:\n";
   while( $xml->read() )
   {
       if ($xml->name === 'title') {
           print $xml->readInnerXML().PHP_EOL;
           $xml->next();
       }
   }
   ?>
   


`Documentation <https://www.php.net/manual/en/book.xmlreader.php>`__

See also `PHP: Reading XML with XMLReader <https://www.youtube.com/watch?v=xBuBjyLAxOI>`_

Related : :ref:`XMLwriter <xmlwriter>`, :ref:`XML <xml>`

Added in PHP 5.0+
