<template>
 <div class="fc-container">
     <h1>I miei posts</h1>

     <PostItem
        v-for="post in posts"
         :key="post.id"
         :post="post"
     />
    
   </div> 


</template>

<script>


import PostItem from './PostItem.vue';

export default {
  name: 'Posts',
  components:{
    PostItem
  },

  data(){
    return{
      apiUrl: 'http://127.0.0.1:8000/api/posts',
       posts: null
    }
  },

  mounted(){
     this.getPosts();
  },

  methods:{
   getPosts(){
       axios.get(this.apiUrl)
       .then(res =>{
         this.posts = res.data.posts
         console.log(this.posts);
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
          margin-top: 60px;
        }

   }
</style>