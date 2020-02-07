<?php

if (isset($_REQUEST['funcao'])){
    require_once('../classes/Kilometragem.php');
    $funcao = $_REQUEST['funcao'];
    switch ($funcao) {
        case 'cadastroKM':
            KilometragemController::cadastroKM();
            break;
    }
}else{
    require_once('classes/Kilometragem.php');
}

class KilometragemController {
    
    public static function showTableKM(){
        $data = new Kilometragem();
        $data = $data->getKilometragens();
        
        $return = '';
        foreach ($data as $row){
            $return .= '
                <tr linha-km="'.$row->id.'">
                    <td>'.$row->nome_motorista.'</td>
                    <td>'.$row->km.'</td>
                </tr>
            ';
        }
        return $return;
    }

    public static function cadastroKM(){
        $classe = new Kilometragem();
        $classe->nome_motorista = $_POST['nome_motorista'];
        $classe->km = $_POST['km'];

        if($classe->cadastrarKilometragem()){
            header('Location: ../index.php');
            exit;
        }else{
            echo "Erro ao inserir os dados, tente novamente mais tarde.";
        }
        
    }

}