<template>
  <div class="flex flex-col justify-center items-center h-[100vh] bg-[#FF6700]">
    <Header />
    <QuestionBox
      :question="question"
      @on-correct="onCorrect"
      @on-incorrect="getRandomQuestion"
    />
  </div>
</template>

<script>
import Header from "./components/Header.vue";
import QuestionBox from "./components/QuestionBox.vue";

export default {
  components: { Header, QuestionBox },
  data() {
    return {
      user: JSON.parse(window.localStorage.getItem("user")),
      correct_question_ids: [],
      question: null,
    };
  },
  methods: {
    updateLocalStorage() {
      let user = {
        name: window.navigator.userAgent,
        correct_question_ids: this.correct_question_ids,
      };
      window.localStorage.setItem("user", JSON.stringify(user));
    },
    async getRandomQuestion() {
      try {
        let res = await this.$axios.get(
          `/questions?correct_question_ids=${JSON.stringify(
            this.correct_question_ids
          )}`
        );
        this.question = res.data.question;
        //restart the program
        if (!this.question) {
          this.correct_question_ids = [];
          this.updateLocalStorage();
          this.getRandomQuestion();
        }
      } catch (err) {
        console.error(err.message);
      }
    },
    onCorrect(id) {
      this.correct_question_ids.push(id);
      this.updateLocalStorage();
      this.getRandomQuestion();
    },
  },
  mounted() {
    //set user info if there is no user
    if (!this.user) {
      this.updateLocalStorage();
    } else {
      this.correct_question_ids = this.user.correct_question_ids;
    }
    this.getRandomQuestion();
  },
};
</script>