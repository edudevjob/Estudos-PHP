<template>
    <div>
        <!-- Criando Campo de Busca -->
        <div class="form-inline">
            <p>{{this.$store.state.itens}}</p>   
            <a v-if="criar && !modal" v-bind:href="criar" class="btn btn-success btn-sm">Criar</a>
            <modal-link v-if="criar && modal" tipo="link" nome="adicionar" titulo="Novo Artigo" class="btn btn-default" css=""></modal-link>
                <div class="form-group pull-right"> 
        <input type="search" class="form-control" placeholder="Busrcar" v-model="buscar">
        </div>
    </div> 
        <!-- END - Criando Campo de Busca -->
<!-- 108108/47 -->
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th style="cursor:pointer" v-on:click="ordenaColuna(index)" v-for="(titulo,index) in titulos">{{titulo}}</th>

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
                
                <!-- Detalhe -->
                <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-primary btn-sm">Detalhe</a>
                
                <!-- Editar -->
                <a v-if="editar && !modal" v-bind:href="editar" class="btn btn-warning btn-sm">Editar</a>
                <modal-link v-if="editar && modal" tipo="link" nome="editar" titulo="Editar" 
                            class="btn btn-default" css="">
                </modal-link>
                
                <!-- Deletar -->
                <a href="#" v-on:click="executaForm(index)" class="btn btn-danger btn-sm">Deletar</a>

            </form>
            <span v-if="!token">
                <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-primary btn-sm">Detalhe</a>
                
                <!-- Editar -->
                <a v-if="editar && !modal" v-bind:href="editar" class="btn btn-warning btn-sm">Editar</a>
                <modal-link v-if="editar && modal" tipo="link" nome="editar" titulo="Editar" css="">
                </modal-link>

                <a v-if="deletar" v-bind:href="deletar" class="btn btn-danger btn-sm">Deletar</a>
            </span>
            <span v-if="token && !deletar">
                <a v-if="detalhe" v-bind:href="detalhe" class="btn btn-primary btn-sm">Detalhe</a>

                <!-- Editar -->
                <a v-if="editar && !modal" v-bind:href="editar" class="btn btn-warning btn-sm">Editar</a>
                <modal-link v-if="editar && modal" tipo="link" nome="editar" titulo="Editar" css="">
                </modal-link>
            </span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
    export default {
        props:['titulos','itens','criar','detalhe','editar','deletar','token','ordem','ordemCol','modal'],
            data:function(){
                return {
                    buscar:'',
                    ordemAux: this.ordem || "asc",
                    ordemAuxCol: this.ordemCol || 0

            }
        },
        methods:{
            executaForm: function(index){
                document.getElementById(index).submit()
        },
            ordenaColuna: function(coluna){
                this.ordemAuxCol = coluna
                    if(this.ordemAux.toLowerCase() == "asc"){
                        this.ordemAux = 'desc'
                }else{
                    this.ordemAux == 'asc'
                }
            }  
        },
    //   Método Computado de BuscaordenaColuna
    computed:{ 
        lista:function(){
            //Ordenaçãos da Listas por coluna ID
            let ordem = this.ordemAux
            let ordemCol = this.ordemAuxCol
            ordem = ordem.toLowerCase()
            ordemCol = parseInt(ordemCol)

            if(ordem == "asc"){
                this.itens.sort(function(a,b){
                    if(Object.values(a)[ordemCol] > Object.values(b)[ordemCol]){
                        return 1
                }if(Object.values(a)[ordemCol] < Object.values(b)[ordemCol]){
                        return -1
                }
                return 0
                })
            }else {
                this.itens.sort(function(a,b){
                    if(Object.values(a)[ordemCol] < Object.values(b)[ordemCol]){
                        return 1
                }if(Object.values(a)[ordemCol] > Object.values(b)[ordemCol]){
                        return -1
                }
                return 0    
            })
            }

            if(this.busca){
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
            }

                return this.itens
          }
      }
    }
</script>