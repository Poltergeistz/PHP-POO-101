<?php
class StrUtils{
    private $str;

    public function __construct($str){
        $this->str = $str;
        $this->bold = '<Strong>'.$str.'</Strong>';
        $this->italic = '<i>'.$str.'</i>';
        $this->underline = '<p style="text-decoration:underline;">'.$str.'</p>';
        $this->capitalize = strtoupper($str);
        $this->uglify = strtoupper('<p style="text-decoration:underline;"><Strong><i>'.$str.'</i></Strong></p>');
    }

    public function bold(){
        return $this->bold;
    }
    public function italic(){
        return $this->italic;
    }
    public function underline(){
        return $this->underline;

    }
    public function capitalize(){
        return $this->capitalize;
    }
    public function uglify(){
        return $this->uglify;
    }
}