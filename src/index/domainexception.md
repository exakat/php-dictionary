# DomainException
Exception thrown if a value does not adhere to a defined valid data domain. For example, it might be an invalid value for a class property and not its type.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/domainexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/domainexception.html","name":"DomainException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Exception thrown if a value does not adhere to a defined valid data domain","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/DomainException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Exception](exception.ini.html)
+ [RangeException](rangeexception.ini.html)
+ [LogicException](logicexception.ini.html)
