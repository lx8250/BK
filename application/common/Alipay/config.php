<?php
$config = array (	
		//应用ID,您的APPID。
		'app_id' => "2016092200573037",

		//商户私钥
		'merchant_private_key' => "MIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQDupRJvYYnXrFtXGSDkZ3DOsxhiCH8H749ojrEXJGQINCz2lfMNeVrhZ5is0sD4yzo1zT3AFUvnIEFXAzLbn4KEO5ABrylgEOvNNtcG32fF+J/dL0PbMjiLx9r4+HWMuCtkpmqvjijPtU9kq3GG2YEYmq5+mCVO9MAcU8+49cLwAOnolKrehuc+fyJJ4SgC+RNDIthDPZJ1eqiv6bTjCM89vOU7bKovyxKrMytUBVQA8r8WN2L1V70sriXuFqNBk/hFfKLnrYXhovGwpHZAjQ2rO4MxIZgn5CkmsotAnswj4lL/2grQxsyIJ+vWeVUD7jP7+2cie63zox+AYR87GtBDAgMBAAECggEBAKQ+hgaUWdtO63pxd/ra2n/YMTLfaBZdIRU0B9vGlvYyerOnliUy3YJ+20wurNNOg5ydyh8WSSwkPfQV5n3TNW+u0rjmBhLw8mlFkg5P2cseB2CidBA7a0GA5ksuLTERXAQkqQ50R9BUl/TQLg1CSyBU7T2Bl0PVHRch87f3pReqJPc85LcmIJ2TPfDZI6LVEP6vvWSjtsik8xi+DiDPAZj/JCnFXjNyc0X8EIntLzyHZPOu6XAiML86qDG/3uTgd3bXamDacDQK9s/1vqvIHKmIdWd1Ge0kYgNPUorKEG/OD+HSVMWulaECREMsESDEESemW1wiC6N3gGNOtIe2m8ECgYEA/guiduXjNFcrZ1a0F5r3EmAyibQUjuboY88Q5F/Zwmjc88WOL2OA01yaF4u4fee/6CAvteIVdPRwr/zWcpf9GIq3gm+JJspNP+Jj7jZ1Zi+vwfu3z5CEA9H/yH08dQAd51rS/EwA95Dk4hLx0X9ra7lC8Ouo4/NJeBSCngn/XeECgYEA8HsavR4IEAgDkIStKpUgDpbBigJrrXjtC/tROVwCfQK61EnBQvkxKZtHmbR7e8iUAQdLy2N7CJfjsq5LdsT70DjSNTwmy2zWX6U8mDe7Q3foOnavmmmyO1e+hBHEXPmbEctNi3wkzm99WpaSGNyhPPzQ/154nZ7exXsNDTI/SqMCgYEAzuas34blH1irKdOMgvkbpmSgZFQ8thHLTJZ03HpQAKyk3wiTf3bbkciGWwzZKfmX6zZjhQ9niEQYjswt31B3uggn4txx6By1A4We+4Bw5tOJokQe9LZvPilG14NfvK5mrGjlEsPXucjREGp7dbL/ytEsesiDWXtn55tUsd/UkiECgYEAqSIb6zjM+OF6CFGYLSPW+QvEsRkEvGwZZFzsgogY4+1gk2AQQddbYWTp1cvfMW8f0R1djH26EZAqQAhf4PeoF4lvJqvYqSgyGfDwDircVRZnSX8iAFsoVJ5gyyhnz/BpxPkU3+5/QIWfR3Aw7rV13Zv+Li02bb1H9uKVilt1sjsCgYA6jLUG3pGKEGw11qeUmkX8tY7EXHsMq1hFIgpCg/A4VF7WbqPWNPumDwu3b51fYQFEcGXnsPpzzG1O3PEC7HvIkCCg/HqMPnmcpgY0zalIq+nMUmOqiY7DbzowQ/XPSghsq6Hk+05HPScmbU2zvWQS2aFX83po6L51ujR/l6t/0A==",
		
		//异步通知地址
//		'notify_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/Notifyurl.php",
		'notify_url' => "http://localhost:8003/Index/Pay/notifyurl",

		//同步跳转
//		'return_url' => "http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/Returnurl.php",
		'return_url' => "http://localhost:8003/Index/Pay/returnurl",

		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAspOq3Tf1Q2cMKsoLuXsOc2I5tvwYiFZC4G9KzMqwc1YbEG73aU9445QI4uGGAoHtGS8y0Mt4GlKtMRVEL+EyzxuS+qTZHI3/VmJczjdiv54tqXroGkmZ7A2sMImtXoJCIUlvtkUXj4b4DOXwXDYSTxd6TuIEP5P3A7+Vn2KhOMvP7bXRemlZShSxq+ne+qrVf5ACUWkab8eYnugNh67Si6fdUCvj7h+7ecFGmb5fCQXBvI6G4PF1oVHy0WgFEKwFVoUoLNVhfydJ/JZihd6NxS6jai1TSIQ72AtylWsTh7Kg7P8Etjx3OkxMFZLOOiTuNSt3EoNMw7dLJ2TayZSBlwIDAQAB",
);