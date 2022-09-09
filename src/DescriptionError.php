<?php
namespace Dsblack\Dserror;

use Exception;

class DescriptionError{
    protected $lenguage='en';
    protected $gateway;
    protected $error;
    protected $validlenguages=[];
    protected $validgetway=[];

    public function __construct()
    {
        $this->validlenguages=include(__DIR__."/validslenguage.php");
        $this->validgetway=$this->scan();
    }

    protected function errorMSG($data)
    {
        switch ($data) {
            case 'Gateway':
                $errorMSG=$data.' not valid, valid types are: '.implode(", ",$this->validgetway).'.';
                break;
            case 'Lenguage':
                $errorMSG=$data.' not valid, valid types are: '.implode(", ",$this->validlenguages).'.';
                break;
        }
        
        return $errorMSG;
    }

    public function setGateway($gateway){
        if(!in_array($gateway,$this->validgetway)){
            throw new Exception($this->errorMSG('Gateway'));
        }

        $this->gateway = $gateway;
        return $this;
    }

    public function setLenguage($lenguage='en')
    {
        if(!in_array($lenguage,$this->validlenguages)){
            throw new Exception($this->errorMSG('Lenguage'));
        }

        $this->lenguage = $lenguage;
        return $this;
    }

    public function setError($error)
    {
        $this->error=$error;
        return $this;
    }

    public function handle()
    {
        if(!file_exists(__DIR__."./Dictionaries/$this->gateway/$this->lenguage.php")){
            throw new Exception('Currently this Gateway ('.$this->gateway.') is not supported in this language');
        }

        $data=include(__DIR__."./Dictionaries/$this->gateway/$this->lenguage.php");
        
        return $data[$this->error] ?? $data['*']; 
    }

    protected function scan(){
        $data=scandir(__DIR__."./Dictionaries",SCANDIR_SORT_NONE);
        $data=array_splice($data,2,(count($data)-2));
        return $data;
    }
}