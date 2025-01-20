<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png">
    <my-component title="This is title"></my-component>
    <p>{{ name }}</p>
    <!-- <MyComponent/> -->
    <HelloWorld msg="Welcome to Your Vue.js App"/>

    
     
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
import test from "./components/Test";

export default {
  name: 'App',
  components: {
    HelloWorld,
    MyComponent:test
  },
  data() {
    return {
      name: 'VueJs Tutorial'
    }
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
