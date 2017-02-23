
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        // put your code here
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        
        $p[0] = new Pessoa("Pedro", 22, "M");
        $p[1] = new Pessoa("José", 28, "M");
        
        $l[0] = new Livro("O nome da Rosa", "Davis Cameron", 300, $p[0]);
        $l[1] = new Livro("Vidas Secas", "José Saramago", 500, $p[0]);
        $l[2] = new Livro("PHP Avançado", "Gafanhoto", 400, $p[1]);
        
        $l[0]->abrir();
        $l[0]->folhear(80);
        $l[0]->avancarPag();
        $l[0]->avancarPag();
        $l[0]->voltarPag();
        $l[0]->detalhes();
        ?>
</pre>
    </body>
</html>
