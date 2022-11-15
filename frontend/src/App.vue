<template>
  <div class="flex flex-col justify-center items-center h-[100vh] bg-[#FF6700]">
    <Header />
    <QuestionBox :question="question" @on-correct="onCorrect" @on-incorrect="getRandomQuestion"/>
  </div>
</template>

<script>
import Header from "./components/Header.vue";
import QuestionBox from "./components/QuestionBox.vue";

export default {
  components: { Header, QuestionBox },
  data(){
    return{
      question : null,
      correct_question_ids : []
    }
  },
  methods:{
    updateLocalStorage(){
      let user = {
        name : window.navigator.userAgent,
        correct_question_ids : this.correct_question_ids
      }
      window.localStorage.setItem('user',JSON.stringify(user));
    },
    async getRandomQuestion(){
      try {
        let res =await this.$axios.get(`/questions?correct_question_ids=${JSON.stringify(this.correct_question_ids)}`);
        this.question = res.data.question
      } catch(err) {
        console.error(err.message)
      }
    },
    onCorrect(id){
      console.log('hit id',id)
      this.correct_question_ids.push(id);
      this.updateLocalStorage();
      this.getRandomQuestion();
    }
  },
  mounted() {
    this.updateLocalStorage();
    this.getRandomQuestion();
  },
};
</script>