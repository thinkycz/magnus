<template>
    <div class="flex-1">
        <div v-if="introStage" class="w-full my-24 flex flex-col items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-24 h-24 text-gray-800 fill-current">
                <path class="heroicon-ui"
                      d="M17 22a2 2 0 0 1-2-2v-1a1 1 0 0 0-1-1 1 1 0 0 0-1 1v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-3H5a3 3 0 1 1 0-6h1V8c0-1.11.9-2 2-2h3V5a3 3 0 1 1 6 0v1h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1a1 1 0 0 0-1 1 1 1 0 0 0 1 1h1a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3zm3-2v-3h-1a3 3 0 1 1 0-6h1V8h-3a2 2 0 0 1-2-2V5a1 1 0 0 0-1-1 1 1 0 0 0-1 1v1a2 2 0 0 1-2 2H8v3a2 2 0 0 1-2 2H5a1 1 0 0 0-1 1 1 1 0 0 0 1 1h1a2 2 0 0 1 2 2v3h3v-1a3 3 0 1 1 6 0v1h3z"/>
            </svg>

            <h3 class="text-3xl font-semibold text-gray-800 mt-6">Cơ bản tiếng Séc</h3>

            <div class="flex mt-6">
                <div class="block w-3 h-3 mx-1 rounded bg-green-400"></div>
                <div class="block w-3 h-3 mx-1 rounded bg-gray-400"></div>
                <div class="block w-3 h-3 mx-1 rounded bg-gray-400"></div>
            </div>

            <p class="text-xs text-gray-600 font-semibold mt-2">Trình độ - dễ</p>

            <button @click="startQuiz"
                    class="bg-gray-400 px-24 py-4 mt-20 rounded-lg text-sm font-semibold text-gray-800 tracking-widest uppercase hover:bg-gray-500 focus:outline-none">
                Bắt đầu
            </button>
        </div>

        <div v-if="questionStage">
            <question
                :question="questions[currentQuestion]"
                v-on:answer="handleAnswer"
                :question-number="currentQuestion+1"
            ></question>
        </div>

        <div v-if="resultsStage">
            <div class="w-full my-24 flex flex-col items-center">
                <svg viewBox="0 0 20 20" fill="currentColor" class="w-24 h-24 text-gray-800"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>

                <h1 class="text-4xl font-bold text-gray-800 mb-4 mt-6 lg:mb-0">
                    You got {{correct}} out of {{questions.length}} questions right!
                </h1>

                <h3 class="text-2xl text-gray-800 mt-10 opacity-1 fade-in delay">
                    Your score is {{perc}}%
                </h3>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                introStage: true,
                questionStage: false,
                resultsStage: false,
                title: '',
                questions: [
                    {
                        "text": "Jak se jmenuješ?",
                        "type": "multiple",
                        "answer": "Jmenuji / jmenuju se Hanka.",
                        "answers": [
                            "Jmenuji / jmenuju se Hanka.",
                            "Se jmenuji Hanka.",
                            "Já se jmenuješ Hanka.",
                            "Jmenujeme se Hanka."
                        ],
                    },
                    {
                        "text": "……… Pán je Čech",
                        "type": "multiple",
                        "answer": "Ten",
                        "answers": [
                            "To",
                            "Ta",
                            "Ten",
                            "Tento"
                        ],
                    },
                    {
                        "text": "Odkud jsi?",
                        "type": "multiple",
                        "answer": "Jsem z Prahy.",
                        "answers": [
                            "Jste z Prahy.",
                            "Jsem z Praha.",
                            "Jsem z Prahy.",
                            "Jsi z Prahy."
                        ],
                    },
                    {
                        "text": "Jak se máte?",
                        "type": "multiple",
                        "answer": "Ngài / bà có khỏe không?",
                        "answers": [
                            "Bạn có khỏe không?",
                            "Các bạn có khỏe không?",
                            "Ngài / bà có khỏe không?",
                            "Họ có khỏe không?"
                        ],
                    },
                    {
                        "text": "……… dům je krásný.",
                        "type": "multiple",
                        "answer": "Náš",
                        "answers": [
                            "Naše",
                            "Naš",
                            "Náš",
                            "Našich"
                        ],
                    },
                    {
                        "text": "Mléko je …………",
                        "type": "multiple",
                        "answer": "Bílé",
                        "answers": [
                            "Bílé",
                            "Bílý",
                            "Bílí",
                            "Bílá"
                        ],
                    },
                    {
                        "text": "Mléko je …………",
                        "type": "multiple",
                        "answer": "Bílé",
                        "answers": [
                            "Bílé",
                            "Bílý",
                            "Bílí",
                            "Bílá"
                        ],
                    },
                    {
                        "text": "Jaké je vaše telefonní číslo?",
                        "type": "multiple",
                        "answer": "Moje telefonní číslo je ………",
                        "answers": [
                            "Moje telefonní číslo je ………",
                            "Můj telefon číslo je ………",
                            "Moje číslo telefonu je ………",
                            "Vaše telefonní číslo je ………"
                        ],
                    },
                    {
                        "text": "Odkud jste?",
                        "type": "multiple",
                        "answer": "Moje telefonní číslo je ………",
                        "answers": [
                            "Jsem z Vietnam.",
                            "Jsem z Vietnamu.",
                            "Pocházím z Vietnamu.",
                            "Jste z Vietnam."
                        ],
                    },
                    {
                        "text": "Co je správně?",
                        "type": "multiple",
                        "answer": "Ráda nakupuju v obchodu.",
                        "answers": [
                            "Ráda nakupuju v obchodu.",
                            "Ráda nakupuji v obchodu.",
                            "Líbí se mi nakupuju v obchodu.",
                            "Ráda nakupovat v obchodu."
                        ],
                    },
                    {
                        "text": "Tôi bị đau bụng và dạ dày.",
                        "type": "multiple",
                        "answer": "Bolí mě břicho a žaludek.",
                        "answers": [
                            "Bolí mé břicho.",
                            "Mě bolet žaludek a břicho.",
                            "Bolí mě břicho a žaludek.",
                            "Bolet mě břicho a žaludek."
                        ],
                    },
                ],
                currentQuestion: 0,
                answers: [],
                correct: 0,
                perc: null
            }
        },

        methods: {
            startQuiz() {
                this.introStage = false;
                this.questionStage = true;
            },
            handleAnswer(e) {
                console.log('answer event ftw', e);
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
                console.log('handle results');
                this.questions.forEach((a, index) => {
                    if (this.answers[index] === a.answer) this.correct++;
                });
                this.perc = ((this.correct / this.questions.length) * 100).toFixed(2);
                console.log(this.correct + ' ' + this.perc);
            }
        }
    }
</script>
