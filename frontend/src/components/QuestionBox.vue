<template>
  <div
  v-if="question"
   class="mt-20
      p-5
      m-3 rounded-3xl md:w-[80%] md:h-[80%] md:rounded-none  bg-white flex flex-col md:flex-col-reverse"
  >
    <CorrectIncorrectCount :total_question_counts="total_question_counts" :correct_question_counts="correct_question_counts"/>
    <div  class="
      flex flex-col
      justify-center
      items-center
      space-y-8
    ">
      <div class="md:h-[570px]">
        <img
          :src="question.image"
          class="rounded-lg md:object-contain md:h-full md:w-full md:rounded-none"
        />
      </div>
      <h1 class="text-3xl">{{random_language === 'english' ? question.in_english : question.in_serbian}}</h1>
      <input required type="text" class="w-[62%] shadow-md shadow-[#e28a5067] py-4" v-model="answer" @keydown.enter="check_answer"/>
      <button class="px-24 py-4 md:px-16 text-white bg-[#FF6700] text-xl rounded-md"  @click="check_answer">
        Let's See
      </button>
        </div>
    </div>
</template>

<script>
import CorrectIncorrectCount from "./CorrectIncorrectCount.vue";

export default {
  components: { CorrectIncorrectCount },
  props: {
    total_question_counts:Number,
    correct_question_counts:Number,
    question: Object
  },
  data(){
    return{
      languages : ['english','serbian'],
      answer : '',
      random_language : ''
    }
  },
  methods : {
    async check_answer(){
      let res =await this.$axios.post(`/questions/${this.question.id}/check-answer` , {
        answer : this.answer,
        random_language : this.random_language
      });

      if(res.data.correct){
        this.$emit('on-correct',this.question.id)
      }else{
        this.$emit('on-incorrect',this.question.id)
      }
      this.answer = '';
    }
  },
  mounted(){
    this.random_language = this.languages[Math.floor(Math.random() * this.languages.length)];
  }
};
</script>

<style>
</style>