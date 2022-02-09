<template>
  <header>
      <nav>
        <ul>
          <li>
            <a href="">Home</a>
          </li>
          <li>
            <a class="active" href="">Blog</a>
          </li>
          <li>
            <a href="">Chi siamo</a>
          </li>
          <li>
            <a href="">Contatti</a>
          </li>
         
        </ul>
      </nav>

  </header>
</template>

<script>
export default {
  name: "Header"
}
</script>

<style lang="scss" scoped>

header{
  background-color: dodgerblue;
  text-align: center;
  padding: 25px 0;
    ul{
      list-style: none;
        li{
          display: inline-block;
          margin: 0 25px;
          font-size: 17px;
            a{
              color: white;
              text-decoration: none;
                &.active{
                  color: blue;
                }
            }
        }
    }
}

</style>