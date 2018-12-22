@extends('layouts.app')

@section('content')
<pagina tamanho="12">
  <painel titulo="Lista de Artigos">
    
    {{--  Menus de Rotas  --}}
    <breadcrumbs v-bind:lista="{{$listaBreadcrumbs}}"></breadcrumbs>
    {{--  //Tabela de Lista de Artigos  --}}
      <tabela-lista 
        v-bind:titulos="['Código','Título','Descrição','Autor','Data']"
        v-bind:itens="{{$listaArtigos}}"

        {{--  Ordebação das Listas  --}}
        ordem="asc" ordemCol="0"

        {{--  //Botões de Ações - Tabela de Lista de Artigos  --}}  
        criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="1616564564" modal="sim">

      </tabela-lista>

  </painel>
</pagina>

        {{--  Modal para Adicionar  --}}
  <modal nome="adicionar">
    <painel titulo="Adicionar Novo">
      <formulario css="" action="#" method="post" enctype="" token="">
          <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
          </div>
          <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="titulo" placeholder="Descrição">
          </div>
          <div class="form-group">
            <label for="author">Autor</label>
            <input type="text" class="form-control" id="autor" name="author" placeholder="Autor">
            </div>
          <div class="form-group">
            <label for="data">Data</label>
            <input type="data" class="form-control" id="data" name="data" placeholder="Data">
          </div>
            <button class="btn btn-info">Adicionar</button>
      </formulario>
    </painel>
  </modal>

          {{--  Modal de Editar  --}}
  <modal nome="editar">
    <painel titulo="Adicionar Novo">
      <formulario css="" action="#" method="post" enctype="" token="">
          <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
          </div>
          <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="titulo" placeholder="Descrição">
          </div>
          <div class="form-group">
            <label for="author">Autor</label>
            <input type="text" class="form-control" id="autor" name="author" placeholder="Autor">
            </div>
          <div class="form-group">
            <label for="data">Data</label>
            <input type="data" class="form-control" id="data" name="data" placeholder="Data">
          </div>
            <button class="btn btn-info">Adicionar</button>
      </formulario>
    </painel>
  </modal>
            {{--  Modal de Detalhe  --}}
  <modal nome="adicionar">
    <painel titulo="Adicionar Novo">
      <formulario css="" action="#" method="post" enctype="" token="">
          <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
          </div>
          <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="titulo" placeholder="Descrição">
          </div>
          <div class="form-group">
            <label for="author">Autor</label>
            <input type="text" class="form-control" id="autor" name="author" placeholder="Autor">
            </div>
          <div class="form-group">
            <label for="data">Data</label>
            <input type="data" class="form-control" id="data" name="data" placeholder="Data">
          </div>
            <button class="btn btn-info">Atualizar</button>
      </formulario>s
    </painel>
  </modal>

@endsection