<template>
    <div class="container">

        <Navbar />

        <v-container>
            <v-row>
                <v-col v-for="(item, index) in items" :key="index" cols="12" md="4">
                    <v-card
                        class="mx-auto"
                        max-width="344"
                      >
                        <v-img
                          :src="item.url"
                          height="200px"
                        ></v-img>

                        <v-card-title>
                          {{ item.name }}
                        </v-card-title>

                        <v-card-actions class="d-flex justify-end">
                          <v-dialog scrollable>
                              <template v-slot:activator="{ on }">
                                <v-btn color="#1B4188" v-on="on" style="margin-right: 1em" rounded class="mb-5">
                                  <v-icon left class="white--text">mdi-play</v-icon>
                                  <span class="button-text">Video</span>
                                </v-btn>
                              </template>
                              <v-card height="78vh">
                                <iframe
                                  height="100%"
                                  :src="item.video"
                                  frameborder="0"
                                  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                  allowfullscreen
                                ></iframe>
                              </v-card>
                            </v-dialog>

                            <v-btn :href="item.info" color="#1B4188" style="margin-right: 1em" rounded    class="mb-5">
                              <v-icon left class="white--text">mdi-eye</v-icon>
                              <span class="button-text" >Više</span>
                            </v-btn>
                        </v-card-actions>
                      </v-card>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>

<script>
import Navbar from '../components/Navbar.vue';
    export default {
        components:{
            Navbar
        },
        data(){
            return{
                items:[
                    {
                        name: 'Informatika',
                        url: 'https://iili.io/fjldAB.jpg',
                        video: 'https://www.youtube.com/embed/r6MPUWNKSvQ',
                        info: 'https://www.fpmoz.sum.ba/index.php?option=com_content&view=category&layout=blog&id=14&Itemid=122&lang=hr'
                    },
                    {
                        name: 'Biologija',
                        url: 'https://iili.io/fjl98Q.jpg',
                        video: 'https://www.youtube.com/embed/Etkp5WbYIBI',
                        info: 'https://www.fpmoz.sum.ba/index.php?option=com_content&view=category&layout=blog&id=18&Itemid=126&lang=hr'
                    },
                    {
                        name: 'Geografija',
                        url: 'https://iili.io/fjlJ9V.jpg',
                        video: 'https://www.youtube.com/embed/KPw3zzRCKE0',
                        info: 'https://www.fpmoz.sum.ba/index.php?option=com_content&view=category&layout=blog&id=20&Itemid=128&lang=hr'
                    },
                    {
                        name: 'Turizam i zaštita okoliša',
                        url: 'https://iili.io/fjlJ9V.jpg',
                        video: 'https://www.youtube.com/embed/KPw3zzRCKE0',
                        info: 'https://www.fpmoz.sum.ba/index.php?option=com_content&view=category&layout=blog&id=21&Itemid=129&lang=hr'
                    },
                    {
                        name: 'Kemija',
                        url: 'https://iili.io/fjcycx.jpg',
                        video: 'https://www.youtube.com/embed/Fsi4Sq9VaMg',
                        info: 'https://www.fpmoz.sum.ba/index.php?option=com_content&view=category&layout=blog&id=16&Itemid=124&lang=hr'
                    },
                    {
                        name: 'Predškolski odgoj',
                        url: 'https://iili.io/fjlKoF.jpg',
                        video: 'https://www.youtube.com/embed/9ygnVwZa50o',
                        info: 'https://www.fpmoz.sum.ba/index.php?option=com_content&view=category&layout=blog&id=23&Itemid=133&lang=hr'
                    },
                    {
                        name: 'Znanost o okolišu',
                        url: 'https://iili.io/fjlqPa.jpg',
                        video: 'https://www.youtube.com/embed/K1-zJTUrsvc',
                        info: 'https://www.fpmoz.sum.ba/index.php?option=com_content&view=category&layout=blog&id=19&Itemid=127&lang=hr'
                    },
                    {
                        name: 'Razredna nastava',
                        url: 'https://iili.io/fjlfMg.jpg',
                        video: 'https://www.youtube.com/embed/kdQQSu9eWvs',
                        info: 'https://www.fpmoz.sum.ba/index.php?option=com_content&view=category&layout=blog&id=22&Itemid=132&lang=hr'
                    },
                    {
                        name: 'Tehnika',
                        url: 'https://iili.io/fjl3t1.jpg',
                        video: 'https://www.youtube.com/embed/P7TQ80BdX2s',
                        info: 'https://www.fpmoz.sum.ba/index.php?option=com_content&view=category&layout=blog&id=15&Itemid=123&lang=hr'
                    },
                    {
                        name: 'Matematika',
                        url: 'https://iili.io/fjl2wP.jpg',
                        video: 'https://www.youtube.com/embed/wsPyZLHOY_4',
                        info: 'https://www.fpmoz.sum.ba/index.php?option=com_content&view=category&layout=blog&id=13&Itemid=121&lang=hr'
                    }
                ]
            }
        }
    }
</script>
