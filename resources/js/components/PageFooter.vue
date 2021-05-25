<template>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="logo-footer">
                        <img :src="footerLogoImg" alt="La Molisana Logo">
                    </div>
                    <div class="dati-footer">
                        <p class="mb-0" v-for="infoitem in info" v-html="infoitem"></p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-footer">
                        <h4 class="text-uppercase font-weight-bold">
                            {{ menu.col2a.title }}
                        </h4>
                        <ul class="pl-0">
                            <li v-for="item in menu.col2a.items">
                                <a :href="item.link">{{ item.label }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="menu-footer">
                        <h4 class="text-uppercase font-weight-bold">
                            {{ menu.col2b.title }}
                        </h4>
                        <ul class="pl-0">
                            <li v-for="item in menu.col2b.items">
                                <a :href="item.link">{{ item.label }}</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="menu-footer">
                        <h4 class="text-uppercase font-weight-bold">
                            {{ menu.col3.title }}
                        </h4>
                        <ul class="pl-0">
                            <li v-for="item in menu.col3.items">
                                <a :href="item.link">{{ item.label }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <img :src="footerBg">
    </footer>
</template>

<script>
    export default {
        data() {
            return {
                footerLogoImg: '/images/la-molisana-logo.png',
                footerBg: '/images/footer-montagne-bottom.jpg',
                info: [
                    'Ragione Sociale: La Molisana S.p.A.',
                    'Sede Legale: Contrada Colle delle Api, 100/A<br>86100 - Campobasso (CB)',
                    'Pec: lamolisana@pec.it',
                    'Tel: +39 0874 4981',
                    'Fax: +39 0874 629584',
                    'info@lamolisana.it (per segnalazioni degli utenti)',
                    'commerciale@lamolisana.it',
                    'export@lamolisana.it'
                ],
                menu: {
                    col2a: {
                        title: 'Pastificio',
                        items: [
                            {
                                link: '#',
                                label: 'Il Pastificio'
                            },
                            {
                                link: '#',
                                label: 'Grano decorticato a pietra'
                            },
                            {
                                link: '#',
                                label: 'Il Molise c\'è'
                            },
                            {
                                link: '#',
                                label: 'Filiera Integrata'
                            },
                            {
                                link: '#',
                                label: '100 anni di pasta'
                            },
                            {
                                link: '#',
                                label: 'Sartoria della pasta'
                            },
                            {
                                link: '#',
                                label: 'Spaghetto Quadrato'
                            },
                            {
                                link: '#',
                                label: 'Le Persone'
                            }
                        ]
                    },
                    col2b: {
                        title: 'Prodotti',
                        items: [
                            {
                                link: '#',
                                label: 'Le Classiche'
                            },
                            {
                                link: '#',
                                label: 'Le Integrali'
                            },
                            {
                                link: '#',
                                label: 'Le Speciali'
                            },
                            {
                                link: '#',
                                label: 'Le Biologiche'
                            },
                            {
                                link: '#',
                                label: 'Le Gluten-Free'
                            },
                            {
                                link: '#',
                                label: 'Le Semole'
                            },
                            {
                                link: '#',
                                label: 'Le Extra di Lusso'
                            }
                        ]
                    },
                    col3: {
                        title: 'Collezione da chef',
                        items: [
                            {
                                link: '#',
                                label: 'Collezione da Chef'
                            },
                            {
                                link: '#',
                                label: 'Grandi Cucine'
                            },
                            {
                                link: '#',
                                label: 'Biologiche'
                            },
                            {
                                link: '#',
                                label: 'Quadrate'
                            }
                        ]
                    }
                }
            }
        }
    }
</script>

<style scoped lang="scss">
    @import "../../sass/variables";

    footer {
        padding-top: 50px;

        .menu-footer {
            ul {
                list-style-type: none;

                li {
                    a {
                        color: $text-color;
                    }
                }
            }
        }

        img {
            max-width: 100%;
            display: block;
            height: 150px;
            object-fit: cover;
        }
    }
</style>
