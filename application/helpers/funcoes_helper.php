<?php

function nivel($id){
	switch ($id) {
	 case 1:
	    echo "Básico";
	    break;
	case 2:
	    echo "Intermediário";
	    break;
	case 3:
	    echo "Avançado";
	    break;
	case 4:
	    echo "Fluente";
	    break;
	default:
	    echo "Nenhum";
	    break;
            }
}

function status($id){
	switch ($id) {
	 case 0:
	    echo "<div class='label label-inativo'>Inativo</div>";
	    break;
	case 1:
	    echo "<div class='label label-ativo'>Ativo</div>";
	    break;
            }
}
