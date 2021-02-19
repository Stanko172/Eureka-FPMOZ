<template>
    <div>
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

          <h2 class="pt-10 mb-10"style="color: #1B4188;">{{ notification.title }}</h2>

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
                        v-for="(i, index) in 2"
                        :key="index"

                      >
                        <v-card-title>
                          <span class="title font-weight-light">Eureka</span>
                        </v-card-title>

                        <v-card-text class="text-body-1">
                          "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
                        </v-card-text>

                        <v-card-actions>

                        </v-card-actions>
                      </v-card>
                  </v-col>
              </v-row>
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
                notification: {},
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
                  text: 'Link 2',
                  disabled: true,
                  to: 'breadcrumbs_link_2',
                },
              ],
            }
        },
        created() {
            let config = {
              headers: {
                'language': 'hr',
              }
            }

            let data = {
                'categories': ['eureka']
            }

            let article_alias= this.$route.params.alias

            this.axios
            .post('https://web-admin.sum.ba/api/web/objave', data, config)
            .then(response => {
                response.data.forEach(notification =>{
                    if(notification.alias === article_alias){
                        this.notification = notification
                    }
                })

                console.log(this.notification)
              });
            }
    }
</script>
