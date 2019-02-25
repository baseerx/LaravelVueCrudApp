<template>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary">Task Component</div>

                    <div class="card-body text-info">
                   <ul class="list-group">
                       <li class="list-group-item" v-for="t in tasks">
                           {{t.id}}-{{t.name}}
                           <span class="float-right"><button class="btn btn-sm btn-success">Add</button>|<button class="btn btn-sm btn-danger">Delete</button>|<button class="btn btn-sm btn-info">Preview</button></span>
                       </li>
                   </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
       data()
       {
         return{
               tasks:{}
           }
       },
        methods:
            {

            },
        created() {
           axios.get('http://127.0.0.1:8000/tasks')
               .then((response)=>this.tasks=response.data)
               .catch(error=>console.log(error));
           console.log("task component loaded");
        }
    }
</script>

<style scoped>

</style>
