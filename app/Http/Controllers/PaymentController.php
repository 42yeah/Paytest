<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

$config = array (	
    //应用ID,您的APPID。
    'app_id' => "2016091400508070",

    //商户私钥
    'merchant_private_key' => "MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCBB9oNh13ws8G3XkzpV6X9nL5WpsRCutOhewKEOOKOFrpxGnr7tyf7tG8oVkTY8QuJ+HoV44N3IcQk71QZDQwkY+oDVdZTftPnW7eCOEvZyQ0vEYFv8Mv5MkXlxzxtWrw4Ipl8xdIHHN5yY2LLnPsTA8IzeHacl/EinLg4aFE29EI9bOygj88OGgXYyJF3VGzCh14Fh4W4WYfkRqyedjV4jwKpDiyJyyvZ2JjCBqHGs3QOC2LLZicRwggajZ2jp+rVvOrUZpzAtpVzA9yHqDY6WfXy1k11Hs+VaO3/Y0sfBW0kfbCvGsn8WUlMG2KB+WdVwygN7LRKA2IuIwdCKNZ9AgMBAAECggEAVW1bYuWivoBk2wCmLz+GeJjUNA6JlhyXjSwiCGSZKrXFjqiXkBw9bpqRlcU4I+HDX/+Q5PkSy0ch08pYhZVr2pQEFV05X2Jy7ZR9tMuM/I3uGqGebvygL0annHACg+w0/X163W8jlO36IQXIHUK7wGUWqHkzHo5CakYUedQnIRg386DjHu3V61+/hwE9j5SLz7IvmTxIRfCq9iJUCHNRg0Q2at7aX4HCfqmYbHHFY+gTyeB837LtPIy1NrZRbvRjURsaf5MqoQD/dGa3NWPL3RwpfhB5dvIb9EpZjzagb6gFVvSZ2TWxJ7NVKt7DQQfa0nY/ZkcRE65/KtnhAZsmQQKBgQDQTr3ODgLOiWh560NDG9p6gWYyy0WS/4MpvqGtZ1zqkjBEaHZ7JeUZahFu6hTHGnBvk2SckShdcicLYB1XdEvlzLmZv5jSemWLDqGYSO0jxgapQjhB1snL1XsLGUhC7ED5PaGwx1qMh93RNrg+KrR+t711SZIrzi7qTQvZB48YJQKBgQCeko6PFgs4m7GQm6Llo8MiGg9X4ctHZa1ztm8kFeLA31O/WuknCJ0Ny/hyCREZ+EGynH36OpKrwsgKdH2/tIjntBkXCIWn43t7eYE4XKNAnEemQxQeVi2J2pVjNtDxMtLdzPV1jUuSXv3ghhPGVPYuJAcskygptr/oYkUwf16peQKBgQCpEpA6E+MxUhQLiOmSKaRd9HNH3Pb+hgcmtcSyYwfmmHs2uvcXoz1dMFswBCyTIiGKXj62WZdCqWmJcRy/o/QKc+1dHkbi51dN07VTTjWz6IH1lXrl7XjiycZRztZ5AxsFcYGwY05aa9ide+V1B+JyS54p+Wn7xiEMKTbpk5oQRQKBgHQPcnX5vWbGVbUwpI6NSMIJ7tb0tVLhcY1ypm/z8M4X5vT0dheSr1isxH+6cSDf2j3/Whkui7FZVA6K6orIeTeVUpPQMfsKfZOG//QfoYEloS9ogy4dByGRsas3MMCI4VtjqvhJ3VkZW5ncqFaOUsy8o9+VKV02m8lbO6beYouJAoGAF8lNYBMfOH26BThi/74T4yWspgB8d5dB8GNMMl/psabsiXOR5Dbn+vPpyPfFwVmeP3V3R4RFIxQ4zqFuiUUyo/XIwX2PTFx02LrjvRfMmz6y5SVQnsu6AnzoZSddPea5B7Dvs3NDeuwNNk0FybLfzjbw9b/EoBArHLKdWZbrG48=",
    
    //异步通知地址
    'notify_url' => "http://123.207.43.62:23232",
    
    //同步跳转
    'return_url' => "http://127.0.0.1:8000/paid",

    //编码格式
    'charset' => "UTF-8",

    //签名方式
    'sign_type'=>"RSA2",

    //支付宝网关
    'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

    //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
    'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgQfaDYdd8LPBt15M6Vel/Zy+VqbEQrrToXsChDjijha6cRp6+7cn+7RvKFZE2PELifh6FeODdyHEJO9UGQ0MJGPqA1XWU37T51u3gjhL2ckNLxGBb/DL+TJF5cc8bVq8OCKZfMXSBxzecmNiy5z7EwPCM3h2nJfxIpy4OGhRNvRCPWzsoI/PDhoF2MiRd1RswodeBYeFuFmH5EasnnY1eI8CqQ4sicsr2diYwgahxrN0Dgtiy2YnEcIIGo2do6fq1bzq1GacwLaVcwPch6g2Oln18tZNdR7PlWjt/2NLHwVtJH2wrxrJ/FlJTBtigflnVcMoDey0SgNiLiMHQijWfQIDAQAB",
);

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        return view('pages.pay');
    }

    public function paypost(Request $request)
    {
        $this->validate($request, [
            'WIDsubject' => 'required',
            'WIDtotal_amount' => 'required',
        ]);

        $datas = [
            'WIDout_trade_no' => str_random(20),
            'WIDsubject' => $request->post('WIDsubject'),
            'WIDtotal_amount' => $request->post('WIDtotal_amount'),
            'WIDbody' => $request->post('WIDbody')
        ];

        return view('pages.pay', compact('datas'));
    }

    public function paid(Request $request)
    {
        return view('layouts.paid', compact('request'));
    }

    //             |
    // From alipay v
    /**
	 * 验签方法
	 * @param $arr 验签支付宝返回的信息，使用支付宝公钥。
	 * @return boolean
	 */
	function check($arr){
		$alipayrsaPublicKey = $config->alipay_public_key;
		$result = $this->rsaCheckV1($arr, $config->alipay_public_key);

		return $result;
	}

	public function rsaCheckV1($params, $rsaPublicKeyFilePath,$signType='RSA') {
			$sign = $params['sign'];
			$params['sign_type'] = null;
			$params['sign'] = null;
			return $this->verify($this->getSignContent($params), $sign, $rsaPublicKeyFilePath,$signType);
	}

    function verify($data, $sign, $rsaPublicKeyFilePath, $signType = 'RSA') {
		if($this->checkEmpty($this->alipayPublicKey)){
			$pubKey= $this->alipayrsaPublicKey;
			$res = "-----BEGIN PUBLIC KEY-----\n" .
				wordwrap($pubKey, 64, "\n", true) .
				"\n-----END PUBLIC KEY-----";
		}else {
			//读取公钥文件
			$pubKey = file_get_contents($rsaPublicKeyFilePath);
			//转换为openssl格式密钥
			$res = openssl_get_publickey($pubKey);
		}

		($res) or die('支付宝RSA公钥错误。请检查公钥文件格式是否正确');  

		//调用openssl内置方法验签，返回bool值

		if ("RSA2" == $signType) {
			$result = (bool)openssl_verify($data, base64_decode($sign), $res, OPENSSL_ALGO_SHA256);
		} else {
			$result = (bool)openssl_verify($data, base64_decode($sign), $res);
		}

		if(!$this->checkEmpty($this->alipayPublicKey)) {
			//释放资源
			openssl_free_key($res);
		}

		return $result;
	}

    public function getSignContent($params) {
		ksort($params);

		$stringToBeSigned = "";
		$i = 0;
		foreach ($params as $k => $v) {
			if (false === $this->checkEmpty($v) && "@" != substr($v, 0, 1)) {

				// 转换成目标字符集
				$v = $this->characet($v, $this->postCharset);

				if ($i == 0) {
					$stringToBeSigned .= "$k" . "=" . "$v";
				} else {
					$stringToBeSigned .= "&" . "$k" . "=" . "$v";
				}
				$i++;
			}
		}

		unset ($k, $v);
		return $stringToBeSigned;
	}
}
