<?php




class Calculator{
    

    private   $base;
    private   $altura;
    private   $comprimento;
  
  
  
    public function setbase($base){
  
      $this -> base = $base;
  }
  
  public function getbase(){
      return $this -> base;
  }
  
  public function setaltura($altura){
  
      $this -> altura = $altura;
  }
  
  public function getaltura(){
      return $this -> altura;
  }
  
  
  public function setcomprimento($comprimento){
  
      $this -> comprimento = $comprimento;
  }
  
  public function getcomprimento(){
      return $this -> comprimento;
  }
  
  
  public function multiplicar(){
  
      return $this ->base * $this ->altura * $this ->comprimento;
  }
  
  }


 
    



?>