<?php

namespace App\Services;
use App\SocialFacebookAccount;
use App\Models\Member;
use Laravel\Socialite\Contracts\User as ProviderUser;
 
class SocialFacebookAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
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
 
            $user = Member::whereEmail($providerUser->getEmail())->first();
 
            if (!$user){
                $user = Member::create([
                    //'facebook_id' => $socialUser->getId(),
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                    'nickname' => $providerUser->getNickname(),
                    'avatar' => $providerUser->getAvatar(),
                    'password' => md5(rand(1,10000)),
                ]);
            }
 
            $account->user()->associate($user);
            $account->save();
 
            return $user;
        }
    }
}