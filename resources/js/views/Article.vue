<template>
    <div v-if="ready">
        <Navbar />
        
        <v-container>

          <v-breadcrumbs :items="items">
            <template v-slot:item="{ item }">
              <v-breadcrumbs-item
                :href="'http://localhost/Eureka/public/#' + item.to"
                :disabled="item.disabled"
              >
                {{ item.text.toUpperCase() }}
              </v-breadcrumbs-item>
            </template>
          </v-breadcrumbs>

        <v-container>
          <h2 class="pt-10 mb-10"style="color: #1B4188;">{{ notification.title }}</h2>

          <!--Article info-->
          <v-row>
              <v-col sm="12" md="4" lg="3"><i class="far fa-user"></i><span class="icon-text">{{ notification.author }}</span></v-col>
              <v-col sm="12" md="4" lg="3"><i class="far fa-calendar-alt"></i><span class="icon-text">{{ notification.date_diff }}</span></v-col>
              <v-col sm="12" md="4" lg="3"><i class="far fa-eye"></i><span class="icon-text">{{ notification.views }}</span></v-col>
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

              <v-container v-html="notification.content" class="text-justify">

              </v-container>
          </v-container>
          
            
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
            }
        },
        computed: {
            filteredArticles(){
                let not_len = this.notifications.length

                let notifications = this.notifications.filter(notification => {
                    return notification.id !== this.notification_id
                })

                console.log("hahaha", notifications)

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
</style>
