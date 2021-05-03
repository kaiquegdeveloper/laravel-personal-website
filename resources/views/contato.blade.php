@extends('templates.master')
@section('title')
Contato | AK Desenvolvimento
@endsection
@section('seo')

@endsection
@section('content')
<canvas height="85px"></canvas>
<div class="container">
    <h3>Contato</h3>
    <span class="text-muted">Entre em contato hoje mesmo! Nosso time comercial vai te responder o mais rápido
        possivel.</span>
        <hr>
        @include('templates.alerts')
    <form method="POST" action="{{route('form.contato')}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Nome</label>
                <input type="text" id="name" name="nome" class="form-control" placeholder="Nome...">
            </div>
            <div class="form-group col-md-4">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="contato@seuemail.com">
            </div>
            <div class="form-group col-md-4">
                <label>Telefone</label>
                <input type="text" class="form-control" name="telefone" placeholder="(00)00000-0000">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Assunto</label>
                <input type="text" class="form-control" name="assunto" placeholder="O que precisa?">
            </div>
            <div class="form-group col-md-6">
                <label>Serviço</label>
                <select id="inputState" name="servicos" class="form-control">
                    <option value="Desenvolvimento de Sites" selected>Desenvolvimento de Sites</option>
                    <option value="Hospedagem de Sites">Hospedagem de Sites</option>
                    <option value="Lojas Virtuais">Lojas Virtuais</option>
                    <option value="Sistema Web">Sistema Web</option>
                    <option value="Desenvolvimento de Loja Virtual">Desenvolvimento de Loja Virtual</option>
                    <option value="Migração de Ecommerce">Migração de Ecommerce</option>
                    <option value="Artes Gráficas">Artes Gráficas</option>
                    <option value="Consultoria de Tecnologia">Consultoria de Tecnologia</option>
                    <option value="Consultoria de Marketing">Consultoria de Marketing</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label>Mensagem</label>
            <textarea class="form-control" rows="3" name="mensagem"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

</div>
@endsection