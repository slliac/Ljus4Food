<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Architecture and Q&A</title>


    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'>
    <link rel='stylesheet prefetch' href='https://unpkg.com/vuetify/dist/vuetify.min.css'>
    <link rel="stylesheet" href="https://ljus4food.herokuapp.com/css/style.css">


</head>

<body>

<div id="app">
    <v-toolbar  color="amber" >
        <v-toolbar-title >Ljus4Food Q&A</v-toolbar-title>
        <v-spacer></v-spacer>
        <v-toolbar-items>
            <v-btn flat href="https://ljus4food.herokuapp.com" color="back">Home
            </v-btn>
            <v-btn flat  color="black" href='#/technical'>TDDD27 Q&A</v-btn>
            <v-btn flat  color="black" href='#/contact'>Technical Q&A</v-btn>
        </v-toolbar-items>
    </v-toolbar>
    <transition name="fade">
        <router-view></router-view>
    </transition>
</div>
<script src='https://unpkg.com/vue'></script>
<script src='https://unpkg.com/vue-router/dist/vue-router.js'></script>
<script src='https://unpkg.com/vuetify/dist/vuetify.min.js'></script>
<script  src="../../../js/help.js"></script>




</body>

</html>