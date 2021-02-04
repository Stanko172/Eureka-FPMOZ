<template>
    <v-container>

        <div>
          <v-row class="mt-10">
            <v-col v-for="(item, index) in cards" :key="index" xs="12" sm="12" md="6">
              <v-hover v-slot:default="{ hover }" open-delay="200">
                <v-card
                style="z-index: 100 !important;"
                  :elevation="hover ? 16 : 2"
                  :class="{ 'on-hover': hover }"
                  class="mx-auto"
                  max-width="400"
                >
                  <v-img
                    class="white--text align-end"
                    height="200px"
                    :src="item.image"
                  >
                  </v-img>

                  <v-card-subtitle class="pb-0">
                    {{ item.name }}
                  </v-card-subtitle>

                  <v-card-text class="text--primary">

                    <div style="text-align: justify;">{{ item.description }}</div>
                  </v-card-text>

                  <v-card-actions class="d-flex justify-end p-3">
                    <v-dialog
                      v-model="item.dialog"
                      persistent
                      max-width="350"
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
                        <v-card-text>{{ item.modal.description }}</v-card-text>
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
              name: '',
              deasciption: '',
              image: '',
              modal: {
                name: '',
                description: ''
              }
            },
            {
              name: '',
              deasciption: '',
              image: '',
              modal: {
                name: '',
                description: ''
              }
            }
          ],
          }
        }
    }
</script>



