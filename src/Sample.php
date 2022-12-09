<?php
// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Sample;
require '../../vendor/autoload.php';

use AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi;

use Darabonba\OpenApi\Models\Config;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsSignRequest;use function Composer\Autoload\includeFile;

use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Console\Console;
use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\SendSmsRequest;


class Sample {

    /**
     * 使用AK&SK初始化账号Client
     * @param string $accessKeyId
     * @param string $accessKeySecret
     * @return Dysmsapi Client
     */
    public static function createClient($accessKeyId, $accessKeySecret){
        $config = new Config([
            // 您的AccessKey ID
            "accessKeyId" => $accessKeyId,
            // 您的AccessKey Secret
            "accessKeySecret" => $accessKeySecret
        ]);
        // 访问的域名
        $config->endpoint = "dysmsapi.aliyuncs.com";
        return new Dysmsapi($config);
    }

    /**
     * @param string[] $args
     * @return void
     */
    public static function main(){
        $client = self::createClient("Your KeyId", "Your KeySecret");
        $sendSmsRequest = new SendSmsRequest([
            'phoneNumbers'=>'the phone you want to send',
            'signName'=>'the special template',
            'templateCode'=>'tmpateCode',
            'templateParam'=>'{"param1":"value","param2":"value"}'
        ]);
        $resp = $client->sendSms($sendSmsRequest);
        Console::log(Utils::toJSONString(Tea::merge($resp)));
    }
}
$path = __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'vendor' . \DIRECTORY_SEPARATOR . 'autoload.php';
if (file_exists($path)) {
    require_once $path;
}
Sample::main();