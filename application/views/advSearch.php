<!DOCTYPE html>
<html lang="en" >

<head>
<meta charset="UTF-8">
<title>Advance Search</title>
  
  
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons'>
<link rel='stylesheet prefetch' href='https://unpkg.com/vuetify@1.0.16/dist/vuetify.min.css'>

</head>

<body>

  <div id="app">
  <v-app id="inspire">

      <header-card title="Advanced Searching Function"></header-card>
      <search-card></search-card>
    <form v-model="valid" ref="form" action="../welcome/form" method="get" id="actionsheet" lazy-validation>
       <br/>
        <v-alert :value="true" outline type="info">
            Ljus4Food & Edamam cares about your health, fill in the following form
        </v-alert>
        <br/>
        <h5>Ingredient name</h5>
      <v-text-field
        label="Input the ingredient Name"
        v-model="name"
        :rules="nameRules"
        type="text"
        name="search"
        :counter="10"
        required
      ></v-text-field>
<!--Demostration of Reusable Component-->
        <div id="components-demo">
            <h5>Upper limit of calories</h5>
            <calories-card title="Input a upper limit of calories" name="ul" model="upperlimit"></calories-card>
            <h5>Lower limit of calories</h5>
            <calories-card title="Input a lower limit of calories" name="ll" model="lowerlimit"></calories-card>
        </div>
        <v-radio-group v-model="column" type="text" name="health" column required>
            <h5>Health label specification</h5>
            <v-alert :value="true" type="warning" outline width="500px">
                Remark : Often no result shown because Eadmam wouldn t find any of them easily after apply filter
            </v-alert>
            <v-radio label="No need extra requirement, thanks" value="alcohol-free"></v-radio>
            <v-radio label="Peanut free" value="peanut-free" ></v-radio>
            <v-radio label="Soy Free" value="soy-free"></v-radio>
            <v-radio label="Fish Free" value="fish-free"></v-radio>
            <v-radio label="ShellFish Free" value="shellfish-free"></v-radio>
            <v-radio label="Tree Nut Free" value="tree-nut-free"></v-radio>

        </v-radio-group>

      <v-btn
      type="submit" value="Submit"
        @click="submit"
        :disabled="!valid"
      >
        submit
      </v-btn>
    </form>
  </v-app>
</div>
  <script src='https://unpkg.com/babel-polyfill/dist/polyfill.min.js'></script>
<script src='https://unpkg.com/vue/dist/vue.js'></script>
<script src='https://unpkg.com/vuetify@1.0.16/dist/vuetify.min.js'></script>
  <script src="../../../js/advSearch.js"></script>

<script>

</script>

