<?php
class StrUtils{
    private $_str;

    public function __construct($_str){
        $this->str = $_str;
    }

    public function bold(){
        return '<Strong>'.$this->str.'</Strong>';
    }
    public function italic(){
        return '<i>'.$this->str.'</i>';
    }
    public function underline(){
        return '<u>'.$this->str.'</u>';

    }
    public function capitalize(){
        return strtoupper($this->str);
    }
    public function uglify(){
        return '<Strong><i><u>'.$this->str.'</Strong></i></u>';
    }
}