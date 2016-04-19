<?php
date_default_timezone_set( 'America/Recife' );
#############################################################################
#############  FUNCAO PARA GRAVAR VALOR NO BANCO DE DADOS   ##################
#############################################################################
function alteraValor($valor){
	// EXPLODE - quebra uma string por um delimitador salvando em um array
	// o delimitador utilizado .
	 
	$novovalor = explode(".",$valor);
	//return $novovalor[2].".".$novovalor[1].".".$novovalor[0];
    return $novovalor[0].$novovalor[2].$novovalor[1];

}
#############################################################################
#############  FUNCAO PARA GRAVAR DATA NO BANCO DE DADOS   ##################
#############################################################################
function alteraData($data){
	// EXPLODE - quebra uma string por um delimitador salvando em um array
	// o delimitador utilizado /
	 
	$novadata = explode("/",$data);
	return $novadata[2]."-".$novadata[1]."-".$novadata[0];

}

#############################################################################
##########  FUNCAO PARA RECUPERAR DATA DO BANCO DE DADOS   ##################
#############################################################################
function alteraData2($data){
	// EXPLODE - quebra uma string por um delimitador salvando em um array
	// o delimitador utilizado /
	 
	$novadata = explode("-",$data);
	return $novadata[2].".".$novadata[1].".".$novadata[0];

}
#############################################################################
##########  FUNCAO PARA RECUPERAR DATA DO BANCO DE DADOS   ##################
#############################################################################
function alteraData4($data){
  // EXPLODE - quebra uma string por um delimitador salvando em um array
  // o delimitador utilizado /
   
  $novadata = explode("-",$data);
  return $novadata[2]."-".$novadata[1]."-".$novadata[0];

}

function alteraData5($data){
  // EXPLODE - quebra uma string por um delimitador salvando em um array
  // o delimitador utilizado /
   
  $novadata = explode("-",$data);
  return $novadata[2]."/".$novadata[1]."/".$novadata[0];

}

#############################################################################
#############  FUNCAO PARA GRAVAR DATA NO BANCO DE DADOS   ##################
#############################################################################
function alteraData3($data){
	// EXPLODE - quebra uma string por um delimitador salvando em um array
	// o delimitador utilizado /
	 
	$novadata = explode("/",$data);
	return $novadata[2]."-".$novadata[1]."-".$novadata[0];

}

#############################################################################
#############  FUNCAO PARA GRAVAR DATA NO BANCO DE DADOS   ##################
#############################################################################
function alteraData6($data){
	// EXPLODE - quebra uma string por um delimitador salvando em um array
	// o delimitador utilizado /
	 
	$novadata = explode("-",$data);
	return $novadata[0]."-".$novadata[1]."-".$novadata[2];

}

#############################################################################
#########################  FUNCOES DE SOMA  #################################
#############################################################################
function soma($num1, $num2){

	echo "Somando $num1 + $num2 ";
	$soma = $num1 + $num2;
	return $soma;
}

function mais5($num=10){
	$soma = $num + 5;
	return $soma;
}
#############################################################################
#########################  FUNCOES DE SUBTRACAO  ############################
#############################################################################
function resultado($num1, $num2){

	echo "Somando $num1 - $num2 ";
	$resultado = $num1 - $num2;
	return $resultado;
}
/*
function mais5($num=10){
	$soma = $num + 5;
	return $soma;
}
*/
#############################################################################
#########################  FUNCOES DE DATA  #################################
#############################################################################
function retornames($data){
	//$mes = substr($data,3,2);
	$mes = $data;
	switch($mes){
		case 1: $ext = "Jan"; break;
		case 2: $ext = "Fev"; break;
		case 3: $ext = "Mar"; break;
		case 4: $ext = "Abr"; break;
		case 5: $ext = "Mai"; break;
		case 6: $ext = "Jun"; break;
		case 7: $ext = "Jul"; break;
		case 8: $ext = "Ago"; break;
		case 9: $ext = "Set"; break;
		case 10: $ext = "Out"; break;
		case 11: $ext = "Nov"; break;
		case 12: $ext = "Dez"; break;
	}
	return $ext;
}
#############################################################################
#########################  FUNCOES DE VALOR  ################################
#############################################################################
function formata_dinheiro($valor){
	
	$valor=number_format($valor, 2, ',', '');
	
	return "R$ ".$valor;
	
}
if (isset($_GET['mes']))
	$mes_hoje=$_GET['mes'];
else
	$mes_hoje=date('m');

if (isset($_GET['ano']))
	$ano_hoje=$_GET['ano'];
else
	$ano_hoje=date('Y');
########################################################################
##############   FUNCAO PARA NOME DAS IMAGENS     ######################
########################################################################

//$nome_arquivo = $_POST["nomeimagem"];
//function nomeimagem ($nome_arquivo){
    
//    return $nome_arquivo;
//}
    

