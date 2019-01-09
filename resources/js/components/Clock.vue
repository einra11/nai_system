<template>
    <h5>{{yearMonthString}}-{{dateTimeString}}</h5>
</template>

<script>
    import moment from 'moment'
    export default {
        data (){
            return{
                yearMonthString:'',
                dateTimeString:''
            }
        },
        created() {
            this.dateTimeString = moment().format('ddd hh:mm:ss A');
            this.yearMonthString =moment().format('MMMM YYYY');

            setInterval(()=>{
            this.dateTimeString = moment().format('ddd hh:mm:ss A');
            },1000)
        },
    }
</script>
