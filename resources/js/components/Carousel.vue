<template>
    <div class="container">
      <v-container v-if="ready">
       <v-card
          elevation="24"
          max-width="900"
          class="mx-auto"
        >
          <v-system-bar lights-out></v-system-bar>
          <v-carousel
            :continuous="false"
            :cycle="true"
            delimiter-icon="mdi-minus"
            height="400"
          >
            <v-carousel-item
              v-for="(notification, index) in notifications"
              :key="index"
            >
              <v-sheet
                color="#1B4188"
                height="100%"
                tile
              >
                <v-row
                  class="fill-height"
                  align="center"
                  justify="center"
                >
                  <div class="pa-12 text-h5">
                    {{ notification.title }}
                  </div>
                </v-row>
              </v-sheet>
            </v-carousel-item>
          </v-carousel>
          <v-list two-line>
            <v-list-item>
              <v-list-item-content>
                <span class="carousel-text">Eureka</span>
              </v-list-item-content>
              <v-list-item-action>
                <v-btn color="#1B4188" to="/vijesti">Pregled članaka</v-btn>
              </v-list-item-action>
            </v-list-item>
          </v-list>
        </v-card>
    </v-container>
    </div>
</template>

<script>
  export default {
    data () {
      return {
        ready: false,
        notifications: []
      }
    },
    created(){
      let config = {
          headers: {
            'language': 'hr',
          }
        }

        let data = {
            'categories': ['eureka'],
            'postsPerPage': 4
        }

        this.axios
        .post('https://web-admin.sum.ba/api/web/objave', data, config)
        .then(response => {
            this.notifications = response.data
            console.log(this.notifications)
            this.ready = true
          });
    }
  }
</script>
<style scoped>
.carousel-text{
  font-size: 24px;
  color:#1B4188;
}
</style>



