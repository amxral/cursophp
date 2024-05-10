<?php 
    //Cotação copiada do google
    $cotacao = 5.16;

    //Quanto $$ você tem?
    $real = 1000;

    //Equivalêcia em dólar
    $dolar = $real / $cotacao;

    //Formatação de moedas com Internacionalização
    //Biblioteca intl (Internacionalização PHP)
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

    echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
?>