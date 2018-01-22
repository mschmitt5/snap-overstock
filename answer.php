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

$currentExchangeRate = 6.696;
$actualRetailPrice = 2.29;
$walletBalance = 118.43;

echo buyBuyBuy($actualRetailPrice, $walletBalance, $currentExchangeRate) . PHP_EOL;