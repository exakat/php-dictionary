# HTML Escaping
HTML escaping, also known as HTML encoding or character escaping, is a technique used to convert special characters in HTML markup into their corresponding HTML entities. This is done to prevent these characters from being interpreted as HTML code by the browser, which could potentially lead to security vulnerabilities or incorrect rendering of the webpage.

For example, the less-than sign ``<`` is represented as ``&lt;`` and the greater-than sign ``>`` is represented as ``&gt;``. Similarly, characters such as ampersand ``&`` and double quotation marks ``"`` have their own HTML entities, resp. ``&amp;`` and ``&quote;``.

HTML escaping is commonly used when displaying user-generated content on a webpage, such as comments or forum posts, to ensure that any HTML code contained within the content does not interfere with the structure of the page or execute malicious scripts. It helps maintain the integrity and security of the webpage.
```php
<?php

    $str = "A 'quote' is <b>bold</b>";
    
    // Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
    echo htmlentities($str);
    
    // Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
    echo htmlentities($str, ENT_QUOTES);

?>
```

Related : [Escape Data](Escape Data), [Anchor](Anchor), [HTML Entity](HTML Entity)
