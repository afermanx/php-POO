<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>e-Construtora</title>
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


 $result= $calcular->multiplicar()/100;


?>






<div class="resgister-container">
<div class="content">
    <section>
    <img src="../../assets/logo.png" />
    <h1>Construtora</h1>
    <p>Calculo de volume </p>   
                   
               
    </section>
    <form  action="" method="post">
    <select  id="local">
  <option value="">Selecione uma das opções</option>
  <option disabled value="">Laje Maciça</option>
  <option disabled value="">Laje com Treliça</option>
  <option disabled value="">Viga</option>
  <option disabled value="">Contra Piso</option>   <!--  Implementar demais calculo em um proxima versão-->
  <option disabled value="">Piso</option>
  <option disabled value="">Pilar</option>
  <option  disabled value="">Bloco</option>
  <option disabled value="">Sapata</option>
  <hr>
  <option disabled value="">Ainda nao implementado</option>

</select>


  <input required  type='number' name="base" placeholder="Largura (M)"
  
  />
  <input required type='number' name="altura" placeholder="Altura (M)"
  
  />
  <input required  type='number' name="comprimento" placeholder="Comprimento"
  
  /> 
  <!--  Implementar demais calculo em um proxima versão-->
  <input  disabled value="log" type='number'placeholder="Quantidade (M³)" 
  />


 
  <input type="submit" class="button"  name ="calc" value="Cacular"/>
    </form>
    <p>=</p>
    <label ><?php echo $result= number_format($result, 2, ',', '.');  ?></label>
</div>

</div> 


</body>
</html>