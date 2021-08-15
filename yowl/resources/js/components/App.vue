<template>
  <div>
    <Home />
    <Footer />
  </div>
</template>

<script>
import Home from "./home/Home.vue";
import Footer from "./Footer.vue";

export default{
   props: {
    user:Object
  },

  components: {
    Home,
    Footer,
  },

  created(){
    this.$store.state.connectedUser = this.user;
  }
}
</script>

<style>
.fixed {
    position: fixed;
    z-index: 2;
}
</style>