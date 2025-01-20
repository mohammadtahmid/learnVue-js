<template>
    <div id="test">
        <h3>My test Component</h3>
        <h4>{{ title }}</h4>
    </div>
</template>



<script>
    export default {
        name:'Test',
        props:['title']
    }
</script>


<style>

</style>