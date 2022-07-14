<?php
    include "./fpdf.php";
    include('contagem.php');
    file_put_contents('contagem.php', '<?php $contagem='.((int)$contagem+1).' ?>');
    $gerador = (int)$contagem;
 
    




    $pdf = new FPDF("P", "cm", "A4");
    $pdf->SetTitle("OS", true);
    $pdf->SetAutoPageBreak(true);
    $pdf->AddPage();

    $pdf->SetFont("Arial", "B", 9);
    $pdf->Ln(0.1);
    $pdf->Cell(19, 27, "", 1, 0, "L", false);
    $pdf->Cell(4.8, 0.5, "", 0, 0, "R", false);
    
    $pdf->SetFont("Arial", "B", 7);
    $pdf->Cell(4.5, 0.5, utf8_decode("Data impressão: ") . date('d/m/Y'), 0, 0, "R", false);
    $pdf->Ln(1);
    $pdf->SetFont("Arial", "B", 9);
    $pdf->SetFillColor(216, 219, 193);
    $pdf->Image("mult.png", 2, 1.7, 4);
    $pdf->Image("eletronicos.png", 3.7, 2.7, 2);
    $pdf->Image("zap.png", 15, 2.6, 0.5);
    $pdf->Image("cnpj.png", 3, 3.3, 2.5);
    $pdf->Image("senha.png", 17, 14.5, 2.8);
    $pdf->SetFont("Arial", "B", 11);
    $pdf->Cell(17, 0.5, utf8_decode("Assistência Técnica "), 0, 1, "R", false);
    $pdf->SetFont("Arial", "B", 9);
    $pdf->Cell(16.8, 0.5, utf8_decode("51 998931901"), 0, 1, "R", false);
    $pdf->SetFont("Arial", "", 9);
    $pdf->Cell(17, 0.5, utf8_decode("Rua Cônego Jose Wiest 346-Centro"), 0, 1, "R", false);
    $pdf->Cell(17, 0.5, utf8_decode("Barão do Triunfo-RS"), 0, 1, "R", false);
    
    $pdf->SetFont("Arial", "B", 15);
    $pdf->SetTextColor(79, 229, 14 );
    $pdf->Cell(19, 0.8, utf8_decode("Ordem de Serviço 2022") , 0, 1, "C", false);
    $pdf->SetTextColor(0,0,0);
    
    $pdf->SetFont("Arial", "B", 12);
    $pdf->Ln(0.3);
    $pdf->Cell(11, 0.8, utf8_decode("Nome:" . $_POST["nomcli"]) , 1, 0, "L", false);
    $pdf->Cell(4, 0.8, utf8_decode("Data:".date('d/m/Y')) , 1, 0, "L", false);
    $pdf->SetTextColor(235, 5, 5);
    $pdf->Cell(4, 0.8, utf8_decode("OS Nº:".$gerador) , 1, 1, "L", false);
    $pdf->SetTextColor(0,0,0);
    $pdf->Cell(19, 0.8, utf8_decode("Contato:".$_POST["tel"]) , 1, 1, "L", false);
    $pdf->Cell(19, 0.8, utf8_decode("Endereço:" .$_POST["cid"].$_POST["end"]) , 1, 1, "L", false);
    $pdf->Cell(19, 0.8, utf8_decode("CPF: " .$_POST["cpf"]) , 1, 1, "L", false);
    $pdf->Cell(13, 0.8, utf8_decode("")  , 0, 0, "R", false);
    $pdf->Cell(6, 0.8, utf8_decode("Data Conclusão:___/___/___ ")  , 1, 1, "L", false);
    $pdf->Cell(13, 0.8, utf8_decode("")  , 0, 0, "L", false);
    $pdf->Cell(6, 0.8, utf8_decode("Data Entrega:___/___/___ ")  , 1, 1, "L", false);

    $pdf->SetFont("Arial", "B", 12);
    $pdf->SetFillColor(216, 219, 193);
    $pdf->Cell(19, 0.8, utf8_decode("Equipamento") , 1, 1, "C", true);
    $pdf->Cell(19, 0.8, utf8_decode("Marca: ".$_POST["marca"]) , 1, 1, "L", false);
    $pdf->Cell(19, 0.8, utf8_decode("Modelo: ".$_POST["modelo"]) , 1, 1, "L", false);
    $pdf->Cell(19, 0.8, utf8_decode("IMEI-1: ".$_POST["imei"]) , 1, 1, "L", false);
    $pdf->Cell(19, 0.8, utf8_decode("IMEI-2: ".$_POST["imei2"]) , 1, 1, "L", false);
    $pdf->Cell(16, 0.8, utf8_decode("Senha: ".$_POST["senha"]) , 1, 1, "L", false);
    $pdf->Cell(16, 0.8, utf8_decode("Cor: ".$_POST["cor"]) , 1, 1, "L", false);

    $pdf->Ln(1);
    $pdf->SetFont("Arial", "B", 12);
    $pdf->SetFillColor(216, 219, 193);
    $pdf->Cell(19, 0.8, utf8_decode("Descrição do problema") , 1, 1, "C", true);
    $pdf->SetFont("Arial", "B", 8);
    $pdf->Cell(15, 0.8, utf8_decode($_POST["1"].$_POST["2"].$_POST["3"].$_POST["4"].$_POST["5"].$_POST["6"].$_POST["7"].$_POST["8"].$_POST["9"].$_POST["10"]) , 1, 0, "L", false);
    $pdf->Cell(4, 0.8, utf8_decode("") , 1, 1, "L", false);
    $pdf->Cell(15, 0.8, utf8_decode($_POST["11"].$_POST["12"].$_POST["13"].$_POST["14"].$_POST["15"].$_POST["16"].$_POST["17"].$_POST["18"].$_POST["19"].$_POST["20"]), 1, 0, "L", false);
    $pdf->Cell(4, 0.8, utf8_decode(",") , 1, 1, "L", false);
    $pdf->Cell(15, 0.8, utf8_decode($_POST["21"].$_POST["22"].$_POST["23"].$_POST["24"].$_POST["25"].$_POST["26"].$_POST["27"].$_POST["28"].$_POST["29"].$_POST["30"]) , 1, 0, "L", false);
    $pdf->Cell(4, 0.8, utf8_decode("") , 1, 1, "L", false);
    $pdf->SetFont("Arial", "B", 7.5);
    $pdf->Cell(15, 0.8, utf8_decode("Obs: Problemas adicionais não assinalados acima podem ser encontrados no laboratório técnico ao abrir o aparelho!") , 0, 0, "L", false);
    $pdf->SetFont("Arial", "B", 12);
    $pdf->Cell(4, 0.8, utf8_decode("Valor: R$".$_POST["valor"]) , 1, 1, "L", false);
    $pdf->SetFont("Arial", "", 9);
    $pdf->multiCell(19, 0.8, utf8_decode("LEIA COM ATENÇÃO! Só efetuamos a entrega do equipamento mediante apresentação deste documento! Retirada por terceiros só com autorização ou apresentação deste documento! Prazo para retirada do aparelho é de 180 dias conforme a PL4668/16. A partir deste prazo, será desmontado para sucata. ’Declaro ter lido atentamente e estar ciente que o aparelho está nas condições assinaladas acima") , 1, 1, "L", false);
    $pdf->SetFont("Arial", "", 10);
    $pdf->Cell(10.5, 5, utf8_decode("Loja:__________________________________") , 0, 0, "L", false);
    $pdf->Cell(4, 5, utf8_decode("Cliente:___________________________________") , 0, 1, "L", false);
    


    
    $pdf->Output();

?>