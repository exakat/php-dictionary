---
type: "extension"
title: "XXTEA"
description: "``XXTEA`` is a symmetric encryption algorithm that stands for ``Corrected Block TEA``: ``TEA`` refers to Tiny Encryption Algorithm."
resource: "https://en.wikipedia.org/wiki/XXTEA"
tags: ["extension", "cryptography"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# XXTEA

``XXTEA`` is a symmetric encryption algorithm that stands for ``Corrected Block TEA``: ``TEA`` refers to Tiny Encryption Algorithm. It is primarily used for encrypting and decrypting data, providing a level of security for sensitive information.

``XXTEA`` operates on 32-bit integer data blocks and employs a 128-bit key. It uses a series of iterations and bitwise operations to scramble the data and make it unreadable without the corresponding decryption process. ``XXTEA`` is a block cipher with a fixed block size of 8 bytes.

```php
<?php

    $str = "Hello World! 你好，中国🇨🇳！";
    $key = "1234567890";
    $base64 = "D4t0rVXUDl3bnWdERhqJmFIanfn/6zAxAY9jD6n9MSMQNoD8TOS4rHHcGuE=";
    $encrypt_data = xxtea_encrypt($str, $key);
    $decrypt_data = xxtea_decrypt($encrypt_data, $key);
    if ($str == $decrypt_data && base64_encode($encrypt_data) == $base64) {
        echo "success!";
    } else {
        echo base64_encode($encrypt_data);
        echo "fail!";
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/XXTEA](https://en.wikipedia.org/wiki/XXTEA)

## See Also
- [xxtea-pecl](https://github.com/xxtea/xxtea-pecl)

## Related
- [RSA](/features/rsa.md)

