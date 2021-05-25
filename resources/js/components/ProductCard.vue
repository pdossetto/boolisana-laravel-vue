<template>
    <div class="card border-0">
        <img :src="product.thumb_img" :alt="product.title">
        <div class="overlay">
            <router-link :to="{ name:'prodotto', params: {slug: product.slug} }">
                <h3 class="text-center">{{ product.title }}</h3>
            </router-link>
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
    .card {
        width: calc(100% / 3);
        position: relative;

        img {
            max-width: 100%;
        }

        .overlay {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;

            a {
                color: $text_color;
                text-decoration: none;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100%;
                padding: $spacing / 2;
            }
        }

        &:hover .overlay {
            display: block;
            background-color: rgba(255, 255, 255, 0.6);
        }
    }
</style>
