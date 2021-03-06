@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Notícias">
            <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
            <tabela-lista 
            v-bind:titulos="['Cód','Título', 'Detalhe']"
            v-bind:itens="[[1, 'CD Dudu Amaral', 'Cd Gravado ao Vivo no EUA'], [2, 'DVD Dudu Amaral', 'DVD Gravado ao Vivo em Fátima']]"
            ordem="desc" ordemcol="2"
            criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="123456789"
            
            
            ></tabela-lista>            
        </painel>
    </pagina>
@endsection
