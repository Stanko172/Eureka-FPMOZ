<template>
    <div v-if="ready">
        <Navbar />
        
        <v-container>

          <v-breadcrumbs :items="items">
            <template v-slot:item="{ item }">
              <v-breadcrumbs-item
                :href="'https://eureka.fpmoz.sum.ba/#' + item.to"
                :disabled="item.disabled"
              >
                {{ item.text.toUpperCase() }}
              </v-breadcrumbs-item>
            </template>
          </v-breadcrumbs>

        <v-container>
          <h2 class="pt-10 mb-10" style="color: #1B4188;">{{ notification.title }}</h2>

          <!--Article info-->
          <v-row>
              <v-col cols="12" sm="4" md="3"><i class="far fa-user"></i><span class="icon-text">{{ notification.author }}</span></v-col>
              <v-col cols="12" sm="4" md="3"><i class="far fa-calendar-alt"></i><span class="icon-text">{{ notification.date_diff }}</span></v-col>
              <v-col cols="12" sm="4" md="3"><i class="far fa-eye"></i><span class="icon-text">{{ notification.views }}</span></v-col>
          </v-row>
        </v-container>


          <v-container>
              <v-row>
                  <v-col sm="12" md="8" lg="8">
                    <v-img
                      height="400"
                      width="700"
                      :src="'https://web-admin.sum.ba/api/storage/' + notification.image"
                    ></v-img>
                  </v-col>
                  <v-col sm="12" md="4" lg="4">
                    <v-card
                        class="mx-auto mb-5"
                        color="#1B4188"
                        dark
                        max-width="400"
                        height="190"
                        v-for="(article, index) in filteredArticles"
                        :key="index"

                      >
                        <div class="d-flex justify-content-between align-center">

                            <v-card-title>
                              <span class="title font-weight-light">Eureka</span>
                            </v-card-title>

                            <v-btn text @click="goToArticle(article.alias)">Više</v-btn>
                        </div>

                        <v-card-text class="text-body-1">
                          {{ article.title }}
                        </v-card-text>

                        <v-card-actions>

                        </v-card-actions>
                      </v-card>
                  </v-col>
              </v-row>

              <!--Social media-->
              <v-row
                align="center"
                justify="space-around"
              >

                <v-col align="center">
                    <v-btn
                      tile
                      color="success"
                      id="social-btn-1"
                      href="https://www.facebook.com/eurekafpmoz"
                    >
                      <i class="fab fa-facebook-f"></i>
                      | facebook
                    </v-btn>
                </v-col>

                <v-col align="center">
                    <v-btn
                      tile
                      color="success"
                      id="social-btn-2"
                      href="https://www.instagram.com/eureka_fpmoz/"
                    >
                      <i class="fab fa-instagram"></i>
                      | instagram
                    </v-btn>
                </v-col>

                <v-col align="center">
                    <v-btn
                      tile
                      color="success"
                      id="social-btn-3"
                      href="https://www.youtube.com/channel/UCUAX6vt6JLFuf_9jM_pHMLw"
                    >
                      <i class="fab fa-youtube"></i>
                      | youtube
                    </v-btn>
                </v-col> 

              </v-row>

              <v-container v-html="notification.content" class="mt-5 text-justify">

              </v-container>

          </v-container>

        <!--Article images-->
        <h2 class="pt-10 mb-10" style="color: #1B4188;">Slike</h2>

        <v-container fluid>
            <v-row>
                <v-col cols="12" md="6" lg="4" v-for="(image, index) in notification.images" :key="index" class="d-flex justify-center justify-md-start">
                    <!-- img -->
                    <a @click="toggleImage(image)">
                      <v-img
                      width="300"
                      height="200"
                      :src=" 'https://web-admin.sum.ba/api/storage/' + image"
                    ></v-img>
                    </a>

                    <!-- img hidden -->
                    <a @click="toggleImage(image)" class="lb" :id="image">
                      <img :src=" 'https://web-admin.sum.ba/api/storage/' + image">
                    </a>
                </v-col>
            </v-row>
        </v-container>

        <!--Article documents-->
        <div v-if="notification.documents.length !== 0">
            <h2 class="pt-10 mb-10" style="color: #1B4188;">Dokumenti</h2>
            
             <v-expansion-panels>
                <v-expansion-panel
                  v-for="(document,index) in notification.documents"
                  :key="index"
                >
                  <v-expansion-panel-header>
                    {{ document.title }}
                  </v-expansion-panel-header>
                  <v-expansion-panel-content>
                    <a :href="'https://web-admin.sum.ba/api/storage/' + document.filename">Preuzmi ovdje</a>
                  </v-expansion-panel-content>
                </v-expansion-panel>
              </v-expansion-panels>
        </div>

        <div v-if="notification.video !== null">
            <h2 class="pt-10 mb-10" style="color: #1B4188;">Video</h2>
            
            <div class="text-center mb-6 mt-4">
                <v-dialog scrollable>
                  <template v-slot:activator="{ on }">
                    <v-btn color="#1B4188" v-on="on" style="margin-right: 1em" rounded class="mb-5">
                      <v-icon left class="white--text">mdi-play</v-icon>
                      <span class="button-text">Pogledajte video</span>
                    </v-btn>
                  </template>
                  <v-card height="78vh">
                    <iframe
                      height="100%"
                      :src="notification.video"
                      frameborder="0"
                      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen
                    ></iframe>
                  </v-card>
                </v-dialog>
            </div>
        </div>  

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
                ready: false,
                notifications: [],
                notification: {},
                notification_id: null,
                items: [
                {
                  text: 'Naslovnica',
                  disabled: false,
                  to: '/',
                },
                {
                  text: 'Članci',
                  disabled: false,
                  to: '/vijesti',
                },
                {
                  text: '',
                  disabled: true
                },
              ],
            }
        },
        methods:{
            goToArticle(alias){
                this.$router.push({name: 'Article', params: {alias: alias}})
                location.reload()
            },
            toggleImage(image){
                let element = document.getElementById(image)

                element.classList.toggle('lb_target')
            }
        },
        computed: {
            filteredArticles(){
                let not_len = this.notifications.length

                let notifications = this.notifications.filter(notification => {
                    return notification.id !== this.notification_id
                })

                if(not_len > 2){
                    return [notifications[0], notifications[1]]   
                }else if(not_len > 1){
                   return [notifications[0]]  
                }else{
                    return []
                }

                

            }
        },
        created() {
            let article_alias= this.$route.params.alias

            let config = {
              headers: {
                'language': 'hr',
              }
            }

            let data = {
                'categories': ['eureka']
            }

            let data2 = {
                'alias' : article_alias
            }

            this.axios
            .post('https://web-admin.sum.ba/api/web/objava', data2, config)
            .then(response => {
                this.notification = response.data
                this.notification.image = response.data.images[0]
              });

            this.axios
            .post('https://web-admin.sum.ba/api/web/objave', data, config)
            .then(response => {
                this.notifications = response.data
                response.data.forEach(notification =>{
                    if(notification.alias === article_alias){
                        this.notification_id = notification.id

                        this.items[2].text = notification.alias 
                    }
                })

                console.log(this.notification)
                this.ready = true
              });

            
        }
    }
</script>

<style scoped>
    .far{
        font-size: 24px;
        color: #1B4188;
        margin-right: 12px;
    }

    .icon-text{
        font-size: 18px;
    }

    .fab{
        font-size: 24px;
        margin-right: 12px;
    }

    #social-btn-1{
        background: rgb(59, 89, 152) !important;
    }

    #social-btn-2{
        background: rgb(251, 173, 80) !important;
    }

    #social-btn-3{
        background: rgb(255, 0, 0) !important;
    }

    /*Article images CSS*/
    .lb {
      display: none;
      position: fixed!important;
      z-index: 999;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background: rgba(0,0,0,0.8);
      text-align:center;
    }

    .lb img {
        max-width: 90%;
        max-height: 80%;
        margin-top: 8%;
    }

    .lb_target {
        outline: none;
        display: block;
    }

    a.lb:hover {cursor:default;}
    img:hover {cursor:pointer;}

    @media only screen and (max-width: 600px) {
    .lb {
      top: 10%;
      left: 0;
    }
  }

</style>