########################################################################
##############   FUNCAO PARA UPLOAD DE MULTIPLAS IMAGENS     ###########
########################################################################
    function enviar_arquivo($arquivo = "imagem"){
    set_time_limit (0);
    /*$pasta="../../anexos/";*/                 // LIBERAR PARA VERSAO FINAL E COMENTAR A LINHA ABAIXO
    $pasta="../../anexos/";
	$nome_original = $_FILES[$arquivo]['name'];
    $tamanho = strlen($nome_original);
	$ext = substr($nome_original,$tamanho-3);
    $z = rand(1,100);
	$nome_arquivo = md5(time()) . $z.".".$ext;
	
    if($_FILES['imagem']['name']){
		if(move_uploaded_file($_FILES[$arquivo]['tmp_name'],$pasta.$nome_arquivo)){
			return $nome_arquivo;
   }  }  }

########################################################################
###########   FUNCAO PARA UPLOAD DE ARQUIVOS POR EXTENSÃO    ###########
########################################################################
function enviar_arquivo_simples($arquivo = "arquivo"){
    
    set_time_limit (0);
	//$pasta="../../anexos/";
    $pasta="../../anexos/";
	$nome_original = $_FILES['arquivo']['name']; 
	$tamanho = strlen($nome_original);
    $ext = substr($nome_original,$tamanho-3);
    $ext = strrchr($nome_original,'.');
    #####################################################
    $limitar_ext = "sim";                                   # LIMITA AS EXTENSÕES PARA UPLOAD 
    //$extensoes_validas = array(".cdr",".jpg",".jpeg",".CDR",".JPG",".JPEG");
    //$extensoes_validas = array(".mp3",".avi",".mov","flv","rmv","rmvb",".AVI",".MOV","FLV","RMV","RMVB");
    $extensoes_validas = array(".doc",".docx",".pfd",".DOC",".DOCX",".PDF");
    #####################################################
    $nome_arquivo = md5(time()) . ".".$ext;

    if($_FILES['arquivo']['name']){
        if ($limitar_ext == "sim" && !in_array($ext,$extensoes_validas)){
         
         echo "
         <script>
         alert('Extensão de arquivo Incorreta, Por favor insira um arquivo válido!');
         history.back();
         </script>";
         
        }else{
              if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$pasta.$nome_arquivo)){
        		return $nome_arquivo;
                }  
            }
        
                                }
    }
########################################################################
###########   FUNCAO PARA UPLOAD DE ARQUIVOS POR EXTENSÃO    ###########
########################################################################
function enviar_laudos($arquivo = "arquivo"){
    
    set_time_limit (0);
	//$pasta="../../anexos/";
    $pasta="../../laudos/";
	$nome_original = $_FILES['arquivo']['name']; 
	$tamanho = strlen($nome_original);
    $ext = substr($nome_original,$tamanho-3);
    $ext = strrchr($nome_original,'.');
    #####################################################
    $limitar_ext = "sim";                                   # LIMITA AS EXTENSÕES PARA UPLOAD 
    //$extensoes_validas = array(".cdr",".jpg",".jpeg",".CDR",".JPG",".JPEG");
    //$extensoes_validas = array(".mp3",".avi",".mov","flv","rmv","rmvb",".AVI",".MOV","FLV","RMV","RMVB");
    $extensoes_validas = array(".doc",".docx",".pdf",".DOC",".DOCX",".PDF");
    #####################################################
    $nome_arquivo = md5(time()) . ".".$ext;

    if($_FILES['arquivo']['name']){
        if ($limitar_ext == "sim" && !in_array($ext,$extensoes_validas)){
         
         echo "
         <script>
         alert('Extensão de arquivo Incorreta, Por favor insira um arquivo válido!!!');
         history.back();
         </script>";
         
        }else{
              if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$pasta.$nome_arquivo)){
        		return $nome_arquivo;
                }  
            }
        
                                }
    }
    
########################################################################
###########   FUNCAO PARA UPLOAD DE ARQUIVOS POR EXTENSÃO    ###########
########################################################################
function enviar_tracados($arquivo = "arquivo"){
    
    set_time_limit (0);
	//$pasta="../../anexos/";
    $pasta="../../tracados/";
	$nome_original = $_FILES['arquivo']['name']; 
	$tamanho = strlen($nome_original);
    $ext = substr($nome_original,$tamanho-3);
    $ext = strrchr($nome_original,'.');
    #####################################################
    $limitar_ext = "sim";                                   # LIMITA AS EXTENSÕES PARA UPLOAD 
    //$extensoes_validas = array(".cdr",".jpg",".jpeg",".CDR",".JPG",".JPEG");
    //$extensoes_validas = array(".mp3",".avi",".mov","flv","rmv","rmvb",".AVI",".MOV","FLV","RMV","RMVB");
    $extensoes_validas = array(".doc",".docx",".pdf",".DOC",".DOCX",".PDF");
    #####################################################
    $nome_arquivo = md5(time()) . ".".$ext;

    if($_FILES['arquivo']['name']){
        if ($limitar_ext == "sim" && !in_array($ext,$extensoes_validas)){
         
         echo "
         <script>
         alert('Extensão de arquivo Incorreta, Por favor insira um arquivo válido!!! PDF OU DOC');
         history.back();
         </script>";
         
        }else{
              if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$pasta.$nome_arquivo)){
        		return $nome_arquivo;
                }  
            }
        
                                }
    }
    
    
    
