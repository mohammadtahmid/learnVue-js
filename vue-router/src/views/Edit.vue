<template>
    <div>
        <h3>This is Edit page</h3>
        {{ id }}
    </div>
</template>

<script>
export default {
    name: 'Edit',
    data() {
        return{
            id: this.$route.params.id
        }
    }
}

</script>

<style>

</style>