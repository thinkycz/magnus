<template>
    <div class="flex-1">
        <Intro v-if="stage === 'intro'" :quiz="quiz" @start="stage = 'question'"></Intro>

        <div v-if="stage === 'question'">
            <question
                :question="questions[currentQuestion]"
                v-on:answer="handleAnswer"
                :question-number="currentQuestion+1"
            ></question>
        </div>

        <Results v-if="stage === 'results'"></Results>
    </div>
</template>

<script>
    import Intro from "./partials/Intro"
    import Results from "./partials/Results"

    export default {
        props: ['quiz'],

        data() {
            return {
                stage: 'intro',

                currentQuestion: 0,
                answers: [],
            }
        },

        methods: {
            handleAnswer(e) {
                this.answers[this.currentQuestion] = e.answer;
                if ((this.currentQuestion + 1) === this.questions.length) {
                    this.handleResults();
                    this.questionStage = false;
                    this.resultsStage = true;
                } else {
                    this.currentQuestion++;
                }
            },
            handleResults() {
                this.questions.forEach((a, index) => {
                    if (this.answers[index] === a.answer) this.correct++;
                });
                this.perc = ((this.correct / this.questions.length) * 100).toFixed(2);
                console.log(this.correct + ' ' + this.perc);
            }
        },

        components: {
            Intro,
            Results
        }
    }
</script>
