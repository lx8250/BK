<?php
$config = array (
    //应用ID,您的APPID。
    'app_id' => "2016092200573037",

    //商户私钥
    'merchant_private_key' => "MIIEogIBAAKCAQEAvCACnbWd3XvzhA4Pu8fzBCzKjVrGruntjt4rdllWViNbPdkVHe8Xyyc/HwWXPCwc7el2AB1ioZjooNTo7k5gsXjkPrlVTdzpFcmvgIrLS6TNdDfnnVE7MJEMxUugguY8Zor2y5ZdSHejWP+TtGkbW+CuC4rCqHFQm8K03IqbFg9DE4MtegWNJqh9GFa3J/kChIOYyqz2EQ2p39TXvYSa9ykzyvg5BFMpseO9I/jdfzIo71hMqoM3j+ucNfAH/B8PetaJwSvfVnRJbHVQClCUUt24d+HXiaGX+ztbCxP39nytsDztEJEiSjDjrT5CbYPV4PRvzcdBCqIw6txVRc7ayQIDAQABAoIBAE7gRPiG63evvrxBgQtEnHnFpe96fg9ceYQLVsG6V16qWFkoKZhxZNKC1A5Xs79A56hA2H7X00DZ8b9tRXSVXClM/LXn0wJge0HtXC5TA0XmBVaTEgN9yYllZ6tZOCVqDy0XWr6lftshflWUYwOjhhsRqyefuFoTmK6WBmrpmni2mSrfCkQy0Sb4v799+X/8K9A3y7d5cbm7jDiP1HqJiohzZrqAjdj58h3Jx5Avs9l5EkZGqR2oEUB+8sW7U2d9UIa1yOu774q9be/hUh6d0lT+U+2y+da50aewngv49FHy+ZL6i3SV7gnhZMh7PWhNnNRx9aB5vqZg5BcaFeflTrkCgYEA51k1Ne9dvLlbjAB2S+VSaO5A8Kk6xHGu4ZTsCGnBbEb5YqsPPsT5sxuxoBrkneGcaQihCxtEe50+nNzc9nZyVzBq3R7mAkKyqJ7If8Rf5E8PTtM2yx93exLKHRIfK9c98aQMgZBjVutyr/vN87aJyY3gblFHqjPy5xIiEOa6I+8CgYEA0Cu9qWbLnUf19K/s200ueWwwxQTL05IEYAVVPqgO7z4dmfP2F4sFNn3JkbdXsy+HhCttC9Ga51IOgt9hgM9con1hE1gMoSWZCfmZo98C9TEia7FPxPDiiiiJop94h9LIC9W9/XY3RdjemUNkNzQ8zMj/5miMV6cU2mIuqJlV1McCgYBCSmqX4NXwTQCxdjRvfO+HR7Xt/9/qCFU/KGgV5Q/akd/F6RQ+PTz7mJTmNq6JmusxoZpbz11pOl6Fnjfmm3waBbKpV8A6p5f//zeefMupZQoS4SzTOVoINxMZD2dFLbD/O62ltpTwhBjh2npiOkzzJydHFR0+5RHWKnj+dM6jmwKBgCttdJuqfj/Ji14IdXkqmM9r6qCvZ3YzuAXwFuCDXto6MyKy6lvu/J9pjmt/vCP9fl/sT0tv5sjrLWvP/h9JIyIi1eWbMMdNeKfEEnFFTPCp12xwCRwkxJ3d5xit/A8ZwfH2HTSLPOytWYLPtFBv7V8rb3c5yE1g5dDJOsKhem5xAoGAHEXD+EXuOH7XoAk4cM73eldNUPcco2fdE/hnLT5tzKwFLkkVjG5bRDFeD4QxKd/Psvm0M051yxKnfdXjacwC9COVEE2v8seIECW00tf48L6VPrMuPxmV2G8/+B06HpCsxiObYc4Q5e7FKXJfe9DG1JVib9WeeVc7UF6teMc2bJ8=",

    //异步通知地址
//		'notify_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/notify_url.php",
    'notify_url' => "http://localhost:8003/Alipay/notify_url.php",

    //同步跳转
//		'return_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/return_url.php",
    'return_url' => "http://localhost:8003/Alipay/return_url.php",

    //编码格式
    'charset' => "UTF-8",

    //签名方式
    'sign_type'=>"RSA2",

    //支付宝网关
    'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

    //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
    'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvCACnbWd3XvzhA4Pu8fzBCzKjVrGruntjt4rdllWViNbPdkVHe8Xyyc/HwWXPCwc7el2AB1ioZjooNTo7k5gsXjkPrlVTdzpFcmvgIrLS6TNdDfnnVE7MJEMxUugguY8Zor2y5ZdSHejWP+TtGkbW+CuC4rCqHFQm8K03IqbFg9DE4MtegWNJqh9GFa3J/kChIOYyqz2EQ2p39TXvYSa9ykzyvg5BFMpseO9I/jdfzIo71hMqoM3j+ucNfAH/B8PetaJwSvfVnRJbHVQClCUUt24d+HXiaGX+ztbCxP39nytsDztEJEiSjDjrT5CbYPV4PRvzcdBCqIw6txVRc7ayQIDAQAB",
);