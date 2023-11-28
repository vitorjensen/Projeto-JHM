<?php
namespace App\Library;

use App\Models\Google;

class Authenticate
{
    public function authGoogle($data)
    {

        $user = new Google();
        $userFound = $user->where('email', $data->email)->first();
        if(!$userFound){

            $user->insert([
                'firstName' => $data->givenName,
                'lastName' => $data->familyName,
                'email' => $data->email,
                'avatar' => $data->picture,
            ]);
        }
        session()->put('user', $userFound);
        session()->put('auth', true);

        return redirect()->to('/');
    }
public function logout()
{
    unset($_SESSION['user'], $_SESSION['auth']);
}
  
}
?>