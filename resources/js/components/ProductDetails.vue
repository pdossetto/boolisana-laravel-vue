<template>
    <div class="descrizione">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p v-html="product.description"></p>
                    <div class="info">
                        <div class="info-box">
                            <i class="fas fa-2x fa-info"></i>
                            <p>
                                {{ product.shape.name }}
                            </p>
                        </div>
                        <div class="info-box">
                            <i class="far fa-2x fa-clock"></i>
                            <p>{{ product.cooking_time }} min.</p>
                        </div>
                        <div class="info-box">
                            <i class="fas fa-2x fa-weight-hanging"></i>
                            <p>{{ product.weight }} g</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['product']
    }
</script>

<style scoped lang="scss">
    @import "../../sass/variables";
    .descrizione {
        padding: 50px 0;
        background-color: $main_color;
        line-height: 1.5;
    }

    .info {
        display: flex;
        padding: $spacing / 2 0;

        .info-box {
            flex-grow: 1;
            text-align: center;
        }
    }
</style>
