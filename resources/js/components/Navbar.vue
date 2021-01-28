<template>
  <div>
    <v-app-bar app color="#1B4188">
      <v-app-bar-nav-icon
        class="hidden-lg-and-up"
        @click="drawer = true"
      ></v-app-bar-nav-icon>

      <v-toolbar-title class="light"
        > <i class="far fa-lightbulb mr-3" style="font-size: 24px; color: #F8FF6B !important;"></i><span style="letter-spacing: 2.4px !important; font-weight: bold;">Eureka</span></v-toolbar-title
      >
      <v-spacer></v-spacer>

      <div class="hidden-md-and-down">
        <v-btn text to="/" class="light">Naslovnica</v-btn>
        <v-btn text to="/tecajevi_pregled" class="light">Članci</v-btn>
        <v-btn text to="/postani_clan" class="light">Izdanja</v-btn>
        <v-btn text to="/postani_clan" class="light">Studiji</v-btn>
      </div>

      </v-sheet>
    </v-app-bar>

    <!--Navigation drawer for small devices-->
    <v-navigation-drawer v-model="drawer" absolute temporary style="z-index: 10000">
      <v-list nav dense>
        <v-list-item-group
          v-model="group"
          active-class="deep-purple--text text--accent-4"
        >
          <v-list-item>
            <v-list-item-icon>
              <i class="fas fa-columns"></i>
            </v-list-item-icon>
            <v-list-item-title><v-btn text to="/"><span style="color: black !important;">Naslovnica</span></v-btn></v-list-item-title>
          </v-list-item>

          <v-list-item>
            <v-list-item-icon>
              <i class="fas fa-newspaper"></i>
            </v-list-item-icon>
            <v-list-item-title><v-btn text to="/tecajevi_pregled"><span style="color: black !important;">Članci</span></v-btn></v-list-item-title>
          </v-list-item>

          <v-list-item>
            <v-list-item-icon>
              <i class="fas fa-book-open"></i>
            </v-list-item-icon>
            <v-list-item-title><v-btn text to="/postani_clan"><span style="color: black !important;">Izdanja</span></v-btn></v-list-item-title>
          </v-list-item>

          <v-list-item>
            <v-list-item-icon>
              <i class="fas fa-university"></i>
            </v-list-item-icon>
            <v-list-item-title><v-btn text to="/auth"><span style="color: black !important;">Studiji</span></v-btn></v-list-item-title>
          </v-list-item>

        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>
  </div>
</template>

<script>
export default {
  data() {
    return {
      drawer: false,
      group: null,
    };
  },
  methods: {},
};
</script>

<style>
.v-btn__content,
.light {
  color: white !important;
}

.fas{
  font-size: 24px;
  color: #1B4188;
}
</style>