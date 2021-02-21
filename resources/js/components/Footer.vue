<template>
  <v-footer
    style="z-index: 1000;"
      color="#1B4188"
      padless
    >
      <v-row
        justify="center"
        no-gutters
      >
        <v-btn
          v-for="link in links"
          :key="link"
          color="white"
          text
          rounded
          class="my-2"
          :to="link.route"
        >
          {{ link.name }}
        </v-btn>
        <v-col
          cols="12"
          style="background: #2a60c4ad;"
        >
          <div style="color: white; text-align: center; padding: 15px;">
            {{ new Date().getFullYear() }} — <strong>Eureka</strong>
          </div>
        </v-col>
      </v-row>
    </v-footer>
</template>

<script>
  export default {
      data(){
        return{
          links: [
            {
              name: 'Naslovnica',
              route: '/'
            },
            {
              name: 'Članci',
              route: '/vijesti'
            },
            {
              name: 'Izdanja',
              route: '/izdanja'
            },
            {
              name: 'Studiji',
              route: '/studiji'
            }
          ],
        }
      }
  }
</script>

 