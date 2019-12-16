<?php
/**
* Interface WeatherProvider
*
* Defines a 'WeatherProvider' responsible for obtaining weather
* information from a particular source, i.e. BBC Weather
*
* @package App\Repository
*/
interface WeatherProvider
{
/**
* Get the name of the provider, i.e. 'BBC Weather'
*
* @return string
*/
public function getProviderName(): string;
/**
* Retrieve the current weather summary for a given location
*
* @param string $location The name of a UK based location, i.e.'Manchester' or 'London'
*
* @return WeatherDetails The value object containing the weather details
*/
public function getCurrentWeather(string $location): WeatherDetails;
}

class WeatherDetails implements WeatherProvider
{
  public $provider;
  public $high;
  public $low;
  public $summary;
  
  public function __construct($provider, $high, $low, $summary){
    $this->provider = $provider;
    $this->high = $high;
    $this->low = $low;
    $this->summary = $summary;
  }

  public function getProvider(){
    return $this->provider;
  }

  public function getHigh(){
    return $this->high;
  }

  public function getLow(){
    return $this->low;
  }

  public function getSummary(){
    return $this->summary;
  }

  public function getProviderName(): string {
    return $this->provider;
  }

  public function getCurrentWeather(string $location): WeatherDetails {
    $weatherDetails = new WeatherDetails($this->provider, $this->high, $this->low, $this->summary);
    
    return $weatherDetails;

  }

}

$weatherDetails1 = new WeatherDetails("BBC", 9, 5, "Rain with spells");
$weatherDetails2 = new WeatherDetails("MET OFFICE", 11, 6,"Cloudy with widespread showers");
