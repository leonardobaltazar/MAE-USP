<?php

/**
 * 
 * Copyright © 2017 Seção Técnica de Informática - STI / ICMC <sti@icmc.usp.br>
 * 
 * Este programa é um software livre; você pode redistribuí-lo e/ou 
 * modificá-lo sob os termos da Licença Pública Geral GNU como 
 * publicada pela Fundação do Software Livre (FSF); na versão 3 da 
 * Licença, ou (a seu critério) qualquer versão posterior.
 * 
 * Este programa é distribuído na esperança de que possa ser útil, 
 * mas SEM NENHUMA GARANTIA; sem uma garantia implícita de ADEQUAÇÃO
 * a qualquer MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a
 * Licença Pública Geral GNU para mais detalhes.
 * 
 * Você deve ter recebido uma cópia da Licença Pública Geral GNU junto
 * com este programa. Se não, veja <http://www.gnu.org/licenses/>.
 * 
 */

/** 
 * <p> 
 * Ficha Catalográfica para Teses e Dissertações - ICMC
 * </p> 
 * 
 * Universidade de São Paulo
 * Instituto de Ciências Matemáticas e de Computação (ICMC).
 * 
 * Contato: 
 * - Seção Técnica de Informática - sti@icmc.usp.br 
 * - Biblioteca Prof. Achille Bassi - biblio@icmc.usp.br
 * 
 * Este aplicativo utiliza o pacote PHP Pdf, que pode ser baixado a partir de 
 * http://sourceforge.net/projects/pdf-php/
 * 
 * Este aplicativo utiliza a biblioteca de estilos do bootstrap v3 que pode ser obtido em
 * http://getbootstrap.com/
 * 
 * Os arquivos associados ao quadro de ajuda estão disponíveis em
 * http://www.icmc.usp.br/institucional/estrutura-administrativa/biblioteca/servicos/ficha
 *  
 * @author Maria Alice Soares de Castro - STI-ICMC
 * @copyright Seção Técnica de Informática - STI/ICMC
 */

 /*
 * Programa adaptado por Leonardo Oliveira Baltazar, em fevereiro de 2020, para 
 * uso do Museu de Arqueologia e Etnologia da USP.
 */

##########################################################################################

