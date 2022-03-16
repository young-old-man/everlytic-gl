<?php

namespace Youngoldman\Everlyticpackage;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;

class Everlyticpackage
{
    public function sendContactToEverlytic($data, $user, $apiKey, $url)
    {
        $client = new Client();

        $options = [
            'json' => $data,
            'auth' => [$user, $apiKey]
        ];

        try {
            $request = $client->request('POST',$url,$options);
        } catch (ClientException $exception) {
            exit($exception->getMessage());
        }

        $body = $request->getBody();
        return json_encode($body);
    }

}
