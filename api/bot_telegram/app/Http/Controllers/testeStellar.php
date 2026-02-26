<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Soneso\StellarSDK\CreateAccountOperationBuilder;
use Soneso\StellarSDK\Crypto\KeyPair;
use Soneso\StellarSDK\Network;
use Soneso\StellarSDK\StellarSDK;
use Soneso\StellarSDK\TransactionBuilder;
use Soneso\StellarSDK\Util\FriendBot;

class testeStellar extends Controller
{
    public function createAccount() 
    {
        $keyPair = KeyPair::random();
        $funded = FriendBot::fundTestAccount($keyPair->getAccountId());
    }
}
