<template>
    <div>
        <!-- Criando Campo de Busca -->
        <div class="form-inline">
            <a v-if="criar" v-bind:href="criar" class="btn btn-success btn-sm">Criar</a>
                <div class="form-group pull-right"> 
        <input type="search" class="form-control" placeholder="Busrcar" v-model="buscar">
        </div>
    </div> 
        <!-- END - Criando Campo de Busca -->

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th style="curso:pointer" v-on:click="ordenaColuna(index)" v-for="(titulo,index) in titulos">{{titulo}}</th>

            <!-- Botões de Configuração das tabelas de arquivos -->
                <th v-if="detalhe || editar || deletar">Configurações</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(item,index) in lista">
                <td v-for="i in item">{{i}}</td>

                <td v-if="detalhe || editar || deletar">
            <form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" v-bind:value="token">

                <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-primary btn-sm">Detalhe</a>
                <a v-if="editar" v-bind:href="editar" class="btn btn-warning btn-sm"> Editar</a>
                <a href="#" v-on:click="executaForm(index)" class="btn btn-danger btn-sm"> Deletar</a>

            </form>
            <span v-if="!token">
                <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-primary btn-sm">Detalhe</a>
                <a v-if="editar" v-bind:href="editar" class="btn btn-warning btn-sm"> Editar</a>
                <a v-if="deletar" v-bind:href="deletar" class="btn btn-danger btn-sm"> Deletar</a>
            </span>
            <span v-if="token && !deletar">
                <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-primary btn-sm">Detalhe |</a>
                <a v-if="editar" v-bind:href="editar" class="btn btn-warning btn-sm"> Editar</a>
            </span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
    export default {
        props:['titulos','itens','criar','detalhe','editar','deletar','token','ordem','ordemCol'],
            data:function(){
                return {
                    buscar:'',
                    ordemAux:

            }
        },
        methods:{
            executaForm: function(index){
                document.getElementById(index).submit()
        },
            ordenaColuna: function(coluna){
                this.ordemCol = coluna
                    if(this.ordem.toLowerCase() == "asc"){
                        this.ordem = 'desc'
                }else{
                    this.oredm == 'asc'
                }
            }  
        },
    //   Método Computado de BuscaordenaColuna
    computed:{ 
        lista:function(){
            //Ordenaçãos da Listas por coluna ID
            let ordem = this.ordem || "asc"
            let ordemCol = this.ordemCol || 0
            ordem = ordem.toLowerCase()
            ordemCol = parseInt(ordemCol)

            if(ordem == "asc"){
                this.itens.sort(function(a,b){
                    if(a[ordemCol] > b[ordemCol]){
                        return 1
                }if(a[ordemCol] < b[ordemCol]){
                        return -1
                }
                return 0
                })
            }else {
                this.itens.sort(function(a,b){
                    if(a[ordemCol] < b[ordemCol]){
                        return 1
                }if(a[ordemCol] > b[ordemCol]){
                        return -1
                }
                return 0    
            })
            }

            //END - Ordenaçãos da Listas por coluna ID
                return this.itens.filter(res => {
                    //Percorrendo a lista de opção para Busca
                    for(let search = 0;search < res.length; search++){
                        if((res[search] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
                        return true
                    }
                }
                        return false
                });
                return this.itens
          }
      }
    }
</script>
