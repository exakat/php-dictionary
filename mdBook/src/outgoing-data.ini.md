# Outgoing Data
Outgoing data are data submitted by PHP to an external user. The default may be the user's browser, and the usual formats may be HTML, or JSON. Yet, there are many other destinations, such as databases, files, API, other process and formats, such as CSV, text, PDF, etc.

Outgoing data should always be formatted with the target technology. For example, text should use HTML entities for HTML output, or be provided as prepared statement with a database. Each target has its own system of protection.

The encoding of the incoming data are controlled with the ``default_charset`` directive.
```php
<?php

// raw text, for the browser
echo "Hello world.";

?>
```

Related : [Incoming Data](Incoming Data), [default_charset](default_charset)
