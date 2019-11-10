<template>
    <card class="flex flex-col items-center justify-center" style="min-height: 300px">
        <calendar>
            <ul class="" slot="dateCellRender" slot-scope="value">
                <li v-for="event in getDayEvents(value)" :key="event.id">
                    {{ event.title }}
                </li>
            </ul>
        </calendar>
    </card>
</template>

<script>
    import {Antd, Calendar} from 'ant-design-vue';
    import 'ant-design-vue/lib/calendar/style/index.css';
    import 'ant-design-vue/lib/select/style/index.css';
    import 'ant-design-vue/lib/radio/style/index.css';

    export default {
        props: [
            'card',
        ],

        data() {
            return {
                events: null
            }
        },

        methods: {
            getDayEvents(calendar_date) {
                let dayEvents = [];

                if (this.events) {
                    this.events.forEach((event) => {
                        let event_date = moment(event.starts_at);

                        if (moment(event_date).isSame(calendar_date, 'day')) {
                            dayEvents.push(event)
                        }
                    })
                }

                return dayEvents
            }
        },

        mounted() {
            axios.get('/magnus/agenda/events').then(response => {
                this.events = response.data
            });
        },

        components: {
            Calendar
        }
    }
</script>
