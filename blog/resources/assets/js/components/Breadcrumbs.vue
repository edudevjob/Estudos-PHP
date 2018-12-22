<template>
    <ol class="breadcrumb">
        <li v-for="item in lista">
            <a v-if="item.url" v-bind:class="defineClass" v-bind:href="item.url" 
               class="btn btn-default btn-sm">{{item.titulo}}</a>
               <span v-if="!item.url">{{item.titulo}}</span>
        </li>
        <li>
        </li>
    </ol>
</template>

<script>
    export default{
        props:['lista'],
        computed:{
            defineClass: function(){
                if(this.url){
                    return "active"
                }else{
                    return ""
                }
            }
        }
    }
</script>