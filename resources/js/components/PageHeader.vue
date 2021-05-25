<template>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="logo">
                        <img :src="logoImg" alt="La Molisana - logo">
                    </div>
                    <div id="main-menu">
                        <nav class="mt-5">
                            <ul>
                                <li class="nav-item" v-for="(menuItem, index) in menuItems" :key="index">
                                    <router-link class="nav-link font-weight-bold" :to="{ name: menuItem.name }" :exact="menuItem.name == 'home'">
                                        <!-- l'attributo 'exact' serve per evitare che l'homepage sia sempre active -->
                                        {{ menuItem.label }}
                                    </router-link>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
    export default {
        data() {
            return {
                logoImg: '/images/la-molisana-logo.png',
                menuItems: [
                    {
                        name: 'home',
                        label: 'Home'
                    },
                    {
                        name: 'prodotti',
                        label: 'Prodotti'
                    },
                    {
                        name: 'prodotti2',
                        label: 'Prodotti 2'
                    },
                    {
                        name: 'chi-siamo',
                        label: 'Chi Siamo'
                    },
                    {
                        name: 'contatti',
                        label: 'Contatti'
                    }
                ]
            }
        }
    }
</script>

<style scoped lang="scss">
    @import "../../sass/variables";
    header {
        text-align: center;

        ul {
            list-style-type: none;
            display: flex;
            justify-content: center;

            li {


                a {
                    text-decoration: none;
                    color: $text_color;
                    font-size: 18px;
                    display: inline-block;
                    padding: 15px;

                    &:hover, &.active {
                        background-color: $main_color;
                    }
                }
            }
        }
    }

</style>
