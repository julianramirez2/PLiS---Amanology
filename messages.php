<?php
    session_start();

    // Si no hay mensaje que mandar
    if(empty($_SESSION['messages'])){
        return;
    }

    // Se manda el mensaje 
    $messages = $_SESSION['messages'];
    unset($_SESSION['messages']);
?>

<!-- Forma de como se mostraran los mensajes -->
<p>
    <?php foreach($messages as $message): ?>
    <p> <?php echo $message; ?> </p>
    <?php endforeach; ?>
</p>
