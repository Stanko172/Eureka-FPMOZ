<template>
    <v-container class="contact-form">
        <v-row>
            <v-col sm="12" md="12" lg="6">
                <div  class="d-flex justify-center align-center" style="height: 12em;"> <h1 style="color: #1B4188;">Pisanje članaka</h1> </div>

                <p style="text-align: justify;">Proin pellentesque, justo lobortis pretium rutrum, orci orci volutpat tortor, vitae congue lectus ligula ut sapien. Donec vehicula et nunc a tristique. Donec maximus tristique enim sed dapibus. Sed et ligula ex. Aliquam erat volutpat. Nulla ornare justo eget ex elementum faucibus. Praesent elementum odio ac imperdiet dictum. Vestibulum in semper enim. Aenean porta dui quis mollis congue. </p>


                <div  class="d-flex justify-center align-center" style="height: 12em;"> <h1 style="color: #1B4188;">Razvoj web stranice</h1> </div>

                <p style="text-align: justify;">Proin pellentesque, justo lobortis pretium rutrum, orci orci volutpat tortor, vitae congue lectus ligula ut sapien. Donec vehicula et nunc a tristique. Donec maximus tristique enim sed dapibus. Sed et ligula ex. Aliquam erat volutpat. Nulla ornare justo eget ex elementum faucibus. Praesent elementum odio ac imperdiet dictum. Vestibulum in semper enim. Aenean porta dui quis mollis congue. </p>

            </v-col>
            <v-col sm="12" md="12" lg="6">
                <v-container>
                    <div class="d-flex justify-center align-center"> <h1 style="color: #1B4188;">Kontaktiraj nas</h1></div>
                    <v-form>

                        <v-text-field
                          label="E-mail"
                        ></v-text-field>

                        <v-textarea
                          solo
                          height="400px"
                          name="input-7-4"
                          label="Poruka"
                        ></v-textarea>

                  </v-form>
                  <v-btn color="#1B4188" block>Pošalji</v-btn>
                </v-container>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
    export default {
        data(){
            return{

            }
        }
    }
</script>

<style>

.contact-form {
  border: 3px;
  background: white;
  box-shadow: 2px 8px 15px 0.2px #888888;
  border-radius: 15px 50px 30px;
  padding: 2em;
}

</style>
