<?php

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

}


