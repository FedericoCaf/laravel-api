<template>
 <div class="fc-container">
     <h1>I miei posts</h1>
   
   </div> 


</template>

<script>
export default {
  name: "Posts",
  mounted(){
     this.getPosts();
  },
  methods:{
   getPosts(){
       axios.get('http://127.0.0.1:8000/api/posts')
       .then(res =>{
         console.log(res);
       })
   }
  }
}
</script>

<style lang="scss" scoped>
   .fc-container{
     max-width: 800px;
     margin: 0 auto;
     height: 700px;
        h1{
          margin-top: 30px;
        }
   }
</style>