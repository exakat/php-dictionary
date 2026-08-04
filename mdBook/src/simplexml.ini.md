# SimpleXML
The SimpleXML extension provides a very simple and easily usable toolset to convert XML to an object that can be processed with normal property selectors and array iterators.
```php
<?php
$books = new SimpleXMLElement('<?xml version=\1.0\?>
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
```

Related : [XMLwriter](XMLwriter), [XMLReader](XMLReader), [Extensible Markup Language (XML)](Extensible Markup Language (XML)), [Unicode](Unicode), [Document Object Model (DOM)](Document Object Model (DOM)), [DOM](DOM)
