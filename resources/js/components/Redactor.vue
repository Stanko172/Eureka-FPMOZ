<template>
    <v-container class="mb-10">

        <div>
          <v-row class="mt-10">
            <v-col v-for="(item, index) in cards" :key="index" cols="12" md="6">
              <v-hover v-slot:default="{ hover }" open-delay="200">
                <v-card
                  :elevation="hover ? 16 : 2"
                  :class="{ 'on-hover': hover }"
                  class="mx-auto"
                  max-width="350"
                >
                  <v-img
                    class="white--text align-end"
                    height="400px"
                    :src="item.image"
                  >
                  </v-img>

                  <v-card-subtitle class="pb-0 text-h6">
                    {{ item.name }}
                  </v-card-subtitle>

                  <v-card-text class="text--primary">

                    <div style="text-align: justify;">{{ item.description }}</div>
                  </v-card-text>

                  <v-card-actions class="d-flex justify-end p-3">
                    <v-dialog
                      style="z-index: 10000;"
                      v-model="item.dialog"
                      persistent
                      :max-width="item.modal_width"
                    >
                      <template v-slot:activator="{ on, attrs }">
                    <v-btn
                      color="#1B4188"
                      v-bind="attrs"
                      v-on="on"
                    >
                      Više
                    </v-btn>
                    </template>
                      <v-card>
                        <v-card-title class="headline">
                          {{ item.modal.name }}
                        </v-card-title>
                        <v-card-text class="text-justify">{{ item.modal.description }}</v-card-text>
                        <v-card-actions>
                          <v-spacer></v-spacer>
                          <v-btn
                            color="#1B4188"
                            @click="item.dialog = false"
                          >
                            Zatvori
                          </v-btn>
                        </v-card-actions>
                      </v-card>
                    </v-dialog>
                  </v-card-actions>
                </v-card>
              </v-hover>
            </v-col>
          </v-row>
        </div>
  </v-container>
</template>

<script>
    export default {
        data(){
          return{
            cards: [
            {
              name: 'Marija Sušac',
              deasciption: '',
              image: 'https://iili.io/fNq85G.jpg',
              modal: {
                name: 'Marija Sušac',
                description: 'Lijep pozdrav svim čitateljima ovogodišnjeg izdanja časopisa Eureka.Moje ime je Marija Sušac, studentica sam 3. godine preddiplomskog studija biologije te jedna od glavnih urednika Eureke. Budući da težim k tome da uvijek probam nešto novo u životu i da steknem iskustva u raznim područjima, uredništvo časopisa se pokazalo kao iznimno dobra ideja. Časopis Eureka ima dosta potencijala da nastavi djelovati u online obliku budući da iza sebe ima izvrsan tim studenata, a sve dok postoje studenti koji su voljni pisati o temam koje osobno vole i koje ih zanimaju, smatram da je časopis na odličnom putu. '
              },
              modal_width: 400
            },
            {
              name: 'Renato Vidić',
              deasciption: '',
              image: 'https://iili.io/fNqSef.jpg',
              modal: {
                name: 'Renato Vidić',
                description: 'Dragi čitatelji, moje ime je Renato Vidić i student sam druge godine diplomskog studija Biologije smjer Ekologija i zaštita prirode. Pokretač sam i urednik časopisa "Eureka" koji je od ove godine na online platformi i ujedno dostupan svima. Želim istaknuti važnost vannastavnih aktivnosti i ovim projektom potaknuti studente na pisanje i istraživanje o temama koje su njhov predmet zanimanja. Također želim istaknuti smisao ovog časopisa, a to je pokazati i sebi i drugima kako postoje potencijali u našim mladim generacijama i kako s pozitivnim stavovima možemo svijet učiniti ljepšim. Po prvi puta se susrećem s ovim zadatkom i izuzetna mi je čast biti dio ove zanimljive priče. Vjerujem da ćete u trenutnom ozračju na ovaj način biti informirani o aktualnim vijestima vezanim za događanja našeg FPMOZ-a te raznim znanstvenim temama i  istraživanjima.Želim Vam ugodno čitanje, a svim sadašnjim i budućim autorima zahvaljujem na suradnji.'
              },
              modal_width: 600
            }
          ],
          }
        }
    }
</script>



