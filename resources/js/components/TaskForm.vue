<template>
    <div class="container">
        <div class="row">
                <form action="/task/create" method="POST">
                    <div class="form-group" style="width:50rem">

                        <label color="black">Task asigned to project: </label>
                        <input type="text" class="form-control" name="task_asigned_project">

                        <label color="black">Task Name</label>
                        <input type="text" class="form-control" name="task_name" placeholder="Write here the name for the task">

                        <label color="black">Task Owner</label>
                        <input type="text" class="form-control" name="task_owner">

                        <label>Group Owner</label>
                        <input type="number" class="form-control" name="task_group_owner">

                        <label>Date Start</label>
                        <input type="date" class="form-control" name="task_start">

                        <label>Date End</label>
                        <input type="date" class="form-control" name="task_end">

                        <label>Priority</label>
                        <input type="text" class="form-control" name="task_priority">
                        
                        <label>Description</label>
                        <input type="text" class="form-control" name="task_description">

                        <button type="input" class="btn btn-primary">Enviar</button>
                        <input type="hidden" name="_token" v-bind:value="csrf">
                    </div>
                </form>
        </div>
    </div>
</template>
 
<script>
   export default {
    props: ['csrf', 'oldName'],
    mounted() {
            console.log('Component mounted.')
        }
    }
</script>