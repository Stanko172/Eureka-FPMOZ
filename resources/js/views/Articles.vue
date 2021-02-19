
<template>
  <v-container class="container-margin">
    <Navbar />
    <v-app>
      <v-skeleton-loader
        :loading="loading"
        type="card"
        transition="scale-transition"
        v-for="(notification, i) in visiblePages"
        :key="i"
      >
        <v-hover
          v-slot:default="{ hover }"
          close-delay="80"
        >
          <v-card
            class="mx-auto mt-6"
            v-model="page"
            shaped
            outlined
            width="90%"
            :elevation="hover ? 8 : 2"
          >
            <v-card-text>
              <v-container>
                <v-row>
              <v-col cols="4">

                <v-img
                  width="350"
                  height="220"
                  :src=" 'https://web-admin.sum.ba/api/storage/' + notification.image"
                ></v-img>

              </v-col>

              <v-col cols="8">

                <div class="d-flex flex-column justify-content-between" style="height: 100%;">

                  <div>
                <p class="display-1" color="blue darken-1">{{ notification.title }}</p>
                <p class="mt-n3">{{ notification.created_at }}</p>
                <div class="text--primary">{{notification.subtitle}}</div>
              </div>
                <div>
                  <v-btn color="#1B4188" @click="goToArticle(notification.alias)">Opširnije</v-btn>
                </div>

                </div>

              </v-col>
            </v-row>
            </v-container>
            </v-card-text>
          </v-card>
        </v-hover>
      </v-skeleton-loader>

      <v-pagination
        v-model="page"
        :length="Math.ceil(notifications.length/perPage)"
        class="pagination-margin"
      ></v-pagination>
    </v-app>
  </v-container>
</template>

<script>
import Navbar from '../components/Navbar.vue';
export default {
  components:{
    Navbar
  },
  data: () => ({
    notifications: [{}, {}, {}, {}, {}, {}],
    loading: true,
    page: 1,
    perPage: 8
  }),
  methods: {
    fetchData() {
        let config = {
          headers: {
            'language': 'hr',
          }
        }

        let data = {
            'categories': ['eureka']
        }

        this.axios
        .post('https://web-admin.sum.ba/api/web/objave', data, config)
        .then(response => {
            this.notifications = response.data
            console.log(this.notifications)
            this.loading = false
          });
    },
    scrollToTop() {
      this.$vuetify.goTo(0, {
        duration: 1000,
        offset: 0,
        easing: 'easeInOutCubic'
      });
    },
    goToArticle(alias){
      this.$router.push({name: 'Article', params: {alias: alias}})
    }
  },
  computed: {
    visiblePages() {
      this.scrollToTop();
      return this.notifications.slice(
        (this.page - 1) * this.perPage,
        this.perPage * this.page
      );
    }
  },
  created() {
    this.fetchData();
  }
};
</script>

<style>
#app .v-card--shaped {
  border-radius: 24px 4px;
}
.fade-enter-active,
.fade-leave-active {
  transition: opacity 1s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
#app .pagination-margin {
  margin: 32px 0 70px 0;
}
</style>



