# DomainException
Exception thrown if a value does not adhere to a defined valid data domain. For example, it might be an invalid value for a class property and not its type.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domainexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domainexception.html","name":"DomainException","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Exception thrown if a value does not adhere to a defined valid data domain","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/DomainException.html"]}],"keywords":["native exception"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rangeexception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logicexception.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.domainexception.php"},{"@type":"CreativeWork","name":"Domain exceptions in Prestashop","url":"https:\/\/devdocs.prestashop-project.org\/9\/development\/architecture\/domain\/domain-exceptions\/"},{"@type":"CreativeWork","name":"Custom Exceptions in PHP: Building Your Own Error Handling System","url":"https:\/\/kanishkame.medium.com\/custom-exceptions-in-php-building-your-own-error-handling-system-83b8df4f58f5"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"domainexception"}]}]}</script>
```php
<?php
function renderImage($imageResource, $imageType)
{
  switch ($imageType) {
  case 'jpg':
  case 'jpeg':
    header('Content-type: image/jpeg');
    imagejpeg($imageResource);
    break;
  case 'png':
    header('Content-type: image/png');
    imagepng($imageResource);
    break;
  default:
    throw new DomainException('Unknown image type: ' . $imageType);
    break;
  }
  imagedestroy($imageResource);
}
?>
```

**[Documentation](https://www.php.net/manual/en/class.domainexception.php)**
## See Also

+ [Domain exceptions in Prestashop](https://devdocs.prestashop-project.org/9/development/architecture/domain/domain-exceptions/)
+ [Custom Exceptions in PHP: Building Your Own Error Handling System](https://kanishkame.medium.com/custom-exceptions-in-php-building-your-own-error-handling-system-83b8df4f58f5)

## Related

+ [Exception](exception.html)
+ [RangeException](rangeexception.html)
+ [LogicException](logicexception.html)
