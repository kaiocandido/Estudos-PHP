<nav>
    <ul>
        <?php

        $nivelDeAcesso = "admin";

            switch ($nivelDeAcesso){
                case "admin":
                    ?>
                    <li>USUARIO ADMIN</li>
                <?php
                break;
                case "usuario":
                    ?>
                    <li>USUARIO USUARIO</li>
                <?php
                break;
                case "convidado":
                    ?>
                    <li>USUARIO CONVIDADO</li>
                <?php
                break;
                default:
                ?>
                <li>PAGINA INICIAL</li>
                <?php
                break;
            }

            ?>
    </ul>
</nav>