<?php

namespace App\Http\Helpers;

class Helpers{
  // this class will contain static functions to be used as helpers, such as pathing and calculations that can be used on different projects.  This file will be improved incrementially with further use.

  public static function dollar_to_cents(string $value):int{
    return (int) (string) ((float) preg_replace("/[^0-9.]/", "", $value) * 100);
  }

  public static function remove_hour_from_timestamp($timestamp){
    return date('d-m-Y', $timestamp);
  }

  public static function convert_from_timestamp($timestamp){
    return date("d/m/Y H:i:s",$timestamp);
  }

  public static function convert_to_timestamp($date){
    return strtotime($date);
  }

  public static function alter_timestamp($alteration, $timestamp){
    return strtotime($alteration, $timestamp);
  }

  function secure_random_string($length){
    $random_string = '';

    for($i = 0; $i < $length; $i++){
      $number = random_int(0,36);
      $character = base_convert($number, 10, 36);
      $random_string .= $character;
    }
    return $random_string;
  }

  public static function remove_keys_from_array($array){
    return array_values($array);
  }

  public static function translate_date($date){
    $months = [
      "01" => "Janvier",
      "02" => "Février",
      "03" => "Mars",
      "04" => "Avril",
      "05" => "Mai",
      "06" => "Juin",
      "07" => "Juillet",
      "08" => "Août",
      "09" => "Septembre",
      "10" => "Octobre",
      "11" => "Novembre",
      "12" => "Décembre"
    ];

    $date_components = explode("/", $date);
    $day = $date_components[0];
    $month = $date_components[1];
    $year = $date_components[2];

    if($day < 10){
      $day = "0".$day;
    }

    return $day." ".$months[$month]." ".$year;
  }
}