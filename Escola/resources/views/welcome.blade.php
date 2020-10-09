@extends('layouts.main')
@section('titulo', 'Escola')
@section('header')
@section('conteudo')
    <main role="main">

        <!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
        <div class="jumbotron">
            <div class="container">
            <h1 class="display-3">Escola Municipal Professora Esmeralda dos Santos Novaes</h1>
            <p>
                Este é o sistema de gestão acadêmica da nossa Unidade Escolar.
                Com ele você pode acompanhar a vida escolar de seu(ua) filho(a).
            </p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Saiba mais &raquo;</a></p>
            </div>
        </div>

        <div class="container">
            <!-- Exemplo de linha de colunas -->
            <div class="row">
            <div class="col-md-4">
                <h2>Alunos</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Atividades</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Secretaria</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a></p>
            </div>
            </div>

            <hr>

        </div> <!-- /container -->

    </main>
@endsection
@section('footer')
