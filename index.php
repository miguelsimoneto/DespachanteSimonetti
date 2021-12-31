<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<?php  
$servername = "localhost";
         $username = "root";
         $password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=cadastro", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
} 
?>  



<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Despachante<br>Simonetti</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Quem somos</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Servicos</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contato</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w2-jumbo"><b>Há mais de 30 anos no mercado</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Nosso trabalho</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
        Pagar seu IPVA 2022;
        Fazer o licenciamento;
        Consultar sua CNH;
        Consultar os débitos do seu veículo, como multas, licenciamento, DPVAT, etc.;
        Emitir sua e-CRLV;
        Fazer a transferência do veículo;
        Pagar multas e débitos atrasados, com parcelamento;
        Pagar tudo parcelado em até 12x no cartão ;
        Ter um atendimento personalizado por WhatsApp, simples e rápido para tirar todas as suas dúvidas.
    </div>

    <div class="w3-half">
        Com serviços completos e experiência significativa de mais de 12 anos nos mais variados casos referentes ao Detran, tais como: Licenciamento, Transferência de Veículos, Cadastro de Motor, Baixa Definitiva, 1 Registro no Estado, Apreensão de Veículo, Liberação de Sinistro, Reciclagem, Placas Mercosul outros Serviços relacionados no Detran sp.
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>


  <!-- Packa localizacao -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Nossa localização.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.0737312190995!2d-47.40647838540857!3d-22.57634553183819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fdf8d4edc5eb8d%3A0xf3943db9692c308a!2sDespachante%20Simonetti!5e0!3m2!1spt-PT!2sbr!4v1640384749025!5m2!1spt-PT!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>

  
 
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contato.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Fale conosco  Preencha o formulário e me preencha com os detalhes :)</p>
    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="w3-section">
        <label>Nome</label>
        <input class="w3-input w3-border" type="text" name="XNome">
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="XEmail">
      </div>
      <div class="w3-section">
        <label>Menssagem</label>
        <input class="w3-input w3-border" type="text" name="XComente">
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Enviar</button>
    </form>  
  </div>
  
<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by miguel simoneto <a href="despsimonetti@gmail.com" title="miguel simoneto" target="_blank" class="w3-hover-opacity"></a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
<?php


$stmt = $conn->prepare("INSERT INTO clientes(nome, email, comente)
VALUES (:nome, :email, :comentario)");
$stmt->bindParam(':nome', $Vnome);
$stmt->bindParam(':email', $Vemail);
$stmt->bindParam(':comentario', $Vcomente);

if (isset($conn)) {
    $Vnome = ($_POST['XNome']);
    $Vemail = ($_POST['XEmail']);
    $Vcomente = ($_POST['XComente']);
    $stmt->execute();
    echo "New records created successfully";
    }
    $conn = null;
?>
</body>
</html>
