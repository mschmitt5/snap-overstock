<?php
/**
 * Created by PhpStorm.
 * User: schmi
 * Date: 1/22/2018
 * Time: 8:39 AM
 */

function buyBuyBuy(float $btcPrice, float $walletBalance, float $exchangeRate) : float {
    $actualBtcPrice = $btcPrice / $exchangeRate;
    $newBalance = $walletBalance - $actualBtcPrice;
    return($newBalance);
}