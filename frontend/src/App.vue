<template>
  <div class="flex flex-col justify-center items-center h-[100vh] bg-[#FF6700]">
    <Header />
    <Box />
  </div>
</template>

<script>
import Header from "./components/Header.vue";
import Box from "./components/Box.vue";

export default {
  components: { Header, Box },
  methods:{
    setUserData(){
      let user = {
        name : window.navigator.userAgent,
        correct_question_ids : []
      }
      window.localStorage.setItem('user',JSON.stringify(user));
    },
    async getRandomQuestion(){
      let res = this.$axios.get('/questions');
      console.log(res)
    }
  },
  mounted() {
    this.setUserData();
    this.getRandomQuestion();
  },
};
</script>