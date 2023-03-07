<?php

$NamaProduk ="kosmetik";
    echo "Kosmetik dibeli = $Namaproduk" . PHP_EOH;

switch ($NamaProduk){
    case 'Wardah';
        echo "Harga barang tersebut adalah Rp500.000"; . PHP_EOH;
      break;
    case 'emina';
        echo "Harga barang tersebut adalah Rp450,000"; . PHP_EOH;
        break;
    case 'Make over';

        echo "Harga barang tersebut adalah Rp400.000"; . PHP_EOH;
        break;
    case 'Somethinc';
        echo "Harga barang tersebut adalah350.000"; . PHP_EOH;
        break;
    case 'Purbasari';
        echo "Harga barang tersebut adalah300.000"; . PHP_EOH;
        break;
    
    default:
        echo "Barang tidak tersediah" . PHP_EOH;
        break;
}