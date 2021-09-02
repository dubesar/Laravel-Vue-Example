<template>
    <div>
        <div>
            <input v-model="inp" placeholder="task"/>
            <button v-on:click="submitForm">Submit</button>
        </div>
        <div v-for="list in lists" :key="list.id">
            <li>{{list.body}}</li>
        </div>
        
    </div>
</template>

<script>
export default {
    data() {
        return {
            message: "Hello, Example world",
            lists: [],
            inp: ""
        }
    },
    mounted() {
        //get the tasks
        axios.get('current_tasks').then((res) => {
            this.lists = res.data
        }).catch((err) => {
            console.log(err)
        })
        console.log('Example component mounted.')
    },
    methods: {
        //create task!
        submitForm: function() {
            axios.post('create_task', {body: this.inp, archive: 0})
        }
    }
}
</script>