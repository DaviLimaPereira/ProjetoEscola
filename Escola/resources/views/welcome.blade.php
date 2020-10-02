@extends('layouts.main')
@section('titulo', 'Escola')
@section('header')
@section('conteudo')
    <h1 class="mt-5">E.M. Profª Esmeralda dos Santos Novaes</h1>
    <p class="lead">Fixe um footer na parte inferior da viewport, em navegadores desktop, com estes HTML e CSS customizados. Além do mais, um navbar fixo foi adicionado com <code>padding-top: 60px;</code> e <code>body &gt; .container</code>.</p>
    <p>Volte para o <a href="../sticky-footer">sticky footer padrão</a> sem a navbar.</p>
    <?php
        //a super variável $_SERVER[] vai pegar a url
$url = $_SERVER['REQUEST_URI'];
//com a função explode você separa a url em partes
$parteurl = explode('/', $url);
//na variável $parteurldesejada url estará a parte da url que você quer
$parteurldesejada = $parteurl[1];

        echo $parteurldesejada; //imprimir para testar se esta pegando.
    ?>
@endsection
@section('footer')
