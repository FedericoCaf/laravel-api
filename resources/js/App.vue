<template>
  <div>
    
    <Header/>

    <Posts/>

    <Footer/>

  </div>
</template>

<script>

import Header from './components/Header'
import Footer from './components/Footer'
import Posts from './components/Posts'

export default {
  name: "App",
  components: {
     Header,
     Footer,
     Posts
  } 

}
</script>

<style lang="scss">

</style>