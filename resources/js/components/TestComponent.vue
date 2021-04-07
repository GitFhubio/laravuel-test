<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Test Component</div>

                    <div class="card-body">
                        {{laptop.model}}
                        {{laptop.price}}
                        {{laptop.description}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name:'TestComponent',
        props:{
         laptop:Object
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
