<template>
    <div>
        <div v-for="(mcanswer,index) in question.answers">
            <input type="radio" :id="'answer'+index" name="currentQuestion" v-model="answer"
                   :value="mcanswer"><label :for="'answer'+index">{{mcanswer}}</label><br/>
        </div>
    </div>
</template>
