<template>
    <div class="container">
        <div class="row">
                <form action="/formulary/create" method="POST">
                    <div class="form-group" style="width:50rem">

                        <label color="black">Project Name</label>
                        <input type="text" class="form-control" name="project_name" placeholder="Write here the name for the project">
                        <label>Cost</label>
                        <input type="number" class="form-control" name="project_cost">
                        <label>Cost Limit</label>
                        <input type="number" class="form-control" name="project_limit">
                        <label>Date Start</label>
                        <input type="date" class="form-control" name="project_start">
                        <label>Date End</label>
                        <input type="date" class="form-control" name="project_end">
                        <label>Description</label>
                        <input type="text" class="form-control" name="project_description">
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