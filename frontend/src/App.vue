<template>
  <div class="flex flex-col justify-center items-center h-[100vh] bg-[#FF6700]">
    <Header/>
    <Box/>
  </div>
</template>

<script>
import Header from './components/Header.vue';
import Box from './components/Box.vue';

export default {
  components : { Header , Box },
  mounted(){
    this.$axios.get('http://localhost:8000/api/api-testing').then((res)=>{
      console.log(res.data)
    })
  }
}
</script>