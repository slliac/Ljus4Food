<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Ljus 4 food</title>


<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'>
<link rel='stylesheet prefetch' href='https://unpkg.com/vuetify/dist/vuetify.min.css'>
<link rel="stylesheet" href="../../../css/style.css">
</head>
<body>


  <div id="app">
  <v-app id="inspire">
    <v-navigation-drawer
      fixed
      clipped
      class="grey lighten-4"
      app
      v-model="drawer"
    >
      <v-list
        dense
        class="grey lighten-4"
      >
        <template v-for="(item, i) in itemMain.items">
          <v-layout
            row
            v-if="item.heading"
            align-center
            :key="i"
          >
            <v-flex xs6>
              <v-subheader v-if="item.heading">
              {{ item.heading }}
              </v-subheader>
            </v-flex>
            <v-flex xs6 class="text-xs-right">
            </v-flex>
          </v-layout>
          <v-divider
            dark
            v-else-if="item.divider"
            class="my-3"
            :key="i"
          ></v-divider>
          <v-list-tile
            :key="i"
            :href='item.link' 
            v-else
            @click=""
          >
            <v-list-tile-action>
              <v-icon>{{ item.icon }}</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title class="grey--text">
                {{ item.text }}
              </v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
        </template>
      </v-list>
    </v-navigation-drawer>
    <v-toolbar color="amber" app absolute clipped-left>
      <v-toolbar-side-icon @click.native="drawer = !drawer"></v-toolbar-side-icon>
      <span class="title ml-3 mr-5">Ljus 4&nbsp;<span class="text">Food</span></span>
      <!--../index.php/welcome/form in heroku -->
      <form action = "https://ljus4food.herokuapp.com/index.php/welcome/form" method = "get">
      <v-text-field
        solo-inverted
        flat
        label="Search"
        prepend-icon="search"
        type="text"
        name="search"
        ></v-text-field>
      </form>
      <v-spacer></v-spacer>
    </v-toolbar>
    <v-content>
        <section>
            <v-parallax src="https://www.rituals.com/on/demandware.static/-/Library-Sites-RitualsContent/default/dwf51ee817/Collection-pages/Namaste/R1_Namaste_Campaign_L.jpg" height="380" >
                <v-layout column align-center justify-center class="black--text">
                    <img src ="../../../fig.png" height="100px" width="100px">
                    <div class="headline mb-3 text-xs-center h3 txt--black"><br/>Rituals of food finding</div>
                    <em>Searches all food and restaurants through Ljus4Food saround the world</em>
                    <v-btn outline color="black" class="black lighten-2 mt-5" dark large href="https://gitlab.ida.liu.se/sinli053/TDDD27_2018_kick-start-web-project" >
                        Clone it in GitLab
                    </v-btn>
                </v-layout>
            </v-parallax>
        </section>


        <v-jumbotron src="https://files.guidedanmark.org/files/483/164930_Street-Food.jpg"
                             :gradient="gradient"
                             dark
                >
                    <v-container fill-height>
                        <v-layout align-center>
                            <v-flex>
                                <h3 class="display-3" >Why Ljus 4 Food?</h3>  <span class="subheading">Ljus 4 Food is given you the idea of specific foods and provided related restaurent information for the dish.</span>
                                <v-divider class="my-3"></v-divider>
                                <v-btn color="warning" href="https://ljus4food.herokuapp.com/index.php/welcome/advsearch">Search Your food with advanced function(calories)</v-btn>
                               </v-flex>

                             <v-flex xs12 sm6 offset-sm3>
                                <v-card>
                                   <v-card-media src="https://raw.githubusercontent.com/stanleycyang/Newsby/master/docs/imgs/workshop/l6/api.png" height="200px">
                                      </v-card-media>
                                        <v-card-title primary-title>
                                          <div>
                                             <h3 class="headline mb-0">Plenty of API supported</h3>
                                               <div>Application supported with Zomato,Eadmam API,Google Map API</div>
                                               </div>
                                               </v-card-title>
                                               <v-card-actions>
                                               <v-btn flat color="orange" href="https://developers.zomato.com/api?lang=pl">Zomato API link</v-btn>
                                               <v-btn flat color="orange" href="https://www.edamam.com/">Eadmam API link</v-btn>
                                               </v-card-actions>
                                                </v-card>
                             </v-flex>
                        </v-layout>
                    </v-container>
                </v-jumbotron>
            </v-layout>
        </v-container>




        <section>
            <v-container grid-list-xl>
                <v-layout row wrap justify-center class="my-5">
                    <v-flex xs12 sm4>

                        <v-card class="elevation-0 transparent">
                        <v-card-title primary-title class="layout justify-center">
                        <div class="headline">Project info</div>
                        </v-card-title>
                        <v-card-text>
                        Searching the ingredients what you like in the searching bar or advanced searching section.
                        The result shown and supported by Eadmam API .Through the ideas introduced by Eadmam,
                        related restaurant had offered by Zomato API and location shown by Google Map API.
                            <br/><br/>
                          My project is used PHP with Codeigniter framework in the backend
                          supported with Vuetify.js Webpack in the frontend.
                        </v-card-text>
                         </v-card>

                    </v-flex>
                    <v-flex xs12 sm4 offset-sm1>
                        <v-card class="elevation-0 transparent">
                            <v-card-title primary-title class="layout justify-center">
                                <div class="headline">Contact me</div>
                            </v-card-title>
                            Please feel free to contact me if concerned about the project.
                            <contact-card icon="email" contact="sinli053@liu.se"></contact-card>
                            <contact-card icon="place" contact="Sweden/Hong Kong"></contact-card>
                            <contact-card icon="school" contact="LiU(Sweden)/ HKUST(Hong Kong)"></contact-card>
                            </v-list>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </section>



    </v-content>
  </v-app>
</div>




  <script src='../../../js/vue.js'></script>
<script src='../../../js/vuetify.min.js'></script>
  <script  src="../../../js/index.js"></script>
  <script  src="../../../js/home.js"></script>



</body>

</html>



<script>

</script>