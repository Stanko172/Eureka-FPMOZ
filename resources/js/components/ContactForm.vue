<template>
    <v-container class="contact-form">
        <v-row>
            <v-col sm="12" md="12" lg="6">
                <div  class="d-flex justify-center align-center" style="height: 12em;"> <h1 style="color: #1B4188;">Pisanje članaka</h1> </div>

                <p style="text-align: justify;">Studenti sa cijelog FPMOZ-a sudjeluju u pisanju članaka i razvoju projekta Eureka. Također, svi studenti se mogu uključiti u projekt tijekom cijele akademske godine. Teme članaka su raznolike i kreću se od stručnih tema, pa do različitih priča i aktivnosti sa studija, te studentskih projekata. Ukoliko su studenti zainteresirani za sudjelovanje mogu su javiti na e-mail uredništva: eureka@fpmoz.sum.ba</p>


                <div  class="d-flex justify-center align-center" style="height: 12em;"> <h1 style="color: #1B4188;">Razvoj web stranice</h1> </div>

                <p style="text-align: justify;">Od akademske godine 2020/2021 Eureka je dobila i svoju online verziju. Pored PDF verzija svih brojeva časopisa, studentima su članci dostupni i putem web stranice. Članci se na web stranicu postavljaju kontinuirano kroz cijelu akademsku godinu. Web stranicu za Eureku su izradili i održavaju članovi informatičko-tehničke udruge Switch sa FPMOZ-a.</p>

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
