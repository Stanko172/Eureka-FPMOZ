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
                    <div class="d-flex justify-center align-center mt-12"> <h1 style="color: #1B4188;">Kontaktiraj nas</h1></div>
                   
                   <v-container class="d-flex flex-column justify-center align-center">
                     <div class="mt-15 d-flex align-center contact">
                       <i class="far fa-envelope"></i>
                       <span class="contact-text">eureka@fpmoz.sum.ba</span>
                     </div>

                     <div class="mt-15 d-flex align-center contact">
                       <i class="fab fa-youtube"></i>
                       <span class="contact-text">Časopis Eureka</span>
                     </div>

                     <div class="mt-10 d-flex align-center contact">
                       <i class="fab fa-instagram"></i>
                       <span class="contact-text">  @eureka_fpmoz</span>
                     </div>

                     <div class="mt-10 d-flex align-center contact">
                       <i class="fab fa-facebook"></i>
                       <span class="contact-text"> @eurekafpmoz</span>
                     </div>
                   </v-container>
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

.contact .fab, .far{
  font-size: 38px;
  margin-right: 10px;
}

.contact-text{
  font-size: 18px;
}

.contact .fa-youtube{
  color: rgb(255, 0, 0);
}

.contact .fa-facebook{
  color: rgb(59, 89, 152);
}

.contact .fa-instagram{
  color: rgb(251, 173, 80);
}

.contact .fa-envelope{
  color: #1B4188;
}

</style>
