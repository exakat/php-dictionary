# Quoted Printable
Quoted-printable is a content transfer encoding defined in RFC 2045 that's primarily used in email to ensure that message data remains intact when transmitted over protocols that are not 8-bit clean, such as SMTP.
```php
<?php

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "Content-Transfer-Encoding: quoted-printable\r\n";

$body = quoted_printable_encode("Café\nRésumé");

mail("example@php.net", "Some subject", $body, $headers);

?>
```

## See Also

+ [RFC-2045](https://datatracker.ietf.org/doc/html/rfc2045)

Related : [Simple Mail Transfer Protocol (SMTP)](Simple Mail Transfer Protocol (SMTP))
