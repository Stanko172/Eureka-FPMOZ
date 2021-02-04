<template>
  <div class="switch__card">
    <v-container class="my-5 test">
      <v-layout row wrap>
        <v-flex xs12 md6 class="test">
          <v-card class="mx-auto" max-width="430px">
            <v-img class="white--text align-end" height="206px" src=""></v-img>

            <v-card-subtitle class="pb-3">Eureka</v-card-subtitle>

            <v-card-text class="text--primary">
              <div>Studentski časopis Fakulteta prirodoslovno - matematičkih i odgojnih znanosti Sveučilišta u Mostaru</div>
            </v-card-text>
          </v-card>
          <!--Drugi dio prve kolone-->
          <div class="text-center switch-info-icons">
            <v-btn class="mx-2" fab dark color="#1B4188" :href="link_yt" target="_blank">
              <i class="fab fa-youtube"></i>
            </v-btn>

            <v-btn class="mx-2" fab dark color="#1B4188" :href="link_insta" target="_blank">
              <i class="fab fa-instagram"></i>
            </v-btn>

            <v-btn class="mx-2" fab dark color="#1B4188" :href="link_fb" target="_blank">
              <i class="fab fa-facebook"></i>
            </v-btn>
          </div>
        </v-flex>

        <v-flex xs12 md6>
          <div
            class="mx-5 text-justify mb-5"
          >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae velit lectus. Curabitur at leo elit. Nulla lacinia risus non libero sodales, a feugiat urna euismod. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi eu libero vehicula enim dapibus elementum vel vel mauris. Quisque ut hendrerit ligula, venenatis ullamcorper leo. Suspendisse commodo lectus sed nunc laoreet porttitor. Pellentesque imperdiet, lectus sed tincidunt dictum, nisi neque porttitor lectus, ac ultrices turpis libero non odio. In ut nunc vitae lorem bibendum feugiat vitae et dolor. Vivamus scelerisque quam ac eleifend tempor. Maecenas ac euismod sem, at congue quam. Proin feugiat lectus nisi, sit amet blandit ex facilisis vitae.Proin pellentesque, justo lobortis pretium rutrum, orci orci volutpat tortor, vitae congue lectus ligula ut sapien. Donec vehicula et nunc a tristique. Donec maximus tristique enim sed dapibus. Sed et ligula ex. Aliquam erat volutpat. Nulla ornare justo eget ex elementum faucibus. Praesent elementum odio ac imperdiet dictum. Vestibulum in semper enim. Aenean porta dui quis mollis congue. Donec eleifend volutpat massa, quis aliquam ligula accumsan dignissim. Sed id dui nec nunc mollis laoreet id vitae lectus.</div>
          
        </v-flex>
      </v-layout>
    </v-container>
  </div>
</template>

<script>
export default {
  data() {
    return {
      link_yt: "",
      link_fb: "",
      link_insta: "",
      item: {
        color: "red"
      }
    };
  }
};
</script>

<style scoped>
.switch__card {
  background: white;
  box-shadow: 2px 8px 15px 0.2px #888888;
}
.switch-info-icons {
  margin-top: 5em;
}
.card-switch-text {
  color: #1f4386;
  font-size: 1em;
}
.fa-youtube,
.fa-facebook,
.fa-instagram {
  font-size: 2em;
}
.switch-info-icons {
  margin-bottom: 5em;
}
@media only screen and (min-width: 960px) {
  .card-switch-text {
    font-size: 1em;
  }
  .switch__card {
    border-radius: 15px 50px 30px;
    padding: 2em;
  }
}
</style>