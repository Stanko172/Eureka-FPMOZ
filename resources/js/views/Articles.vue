<template>
    <div>
      <Navbar />

      <Carousel />

      <v-container class="container-margin">
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
                class="mx-auto"
                max-width="400"
              >
                <v-img
                  class="white--text align-end"
                  height="200px"
                  src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
                >
                </v-img>

                <v-card-text class="text--primary">
                  <div style="font-size: 18px; color: #1B4188; line-height: 32px;">Interview sa prodekanom za nastavu - Marin Ćorluka</div>
                </v-card-text>

                <v-card-actions>
                  <v-btn
                    color="#1B4188"
                    block
                  >
                    Opširnije
                  </v-btn>
                </v-card-actions>
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
  </div>
</template>

<script>
import Navbar from '../components/Navbar.vue';
import Carousel from '../components/Carousel.vue';
export default {
  components: {
    Navbar,
    Carousel
  },
  data: () => ({
    notifications: [],
    loading: true,
    api: `https://${window.location.host}/api/articles`,
    months: [
      'Siječanj',
      'Veljača',
      'Ožujak',
      'Travanj',
      'Svibanj',
      'Lipanj',
      'Srpanj',
      'Kolovoz',
      'Rujan',
      'Listopad',
      'Studeni',
      'Prosinac'
    ],
    days: [
      'Nedjelja',
      'Ponedjeljak',
      'Utorak',
      'Srijeda',
      'Četvrtak',
      'Petak',
      'Subota'
    ],
    page: 1,
    perPage: 8
  }),
  methods: {
    formatDate(date) {
      return `
        ${this.days[new Date(date).getDay()]},
        ${new Date(date).getDate()}
        ${this.months[new Date(date).getMonth()]}
        ${new Date(date).getFullYear()}
        ${('0' + new Date(date).getHours()).slice(-2)}:${(
        '0' + new Date(date).getMinutes()
      ).slice(-2)}
      `;
    },
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
<style scoped>
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




