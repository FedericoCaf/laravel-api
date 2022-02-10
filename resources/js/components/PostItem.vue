<template>

<article>

  <h3> {{post.title }} </h3>
  <p class="data"> {{ post.created_at }} </p>
  <p> {{ post.content }} </p>

  
</article>

</template>

<script>

export default {
  name: "PostItem",
  props:{
    'post': Object
  }
}

</script>

<style lang="scss" scoped>

  h3{
    color: red;
  }

</style>