<template>
  <h1>Hello world</h1>
</template>

<script>
export default {
  mounted(){
    this.$axios.get('http://localhost:8000/api/api-testing').then((res)=>{
      console.log(res.data)
    })
  }
}
</script>