<head>
  <meta charset="UTF-8">
  <title>Example searched from Eadamam API </title>


  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'>
<link rel='stylesheet prefetch' href='https://unpkg.com/vuetify/dist/vuetify.min.css'>
<link rel="stylesheet" href="../../css/style.css">


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
              <v-btn small flat>edit</v-btn>
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
            v-else
            @click=""
            :href='item.link' 
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
      <form action = "form" method = "get">
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
<v-container fluid fill-height class="grey lighten-4">


<!--
  <form action="../success" id="carform">
<v-btn flat type = "submit" color = "info">Submit</v-btn>
  </form>
-->
      <v-layout justify-center align-center>

<?php
//include "specloc.php";
$image_array = array();
$label_array = array();
$recipe_array = array();
//$placeC = array();

foreach ($image as $img):
    array_push($image_array, (string) $img);
endforeach;

foreach ($arr as $array):
    array_push($recipe_array, (string) $array);
endforeach;

foreach ($label as $lbl):
    array_push($label_array, (string) $lbl);
endforeach;

//foreach ($placeC as $lbl):
  //array_push($placeC, (string) $lbl);
//endforeach;
//$location = $_SESSION['var'];
for ($i = 0; $i < count($_SESSION["image"]); $i++) {
    echo '<v-card>';
    echo '<v-card-media src = "' . $image_array[$i] . '"';
    echo 'height="300px">';
    echo '</v-card-media>';
    echo '<v-card-title primary-title>';
    echo '<div>';
   // echo '<div class="headline">' .$placeC[0] . '</div>';
    echo '<div class="headline">' .$label_array[$i] . '</div>';
    echo '<span class="grey--text">Ingredient :<br/> ' . $recipe_array[$i] . '<br/>';
    echo '</div>';
    echo '</v-card-title>';
    echo '<v-card-actions>';
    echo '<i class="material-icons">place</i>';
    echo'<select name= "taskOption" form="carform'.$i.'" >
    <option value="Toronto">Toronto</option>
    <option value="London">London</option>
    <option value="Ottawa">Ottawa</option>
    <option value="Singarope">Singarope</option>
    <option value="Sydney" selected>Sydney</option>
    </select>';
    echo '<form action = "location" method = "get" id="carform'.$i.'">';
    echo '<v-btn flat color="purple" name = "cuisine" type = "submit" value= "' . $label_array[$i] . '">Find restaurant</v-btn>';
    echo '</form>';
    echo '<v-spacer></v-spacer>';
    echo '<v-btn icon @click.native="show = !show">';
    echo '</v-btn>';
    echo '</v-card-actions>';
    echo '</v-card>';
    echo '<br/>';
    echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp';
}
?>





        </v-layout>
      </v-container>
    </v-content>
  </v-app>
</div>
  <script src='../../js/vue.js'></script>
<script src='../../js/vuetify.min.js'></script>



    <script  src="../../js/index.js"></script>




</body>

