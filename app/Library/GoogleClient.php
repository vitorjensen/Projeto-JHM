<?php
namespace App\Library;

use Google\Client;
use Google\Service\Oauth2 as ServiceOauth2;
use GuzzleHttp\Client as GuzzleClient;
use Google\Service\Oauth2\Userinfo;

class GoogleClient
{
    public readonly Client $client;
    private Userinfo $data;

    public function __construct()
    {
        $this->client = new Client;
    }

    public function init()
    {
        $guzzleClient = new GuzzleClient(['curl'=> [CURLOPT_SSL_VERIFYPEER => false]]);
        $this->client->setHttpClient($guzzleClient);
        $this->client->setClientId($_ENV['GOOGLE_CLIENT_ID']);
        $this->client->setClientSecret($_ENV['GOOGLE_CLIENT_SECRET']);
        $this->client->setRedirectUri('http://127.0.0.1:8000/iniciarsessao');
        $this->client->addScope('email');
        $this->client->addScope('profile');
    }

    public function authenticated()
    {
        if(isset($_GET['code'])){
           $token = $this->client->fetchAccessTokenWithAuthCode($_GET['code']);
           $this->client->setAccessToken($token['access_token']);
           $googleService = new ServiceOauth2($this->client);
        $this->data = $googleService->userinfo->get(); //O Google retorna todos os dados do usuário.
       
        return true;
        }

        return false;
    }
    public function getData()
    {
        return $this->data;
    }
    public function generateLink()
    {
        return $this->client->createAuthUrl();
    }
}
?>


