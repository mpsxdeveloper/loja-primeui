<?php
    
    if(!isset($_SESSION)) {
        session_start();
    }
    
    if(!isset($_SESSION['username'])) {
        header('Location: ../index.html');
    }
    else {
        $username = $_SESSION['username'];
        $id = $_SESSION['id'];
    ?>
    <div id="header" title="Loja">
        <p style="text-align: right;">Usuário: <?php echo $username; ?></p>
        <script>
            $(document).ready(function() { 
                $('#header').puipanel();
            });
        </script>
    </div>    
        
    <?php
        }
    ?>