<template>
  <nav>
    <h3>This is App.vue</h3>
    <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link> |
    <router-link :to="{name: 'contact' }">Contract</router-link> |
    <router-link :to="{name: 'edit',params:{id:10} }">Edit</router-link> |
    <router-link :to="{name: 'Login'}">Login</router-link>    
  </nav>
  <router-view/>
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

nav {
  padding: 30px;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
}

nav a.router-link-exact-active {
  color: #09653c;
}
h3{
  color: #2c3e50;
}
</style>