// Verifica se foi entrado um nome no formulário
// Se não houver valor para nome, apresenta o formulário para ser preenchido
if (!isset($_POST["nome"])) {
    
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Ficha Catalogr&aacute;fica | MAE-USP</title>

        <!-- Bootstrap core CSS -->
        <link href="bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <style type='text/css'>
            .bloco-conteudo {
                min-height: 510px;
            }
        </style>

        <div class='container'>
            <div class='bloco-conteudo'>
                <!-- TITULO -->
                <h3>FICHA CATALOGR&Aacute;FICA | MAE-USP</h3>

                <style>
                    a { color:#276DD1; }
                    body { font-size: 12px; }
                    fieldset {
                        border: 1px solid #337ab7;
                        width: 800px;
                    }
                    label {
                        float:left;
                        width:25%;
                        margin-right:0.5em;
                        padding-top:0.2em;
                        text-align:right;
                        font-weight:bold;
                        height: 10px;
                    }
                    legend {
                        color: #fff;
                        background: #337ab7;
                        border: 1px solid #337ab7;
                        padding: 2px 6px;
                        font-size: 16px;
                    } 
                </style>

                <form name="ficha" method="post" action="ficha.php">

                    <!-- quadro com links para tutorial e ajuda
                    <div style="background-color:white; border: 1px solid #337ab7; font-size:11px; width: 125px; float:right; padding: 3px"><div style="background: #337ab7; padding:3px; color:white;font-weight:bold;">Ajuda</div>- <a href="Tutorial_fichacat_2011.pdf" target="_blank">Tutorial para preenchimento</a> (pdf)<br />- <a href="FichaCat_diretrizes_2011.pdf" target="_blank">Orienta&ccedil;&otilde;es b&aacute;sicas</a> (pdf)</div>
                    -->
                    <fieldset>
                        <legend>Dados para ficha catalogr&aacute;fica</legend>

                        <!-- NOME E SOBRENOME DO AUTOR -->
                        <label>Nome:</label> <input type="text" name="nome" size="70">
                        <br />
                        <label>Sobrenome:</label> <input type="text" name="sobrenome" size="70">
                        <br />

                        <!-- TITULO DO TRABALHO (E SUBTITULO) -->
                        <label>T&iacute;tulo do trabalho <br />e subtítulo (se houver):</label> <input type="text" name="titulo" size="70">
                        <br /><br />

                        <!-- CODIGO CUTTER 
                        <label>C&oacute;digo Cutter:</label> <input type="text" name="cutter" size="6"> <a href="http://www.icmc.usp.br/institucional/estrutura-administrativa/biblioteca/servicos/cutter" target="_blank">Ver tabela</a>
                        <br />-->
                        <br />
                        <!-- CATEGORIA DO TRABALHO -->
                        <label>Trabalho:</label>
                        <input type="radio" name="trabalho" value="Tese" checked> Tese <br />
                        <label></label><input type="radio" name="trabalho" value="Dissertação"> Disserta&ccedil;&atilde;o<br /><br />

                        <!-- LISTA DE PROGRAMAS -->
                        <label>Programa:</label> 
                        <input type="radio" name="programa" value="em Arqueologia" checked> Arqueologia<br />
                        <label></label><input type="radio" name="programa" value="Interunidades em Museologia"> Interunidades em Museologia<br /><br />
                        
                        <!-- NOME DO ORIENTADOR -->
                        <label>Nome do orientador:</label> <input type="text" name="nome_ori" size="50"><br />
                        <label>Sobrenome do orientador:</label> <input type="text" name="sobrenome_ori" size="50"> 
                        <input type="checkbox" name="orientadora" value="a"> orientadora<br /><br />
                        
                        <!-- NOME DO COORIENTADOR -->
                        <label>Nome do coorientador <br />(se houver):</label> <input type="text" name="nome_coori" size="50"><br /><br />
                        <label>Sobrenome do coorientador:</label> <input type="text" name="sobrenome_coori" size="50"> 
                        <input type="checkbox" name="coorientadora" value="a"> coorientadora<br /><br />
                        
                        <!-- ANO E NUMERO DE PAGINAS -->
                        <label>Ano:</label>  <input type="text" name="ano" size="6"><br />
                        <label>n<sup>o</sup> de p&aacute;ginas:</label>  <input type="text" name="pags" size="6"><br /><br />

                        <!-- ASSUNTOS -->
                        <label>Assuntos (min. 1, max. 5): </label><br />
                        <label>&nbsp;</label> 1. <input type="text" name="assunto1" size="50"> <div style="background-color:#f0f0f0; text-align:center; font-size:11px; width: 100px; float:right; padding: 3px"><a href="http://143.107.154.62/Vocab/" target="_blank">Consulta opcional ao Vocabul&aacute;rio Controlado da USP</a></div><br />
                        <label>&nbsp;</label> 2. <input type="text" name="assunto2" size="50"> <br />
                        <label>&nbsp;</label> 3. <input type="text" name="assunto3" size="50"> <br />
                        <label>&nbsp;</label> 4. <input type="text" name="assunto4" size="50"> <br />
                        <label>&nbsp;</label> 5. <input type="text" name="assunto5" size="50"> <br /><br />
                        <label></label>

                        <input type="submit" name="Enviar" value="Enviar" class="btn btn-sm btn-primary" target="_blank"/>
                        <input type="reset" name="Limpar" value="Limpar" class="btn btn-sm btn-default" />
                        <br /><br />
                    </fieldset>
                </form>
            <br />
            Desenvolvido pela Seção Técnica de Informática - STI do Instituto de Ciências Matemáticas e de Computação - ICMC e adaptado por Leonardo O. Baltazar para uso do MAE-USP.
            </div>
        </div>
    </body>
</html>
<?php
} else {
// há alguma informação no formulário de entrada
// carrega o pacote de geração de PDF

    date_default_timezone_set('America/Sao_Paulo');

    require('pdf-php/class.ezpdf.php');

    $nome = utf8_decode($_POST["nome"]);
    $sobrenome = utf8_decode($_POST["sobrenome"]);
    $titulo = utf8_decode($_POST["titulo"]);
    $cutter = $_POST["cutter"];
    $trabalho = utf8_decode($_POST["trabalho"]);  // tese / dissertação
    $programa = utf8_decode($_POST["programa"]);  // Programa Arqueologia / Interunidades em Museologia
    $nome_ori = utf8_decode($_POST["nome_ori"]); // nome do orientador
    $sobrenome_ori = utf8_decode($_POST["sobrenome_ori"]); // sobrenome do orientador
    $orientadora = $_POST["orientadora"]; // se sexo feminino, vale "a"

    $nome_coori = utf8_decode($_POST["nome_coori"]); // nome do coorientador
    $sobrenome_coori = utf8_decode($_POST["sobrenome_coori"]); // sobrenome do coorientador
    $coorientadora = $_POST["coorientadora"]; // se sexo feminino, vale "a"	

    $ano = $_POST["ano"];
    $pags = $_POST["pags"];
    $assunto1 = utf8_decode($_POST["assunto1"]);
    $assunto2 = utf8_decode($_POST["assunto2"]);
    $assunto3 = utf8_decode($_POST["assunto3"]);
    $assunto4 = utf8_decode($_POST["assunto4"]);
    $assunto5 = utf8_decode($_POST["assunto5"]);

    $codigo1 = substr($sobrenome, 0, 1);

    // separa o título por espaços em branco e verifica a primeira palavra
    // se a primeira palavra for uma stopword, o $codigo2 será a primeira letra da segunda palavra do título

    $vetitulo = explode(" ", $titulo);

    $stopwords = array("o", "a", "os", "as", "um", "uns", "uma", "umas", "de", "do", "da", "dos", "das", "no", "na", "nos", "nas", "ao", "aos", "à", "às", "pelo", "pela", "pelos", "pelas", "duma", "dumas", "dum", "duns", "num", "numa", "nuns", "numas", "com", "por", "em");

    if (in_array(strtolower($vetitulo[0]), $stopwords))
        $codigo2 = strtolower(substr($vetitulo[1], 0, 1));
    else
        $codigo2 = strtolower(substr($vetitulo[0], 0, 1));

    // monta o Código Cutter
    //$codigo = $codigo1 . $cutter . $codigo2;

    // monta informações da ficha catalográfica

    $texto = $sobrenome . ", " . $nome . "\n   " . $titulo . " / " . $nome . " " . $sobrenome . "; orientador$orientadora " . $nome_ori . " " . $sobrenome_ori;
    if (!empty($nome_coori))
        $texto .= "; coorientador$coorientadora " . $nome_coori . " " . $sobrenome_coori;
    $texto .= utf8_decode(". -- São Paulo, " . $ano . ".\n   $pags p.\n\n\n   ");
    $texto .= $trabalho;
    if ($trabalho == "Tese")
        $texto .= " (Doutorado";
    else
        $texto .= " (Mestrado";

    // IMPRESSAO DO PROGRAMA
    $texto .= utf8_decode(" - Programa de Pós-Graduação ") . $programa;

    // IMPRESSAO DO NOME DO MUSEU, DA UNIVERSIDADE E DO ANO DE PUBLICACAO
    $texto .= utf8_decode(") -- Museu de Arqueologia e Etnologia, Universidade de São Paulo, $ano.\n\n\n");
    
    // IMPRESSAO DOS ASSUNTOS
    $texto .= "   1. " . $assunto1 . ". ";
    if (!empty($assunto2))
        $texto .= "2. $assunto2. ";
    if (!empty($assunto3))
        $texto .= "3. $assunto3. ";
    if (!empty($assunto4))
        $texto .= "4. $assunto4. ";
    if (!empty($assunto5))
        $texto .= "5. $assunto5. ";

    // IMPRESSAO DO ORIENTADOR, COORIENTADOR E "TITULO"
    if (empty($nome_coori))
        $texto .= "I. $sobrenome_ori, $nome_ori, orient. II. ";
    else
        $texto .= "I. $sobrenome_ori, $nome_ori, orient. II. $sobrenome_coori, $nome_coori, coorient. III. ";
    $texto .= utf8_decode("Título. ");


    $pdf = new Cezpdf();

    $ficha = array(array('cod' => "\n" . $codigo, 'ficha' => $texto));

    // Gera a ficha em pdf

    $pdf->selectFont('pdf-php/fonts/Helvetica.afm');
    // TEXTO QUE AUTORIZA A REPRODUÇÃO
    $pdf->ezText(utf8_decode("Autorizo a reprodução e divulgação integral ou parcial deste trabalho, por qualquer meio\n convencional ou eletrônico, para fins de estudo e pesquisa, desde que citada a fonte."), 9, array('justification' => 'center'));
    // ESPAÇO EM BRANCO ATÉ O RETANGULO COM OS DADOS
    $pdf->ezText("\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n");
    // RETANGULO
    $pdf->rectangle(116, 190, 350, 210);
    // ELABORACAO
    $pdf->ezText(utf8_decode("Ficha catalográfica elaborada pelo Serviço de Biblioteca e Documentação, MAE/USP,\n com os dados fornecidos pelo(a) autor(a)\n\n\n"), 9, array('justification' => 'center'));
    $pdf->selectFont('pdf-php/fonts/Courier.afm');
    $pdf->ezTable($ficha, '', '', array('fontSize' => 9, 'showHeadings' => 0, 'showLines' => 0, 'width' => 340, 'cols' => array('cod' => array('width' => 45))));
    $pdf->selectFont('pdf-php/fonts/Helvetica.afm');
    $pdf->ezText("\n\n\n\n\n");
    //BIBLIOTECARIA RESPONSAVEL
    $pdf->ezText(utf8_decode("                                         Bibliotecária responsável: \n                                         Monica da Silva Amaral - CRB-8/7681"), 8, array('justification' => 'left'));


    $pdf->ezStream();
}
