<template>
  <h1 class="text-blue-500 flex justify-center text-3xl h-[100vh] items-center">Hello world</h1>
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