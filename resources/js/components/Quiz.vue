<template>
    <div class="flex-1">
        <Intro v-if="stage === 'intro'" :quiz="quiz" @start="stage = 'question'"></Intro>

        <div v-if="stage === 'question'">
            <Question :question="currentQuestion" :key="currentQuestion.key" @answer="answer">
                <span
                    class="text-gray-700 text-lg font-semibold flex-shrink-0">{{ current + 1  }} / {{ quiz.questions.length }}</span>
            </Question>
        </div>

        <Results v-if="stage === 'results'"></Results>
    </div>
</template>

<script>
    import Intro from "./partials/Intro"
    import Question from "./partials/Question"
    import Results from "./partials/Results"

    export default {
        props: ['quiz'],

        data() {
            return {
                stage: 'intro',
                current: 0,
                answers: [],
            }
        },

        computed: {
            currentQuestion() {
                return this.quiz.questions[this.current]
            }
        },

        methods: {
            answer(value) {
                this.answers[this.current] = value;

                if (this.current < this.quiz.questions.length - 1) {
                    this.current += 1
                } else {
                    this.process();
                }
            },

            process() {
                this.stage = 'results';

                axios.post(`/elearning/quizzes/${this.quiz.id}/process`, {answers: this.answers})
                    .then(({data}) => {
                        setTimeout(() => {
                            window.location = data.redirect;
                        }, 2000)
                    })
            }
        },

        components: {
            Intro,
            Question,
            Results
        }
    }
</script>
