<template>
  <div
  v-if="question"
   class="mt-20
      p-5
      m-3 rounded-3xl md:w-[80%] md:h-[80%] md:rounded-none  bg-white flex flex-col md:flex-col-reverse"
  >
    <LikeUnlikeCount />
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
      <h1 class="text-3xl">{{random_language === 'english' ? question.in_serbian : question.in_english}}</h1>
      <input type="text" class="w-[62%] shadow-md shadow-[#e28a5067] py-4" />
      <button class="px-24 py-4 md:px-16 text-white bg-[#FF6700] text-xl rounded-md">
        Let's See
      </button>
        </div>
    </div>
</template>

<script>
import LikeUnlikeCount from "./LikeUnlikeCount.vue";

export default {
  components: { LikeUnlikeCount },
  props: {
    question: Object
  },
  data(){
    return{
      languages : ['english','serbian']
    }
  },
  mounted(){
    this.random_language = this.languages[Math.floor(Math.random() * this.languages.length)];
  }
};
</script>

<style>
</style>