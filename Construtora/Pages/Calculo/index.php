<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Exemplo</title>
   <meta charset = "UTF-8">
   <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

include_once("../../classes/Calculator.php");



$calcular = new Calculator();

if(isset($_POST['calc'])){
  $base = $_POST['base'];
  $altura = $_POST['altura'];
  $comprimento = $_POST['comprimento'];

}

$calcular -> setbase(@$base);
$calcular -> setaltura(@$altura);
$calcular -> setcomprimento(@$comprimento);



?>






<div class="resgister-container">
<div class="content">
    <section>
    <img src="../../assets/logo.png" />
    <h1>Construtora</h1>
    <p>Calculo de volume </p>   
                   
               
    </section>
    <form  action="" method="post">
    <select id="local">
  <option value="">Selecione uma das opções</option>
  <option value="">Laje Maciça</option>
  <option value="">Laje com Treliça</option>
  <option value="">Viga</option>
  <option value="">Contra Piso</option>
  <option value="">Piso</option>
  <option value="">Pilar</option>
  <option value="">Bloco</option>
  <option value="">Sapata</option>
</select>


  <input required  type='number' name="base" placeholder="Largura (M)"
  
  />
  <input required type='number' name="altura" placeholder="Altura (M)"
  
  />
  <input required  type='number' name="comprimento" placeholder="Comprimento"
  
  /> 
  <input   value="log" type='number'placeholder="Quantidade (M³)"
  />


 
  <input type="submit" class="button"  name ="calc" value="Cacular"/>
    </form>
    <p>=</p>
    <label value="log"><?php echo $calcular->multiplicar();?></label>
</div>

</div> 


</body>
</html>