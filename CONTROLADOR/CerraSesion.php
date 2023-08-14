<?php
session_start();

if(isset($_SESSION['usuarioValido'])){
session_destroy();

echo'
<script> 
window.location.href="../index.html";
</script>
';

}
?>