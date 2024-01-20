.. _xml:

XML
---

XML (Extensible Markup Language) is a markup language similar to HTML, but without predefined tags to use.

PHP offers several set of functions to handle XML : domxml, simplexml, xmlreader, xmlwriter.



.. code-block:: php
   
   <?php
   $string = <<<XML
   <?xml version='1.0'?>
   <document>
       <cmd>login</cmd>
       <login>Richard</login>
   </document>
   XML;
   
   $xml = simplexml_load_string($string);
   print_r($xml);
   
   ?>


`Documentation <https://www.php.net/manual/en/refs.xml.php>`__

Related : :ref:`SimpleXML <simplexml>`, :ref:`DOM <domxml>`, :ref:`XMLwriter <xmlwriter>`, :ref:`XMLReader <xmlreader>`
