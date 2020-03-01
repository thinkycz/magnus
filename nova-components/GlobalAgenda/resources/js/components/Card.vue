<template>
    <card class="flex flex-col items-center justify-center p-8" style="min-height: 300px">
        <FullCalendar
                ref="fullCalendar"
                :first-day="1"
                :plugins="calendarPlugins"
                :weekends="calendarWeekends"
                :events="calendarEvents"
                :header="{
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,listWeek'
            }"
        />
    </card>
</template>

<script>
    import FullCalendar from "@fullcalendar/vue";
    import dayGridPlugin from "@fullcalendar/daygrid";
    import timeGridPlugin from "@fullcalendar/timegrid";
    import interactionPlugin from "@fullcalendar/interaction";

    export default {
        components: {
            FullCalendar
        },

        data() {
            return {
                calendarPlugins: [
                    dayGridPlugin,
                    timeGridPlugin,
                    interactionPlugin
                ],
                calendarWeekends: true,
                calendarEvents: []
            };
        },

        mounted() {
            axios.get('/magnus/global-agenda/events').then(response => {
                this.events = response.data;

                if (this.events) {
                    this.events.forEach((event) => {
                        this.calendarEvents.push({
                            title: event.title,
                            start: event.starts_at,
                            end: event.ends_at,
                            url: event.url,
                            color: event.color
                        })
                    })
                }
            });
        },
    }
</script>

<style>
    @import "~@fullcalendar/core/main.css";
    @import "~@fullcalendar/daygrid/main.css";
    @import "~@fullcalendar/timegrid/main.css";
</style>
