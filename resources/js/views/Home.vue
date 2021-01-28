<template>
  <div>

  	<Navbar />

   
   <div style="height: 85vh;" class="d-flex justify-center align-center">

	     <div class="d-flex justify-content-around align-center">

	        <div style="z-index: 10 !important;">

			    <v-container fluid>
			    	    
			        <div class="d-flex flex-column justify-center align-center">
			     		<div class="home-heading">Eureka</div>

			     		<div class="text-animation-container">
					  		<p class="home-text" data-text="Studentski časopis sa FPMOZ-a">Studentski časopis sa FPMOZ-a</p>
					  	</div>

			     		<v-btn color="#1B4188">Popis članaka</v-btn>
			     	</div>

			    </v-container>

		    </div>

		    <div class="eureka-image" style="width: 200px;"></div>

		    <div class="eureka-image" style="z-index: 10 !important;">
	     		<img src="https://iili.io/fCav5l.png" />
	     	</div>

	     </div>
      

     </div>

     <div  class="d-flex justify-center align-center" style="height: 12em;"> <h1 style="color: #1B4188;">Što je Eureka?</h1> </div>

     <v-container>
    	<Info /> 
    </v-container>

    <div  class="d-flex justify-center align-center" style="height: 12em;"> <h1 style="color: #1B4188;">Tko sudjeluje u razvoju projekta?</h1> </div>

    <v-container>
    	<v-row>
    		<v-col v-for="i in 3" :key="i">
    			<v-card
				    class="mx-auto"
				    max-width="300"
				  >
				    <v-img
				      class="white--text align-end"
				      height="200px"
				      src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
				    >
				      <v-card-title>Top 10 Australian beaches</v-card-title>
				    </v-img>

				    <v-card-subtitle class="pb-0">
				      Number 10
				    </v-card-subtitle>

				    <v-card-text class="text--primary">
				      <div>Whitehaven Beach</div>

				      <div>Whitsunday Island, Whitsunday Islands</div>
				    </v-card-text>

				    <v-card-actions>
				      <v-btn
				        color="orange"
				        text
				      >
				        Share
				      </v-btn>

				      <v-btn
				        color="orange"
				        text
				      >
				        Explore
				      </v-btn>
				    </v-card-actions>
				  </v-card>
    		</v-col>
    	</v-row>
    </v-container>

    <div  class="d-flex justify-center align-center" style="height: 12em;"> <h1 style="color: #1B4188;">Želiš sudjelovati u razvoju projekta? Kontaktiraj nas.</h1> </div>

        <v-container>
        	<v-row>
        		<v-col sm="12" md="12" lg="6">
        			<div  class="d-flex justify-center align-center" style="height: 12em;"> <h1 style="color: #1B4188;">Pisanje članaka</h1> </div>

        			<p style="text-align: justify;">Proin pellentesque, justo lobortis pretium rutrum, orci orci volutpat tortor, vitae congue lectus ligula ut sapien. Donec vehicula et nunc a tristique. Donec maximus tristique enim sed dapibus. Sed et ligula ex. Aliquam erat volutpat. Nulla ornare justo eget ex elementum faucibus. Praesent elementum odio ac imperdiet dictum. Vestibulum in semper enim. Aenean porta dui quis mollis congue. </p>


        			<div  class="d-flex justify-center align-center" style="height: 12em;"> <h1 style="color: #1B4188;">Razvoj web stranice</h1> </div>

        			<p style="text-align: justify;">Proin pellentesque, justo lobortis pretium rutrum, orci orci volutpat tortor, vitae congue lectus ligula ut sapien. Donec vehicula et nunc a tristique. Donec maximus tristique enim sed dapibus. Sed et ligula ex. Aliquam erat volutpat. Nulla ornare justo eget ex elementum faucibus. Praesent elementum odio ac imperdiet dictum. Vestibulum in semper enim. Aenean porta dui quis mollis congue. </p>

        		</v-col>
        		<v-col sm="12" md="12" lg="6">
        			<v-container>
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

    <div  class="d-flex justify-center align-center" style="height: 12em;"> <h1 style="color: #1B4188;">Urednici časopisa za 2020/21 ak. godinu</h1> </div>

      </v-container class="area">

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
        </v-container>

        <div  class="d-flex justify-center align-center" style="height: 15em;"> <h1 style="color: #1B4188;"></h1> </div>

        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>

        <!--Footer-->

    <v-footer
    style="z-index: 1000;"
      class="mt-15"
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
        >
          {{ link }}
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

        

</div>

</template>

<script>
import Navbar from '../components/Navbar.vue';
import Info from '../components/Info.vue';
export default {
    components: {
    	Navbar,
    	Info
    },
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
    		links: [
		        'Naslovnica',
		        'Članci',
		        'Izdanja',
		        'Studiji'
		      ],
    	}
    }
}
</script>

<style>

@media only screen and (max-width: 960px) {

	.eureka-image{
		display: none;
	}

}

@media only screen and (max-width: 400px) {

	.eureka-image{
		display: none;
	}

	.home-heading{
		font-size: 86px !important;
	}

	.home-text {
		height: 1.8rem;
		letter-spacing: 0.0rem !important;
	}

}

.home-heading{
	font-size: 112px;
	color: #1B4188;
}

.home-text {
	height: 1.8rem;
	position: absolute;
	text-transform: uppercase;
	font-size: 1rem;
	margin: 0;
	padding: 0;
	align-self: center;
	letter-spacing: 0.3rem;
	font-family: monospace;
	color: transparent;
}
.home-text:before {
	content: attr(data-text);
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	color: #000;
	overflow: hidden;
	border-right: 1px solid #000;
	animation: type 10s steps(30) infinite;
	white-space: nowrap;
}
.text-animation-container{
	padding: 0;
	margin: 0;
	display: flex;
	justify-content: center;
	align-content: center;
	height: 100px;
	
}
@keyframes type {
	0% {
		width: 0;
	}
	
	50% {
		width: 100%;
	}
	100% {
		width: 0;
	}
}








.area{ 
    width: 100%;
    height:100vh;
    
   
}

.circles{
	z-index: 1;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.circles li{
	z-index: 1;
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: lightgrey;
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}

.circles li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles li:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles li:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9){
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}



@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }

}


</style>