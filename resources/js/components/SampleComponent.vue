<template>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-danger text-info">{{ name }}</div>

                    <div class="card-body text-info">
                        I'm an{{name}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Sample Component mounted.')
        },
        data()
        {
           return{
                name:" Sample Component"
            }
        }

    }
</script>
