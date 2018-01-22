<?php
/**
 * Created by PhpStorm.
 * User: schmi
 * Date: 1/22/2018
 * Time: 8:07 AM
 */

function bitcoinWalletBalance() : float {
    $oneBitcoin = 1;
    $oneBitcoinCash = .22;
    $oneBitcoin = $oneBitcoinCash;
    $priceInBitcoin = 2*$oneBitcoin;
    $bitcoinWalletBalance = 3*$oneBitcoinCash;
    $newBitcoinWalletBalance = $bitcoinWalletBalance - $priceInBitcoin;
    if ($priceInBitcoin <= $bitcoinWalletBalance) {
        return ($newBitcoinWalletBalance);
    } else {
        return (false);
    }
}