#############################################################################
#########################  FUNCOES DE PORCENTAGEM  ############################
#############################################################################
// Função de porcentagem: Quanto é X% de N?
function porcentagem_xn ( $porcentagem, $total ) {
	return ( $porcentagem / 100 ) * $total;
}
 
// Função de porcentagem: N é X% de N
function porcentagem_nx ( $valor, $total ) {
	return ( $valor * 100 ) / $total;
}
 
// Função de porcentagem: N é N% de X
function porcentagem_nnx ( $parcial, $porcentagem ) {
	return ( $parcial / $porcentagem ) * 100;
}


########################################################################
###########   FUNCAO UNIQUE PARA ITENS DO ARRAY    ###########
########################################################################



function unique($array) {
    $return = array();
    foreach ($array AS $key=>$element) {
        if (is_array($element)) {
            $return[$key] = unique($element);
        } elseif (!in_array($element,$return)) {
                  $return[$key] = $element;
                  sort($return);
        }
    }
    return $return;
}



########################################################################
###########   FUNCAO CORTAR CARACTERES   ###########
########################################################################



function limita_caracteres($texto, $limite, $quebra = true){
   $tamanho = strlen($texto);
   if($tamanho <= $limite){ 
      $novo_texto = $texto;
   }else{ 
      if($quebra == true){
         $novo_texto = trim(substr($texto, 0, $limite))."";
      }else{ 
         $ultimo_espaco = strrpos(substr($texto, 0, $limite), " "); 
         $novo_texto = trim(substr($texto, 0, $ultimo_espaco)).""; 
      }
   }
   return $novo_texto; 
}


########################################################################
###########   FUNCAO CLIQUE   ###########
########################################################################


########################################################################
###########   FUNCAO PARA UPLOAD DE ARQUIVOS POR EXTENSÃO    ###########
########################################################################
function enviar_video_simples($arquivo = "arquivo"){
    
    set_time_limit (0);
	//$pasta="../../anexos/";
    $pasta="../../anexos/";
	$nome_original = $_FILES['arquivo']['name']; 
	$tamanho = strlen($nome_original);
    $ext = substr($nome_original,$tamanho-3);
    $ext = strrchr($nome_original,'.');
    #####################################################
    $limitar_ext = "sim";                                   # LIMITA AS EXTENSÕES PARA UPLOAD 
    //$extensoes_validas = array(".cdr",".jpg",".jpeg",".CDR",".JPG",".JPEG");
    $extensoes_validas = array(".avi",".mov","flv","rmv","rmvb");
    #####################################################
    $nome_arquivo = md5(time()) . ".".$ext;

    if($_FILES['arquivo']['name']){
        if ($limitar_ext == "sim" && !in_array($ext,$extensoes_validas)){
         
         echo "
         <script>
         alert('Extensão de arquivo Incorreta, Por favor insira um arquivo válido!');
         history.back();
         </script>";
         
        }else{
              if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$pasta.$nome_arquivo)){
        		return $nome_arquivo;
                }  
            }
        
                                }
    }
##############################################################################################
function enviar_audio($arquivo = "arquivo"){
    
    set_time_limit (0);
	//$pasta="../../anexos/";
    $pasta="arquivos/";
	$nome_original = $_FILES['arquivo']['name']; 
	$tamanho = strlen($nome_original);
    $ext = substr($nome_original,$tamanho-3);
    $ext = strrchr($nome_original,'.');
    #####################################################
    $limitar_ext = "sim";                                   # LIMITA AS EXTENSÕES PARA UPLOAD 
    //$extensoes_validas = array(".cdr",".jpg",".jpeg",".CDR",".JPG",".JPEG");
    $extensoes_validas = array(".mp3");
    #####################################################
    $nome_arquivo = md5(time()) . ".".$ext;

    if($_FILES['arquivo']['name']){
        if ($limitar_ext == "sim" && !in_array($ext,$extensoes_validas)){
         
         echo "
         <script>
         alert('Extensão de arquivo Incorreta, Por favor insira um arquivo válido!');
         history.back();
         </script>";
         
        }else{
              if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$pasta.$nome_arquivo)){
        		return $nome_arquivo;
                }  
            }
        
                                }
 }
 
 
 
 

/*
checando se checkbox esta marcado com php
*/
/*
if(isset($check)){
//checkado
}else{
//não checkado
}
*/
?>