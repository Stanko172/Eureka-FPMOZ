<template>
    <div class="container">
        <v-container>
    	<v-row>
    		<v-col v-for="(item, index) in items" :key="index">
    			<v-card
				    class="mx-auto"
				    max-width="300"
				  >
				    <v-img
				      class="white--text align-end"
				      height="200px"
				      :src="item.url"
				    >
				      
				    </v-img>

				    <v-card-text class="text--primary">
				      <v-card-title>{{ item.name }}</v-card-title>
				    </v-card-text>
				  </v-card>
    		</v-col>
    	</v-row>
    </v-container>
    </div>
</template>

<script>
    export default {
        data(){
        	return {
        		items: [
        			{
        				name: 'FPMOZ',
        				url: 'https://iili.io/fw92et.png'
        			},
        			{
        				name: 'Studentski zbor',
        				url: 'https://iili.io/qvELPt.png'
        			},
        			{
        				name: 'Udruga Switch',
        				url: 'https://iili.io/fNxdZv.jpg'
        			}
        		]
        	}
        }
    }
</script>