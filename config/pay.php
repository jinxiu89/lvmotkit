<?php
return [
    'alipay' => [
        'app_id' => '2016101400682053',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAhIdEqupiND3py8DeMws/k4Lwu6/fuo61pOPZvHXnD8vKSU5rZbEk/iUI9k+yEaSpadtw3NYRqutVcHAiA6re0H5RubnuHAF7j+g++6L6VLwkcNypyKXUWvvICdlxo6YehPuKPq8itWQeOf0kiLh4u1EXNGzj6rIophP+uwFi7W5SKU+dL6mmlMtcpKnbCpfRXHPWaZlY8u+A/5h4M+1gTgzBsVmdRTrs74mlqKHwtmhL0TxU4NiM9RkztFQf7h1nZaE9FC541mS1QkBnpxMTX5ACdfNC918QDPHGpkfSnEyM37njT3ELn6yv07w5epcqhLsKTuezuB1Q8ZOFbBPJDwIDAQAB',
        'private_key' => 'MIIEogIBAAKCAQEAhyFTSisPG++3mDwXpM/AKwApsN6DTngnp7TZZazGpIzP630w0PS/VNEXou+x7w2RkRUkKWvFzyIHewbbKxv3dwqVC31angpLDSAv5ju8wphghmPC9Ph27r/wiCjFIjivhLhxXB5tQ4dLZ8Ez377pJgiKWBK6f2Q5m3npuBU4ofGoSUW6j/GI3sWL3b2492dPfB1lRA5ANnhVB3dgVrboxynHePj6ctIEkg0yStiGhARlNsJdEIHJ+91yyZvLYdPMCHQnRBslbiPyvrc7EnVwxXJYHKw5WSCDQSnT0mdJtFQFzeSI3FsNeJuPjapUzCvlVZn/1MMfNYxqAu0bBnTrUQIDAQABAoIBAFNwRXCvo9W5MGFlAah3y44BvLyEuQlz8fCBIBfDFqk2dZBQLhtodNgXgAPRA8q7Ux4Fst2MuYjL11ilBCHbU/OCakO89H5PlsYVEN6WFlkGI9v3r8L5xN5pUEmS+x7FZ8OI7B5Yf1lKKkp3puNKi8Y7UclOTzAoH9Yb8jADkoOTuArASvvoJ46kzwGKCuN3iRpKKE6QEi8UVvQwWGNltUCUsrGH+pLly+SOZTWNsvpI7fedwM3x7g/ArldFhxH4sSh8zpuu8MoA3JIKGM+kHXPF5lVKzw5P6e5v6u0cOx3sxY2/1nfA4pSWpZ803X4i4vBPS99ZXGlZvnfHjEqaDl0CgYEA968iGZ1KsOjtF+3pRyhwUVhZTVuMcnmBOR2/VnBiYFF5AkNDZFZ6MUIOLNMlIj1bOhb9r+hR+lNa+eQPRsKIeOdk8D/Euhsn43SAzsFueZZ0p9FOhWS1E2WCOPhl+PTB98IsIk5VQQEstTAhDPN1/v/n8K1DMxiysAJkMUIt4pMCgYEAi6rH+I0PMLyCZoxrqXZvIP9zyRrxZ51BXXYLIp4aodAl+RoI1nYFJoFesW5yOQY3jKG9meIVBrd3XokzYWuhUK4Ga8R9nO8ijpdrP1IAfKwU9jwp1SwtsTeumwqLbSOZpkf2MWe1lMMJCeng7ma0aaHxa7ICVLef+fMizWy1dQsCgYBoxBqPbRnv1Mac7ZRT9gX0UoOLliLFNSH0z+FkJatnBG9EBsGVyoJrHX6zdShq4DsbSihKZOFwGhwMQWw4yQZC5dWrTb3f3qazrk7hpa4eHgcACSfGgr+ZEcHQaTlw4c6+BtL2O94R3fZUOaRxPvX1Q7eO9SrMjTDgBFLvBwgzowKBgG8WMONSXsimxxkFiwRIfO9D/zXvRh7hhwHtR8IK+qfFRM6ylGDvkf0kXMrHS/ZrKXejlYh1t7+V4U3B1qofzzi6kcTZjgdqdJPxf43njRecTzfidmtlLhqMbUZHxsnRzP3issBs+pIN5nyKFyvHaKuz8K918ECtpIJLjlzRoCotAoGADFfPZ446LaVVNdJmDjTit8j/Tu87rm8A4A8uisok+VKy1k4CN//I/Si6GoOdF6ZcN/ZKlm7y8GTqCp1la6thV6tfS4r3n4Z5ACnH8KDEhrEYMaxyjfhP3gzvieuGiwqWVH5BSEMy211Zfpl0KHAHq4+GLQZsgXJmeFQXqLMUtS0=',
        'log' => ['file' => storage_path('logs/alipay.log')],
        'mode'=>'dev'
    ],
    'wechat' => [
        'app_id' => '',
        'mch_id' => '',
        'key' => '',
        'cert_client' => '',
        'cert_key' => '',
        'log' => ['file' => storage_path('logs/wechat_pay.log'),],
    ],
];
