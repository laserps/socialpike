<?php

namespace App\Services;
use App\SocialFacebookAccount;
use App\User;
use Laravel\Socialite\Contracts\User as ProviderUser;
 
class SocialFacebookAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $data = [
            //''  =>  $providerUser->getId();
            'nickname'  =>  $providerUser->getNickname(),
            'name'  =>  $providerUser->getName(),
            'email'  =>  $providerUser->getEmail(),
            'avatar'  =>  $providerUser->getAvatar(),
            'password' => bcrypt(rand(1,10000))
        ];

        $account = SocialFacebookAccount::whereProvider('facebook')
            ->whereProviderUserId($providerUser->getId())
            ->first();
        if($account){
            return $account->user;
        }else{
            $account = new SocialFacebookAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'facebook'
            ]);
            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user){
                $user = User::create($data);
            }
            //Auth::guard('member')->login($user);
            $account->user()->associate($user);
            $account->save();
            return $user;
        }
    }
}