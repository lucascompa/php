<?php
	
    function error_handler($code, $message, $file, $line) {
        echo $code." -- ". $message . " -- ". $file ." -- ". $line;
    }

    set_error_handler(error_handler);

	require_once "sg/vendor/autoload.php";

    use \Rain\Tpl;
    use \Slim\Slim;
    
    $lucas = new \instar_funcoes\Lucas();


    $config = array(
                     "tpl_dir"       => "views/",
                     "cache_dir"     => "viewscache/"
    );
    Tpl::configure( $config );

	$app = new \Slim\Slim();

    $app->get('/', function() {
        
        $t = new Tpl;
        
        //$dados['usNome'] = "Lucas";
        //$dados['usEmail'] = "Lucas@instar.com.br";
        
        $dados = array(
            "versao" => "0.0.1b",
            "desenvolvedor" => "Lucas José Severino",
            "profissao" => "Empresário e Advogado OAB/SP 392.999",
            "usuarios" => array(
                ["usNome" => "Lucas", "usEmail" => "lucas@instar.com.br"],
                ["usNome" => "Muriele", "usEmail" => "murieledaiane@gmail.com"]
            )
            );

        $admin = array(
            array("login" => "lucas", "senha" => "1234"),
            array("login" => "muri", "senha" => "1234")
            );

        $t->assign('title','Hello Instar');
        $t->assign($dados);
        $t->assign('admin', $admin);
        $t->draw('page');
    });

    $app->post('/', function () {
        echo "Veio do post ".$_POST['login'] . " e ". $_POST['senha'] ;
    });

	$app->get('/hello/:name', function ($name) {
	    echo "Hello, " . $name;
	});

	$app->run();


?>