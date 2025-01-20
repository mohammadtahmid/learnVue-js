<template>
    <div id="test">
        <h3>My test Component</h3>
        <h4>{{ title }}</h4>
        <h1>{{ name }}</h1>
        <button @click.prevent="myButton()">Click</button>
    </div>
</template>



<script>
    export default {
        name:'Test',
        props:['title'],

        // beforeCreate(){
        //     alert('This is before create hook')
        // },
        // created(){
        //     alert('This is create hook')
        // },


        data(){
            return{
                name: 'Maruf'
            }
        },

        methods:{
            myButton(){
                this.name = 'Tahmid'
            }
        },

        updated(){
            alert('updated')
        }
    }
</script>


<style>

</style>