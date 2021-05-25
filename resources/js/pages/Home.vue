<template>
    <div>
        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col 12">
                        <h1 class="text-center font-weight-bold">
                            {{ message }}
                        </h1>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                message: 'Benvenuto!'
            }
        }
    }
</script>
