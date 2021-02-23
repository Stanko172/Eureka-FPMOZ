<template>
  <div class="switch__card">
    <v-container class="my-5 test">
      <v-layout row wrap>
        <v-flex xs12 md6 class="test">
          <v-card class="mx-auto" max-width="430px">
            <v-img class="white--text align-end" height="300px" src="https://iili.io/fNCyKP.png"></v-img>

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
            class="mx-5 text-justify mb-5">
          Eureka je studentski časopis Fakulteta prirodoslovno-matematičkih i odgojnih znanosti. Prvi broj izlazi 2009 godine, a nakon toga još tri broja: 2015, 2016 i 2017 godine. Eureka donosi različite priče, aktivnosti i projekte sa svih studija FPMOZ-a, ali i razgovore sa predstavnicima Fakulteta i studentima, te stručne teme.<br /><br />

          Sva izdanja Eureke dostupna su i u PDF formatu, a mogu se pronaći na stranicama FPMOZ-a i web stranici Eureke. Od akademske 2020/2021 godine članci časopisa su dostupni i putem web stranice koju su izradili i održavaju studenti studija informatike. Studenti postavljaju članke kontinuirano kroz akademsku godinu, a sve aktivnosti vezane za Eureku mogu se pratiti i na društvenim mrežama koje također vode studenti.<br /><br />

          Svi studenti koji su zainteresirani za razvoj projekta, te žele pridodati svoje ideje i prijedloge, mogu se javiti uredništvu tokom cijele akademske godine na e-mail: eureka@fpmoz.sum.ba
          Studenti mogu pisati članke različitih tema, ali i sudjelovati u razvoju i održavanju web stranice, te društvenih mreža. Svaka nova ideja za razvoj projekta je dobrodošla, te sa svakim novim članom tim postaje sve bolji i jači.
        </div>
        </v-flex>
      </v-layout>
    </v-container>
  </div>
</template>

<script>
export default {
  data() {
    return {
      link_yt: "https://www.youtube.com/channel/UCUAX6vt6JLFuf_9jM_pHMLw",
      link_fb: "https://www.facebook.com/eurekafpmoz",
      link_insta: "https://www.instagram.com/eureka_fpmoz/",
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