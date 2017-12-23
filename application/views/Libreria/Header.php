<?php

defined('BASEPATH') OR exit('No direct script access allowed');



?>
<html>
<head>
  <script src="<?php  base_url()?>Assets/js/jquery.min.js"></script>
<script>

$(document).ready(function(){
  alert("entor el jquery");
});
</script>
<body id="app">
  <!-- Importamos Vue.js (Siempre al final) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.2/vue-resource.min.js"></script>

  <script src="./js/jquery.min.js"></script>
<?php echo base_url('css/bootstrap.min.css');?>

    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
      <div class="navbar">
           <a class="nav-item nav-link active" href="./">Inicio <span class="sr-only">(current)</span></a>
           <a class="nav-item nav-link" href="./paciente.php">Paciente</a>
           <a class="nav-item nav-link" href="./lista">Lista de paciente</a>
           <a class="nav-item nav-link disabled" href="#">Disabled</a>
         </div>

    </nav>
