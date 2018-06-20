/**
 *
 * advSearch.js
 *
 * by Gordon li
 *
 * for Frontend design in advSearch page
 *
 *
 */



/**
 * header of search card
 *
 *
 * show about the detail of search card.
 *
 */

var searchCard = Vue.component('search-card', {
    data: function () {
        return {
            count: 0
        }
    },
    template: '    <section>\n' +
    '            <v-parallax src="https://www.rituals.com/on/demandware.static/-/Library-Sites-RitualsContent/default/dw4256001a/COP-banners/At-home/COP_Livingroom_L.jpg" height="380" >\n' +
    '                <v-layout column align-center justify-center class="white--text">\n' +
    ' <img src ="../../../fig.png" height="100px" width="100px"><br/><br/>  \n'+
    '                    <div class="headline mb-3 text-xs-center h3 txt--black">Ljus4Food& Edamam Cares about Your health</div>\n' +
    '                    <em>Supported with Edamam, you can choose the food health label and calories,be healthy,be joy.</em>\n' +
    '                    <v-btn outline\n color="white"' +
    '                            class="white lighten-2 mt-5"\n' +
    '                            dark\n' +
    '                            large\n' +
    '                            href="https://developer.edamam.com/edamam-docs-recipe-api"\n' +
    '                    >\n' +
    '                        Know more start here\n' +
    '                    </v-btn>\n' +
    '                </v-layout>\n' +
    '            </v-parallax>\n' +
    '        </section>'
})


/**
 *
 * header
 *
 * show about the header card is going on
 */
var header = Vue.component('header-card', {
    data: function () {
        return {
            count: 0
        }
    },props:['title'],
    template: '  <v-card>\n' +
    '                          <v-toolbar dark color="amber">\n' +
    '                            <v-btn color="white" outline href="https://ljus4food.herokuapp.com/index.php/welcome/index/"> < Home</v-btn>\n' +
    '                            <v-toolbar-title>{{title}}</v-toolbar-title>\n' +
    '                            <v-spacer></v-spacer>\n' +
    '                            <v-toolbar-items>\n' +
    '                            </v-toolbar-items>\n' +
    '                          </v-toolbar>\n' +
    '                          </v-card>\n'
})

/**
 * calories
 *
 * calories UI textbox design
 */
var calories = Vue.component('calories-card', {
    data: function () {
        return {
            count: 0
        }
    },
    props: ['title','name','model'],
    template: '<v-text-field v-bind:label="title" v-bind:v-model="model" :rules="nameRules" type="text" v-bind:name="name" :counter="5"  required></v-text-field>'
})

/**
 *
 * selection
 * the basic criteria selection and filtering before user submit their result
 *
 */

var selection  =  new Vue({
    el: '#app',
    data: function data() {
        return {
            valid: true,
            name: '',
            nameRules: [function (v) {
                return !!v || 'ingredient name is required';
            }, function (v)
            {
                return v && v.length <= 10 || 'Enter your ingredient name less than 10';
            }],
            lowerlimit:'',
            llRules: [function (v) {
                return !!v || 'lower limit is required';
            }, function (v)
            {
                return v && v.length <= 4 || 'Enter Lower limit of calories required(0-10000)';
            }],
            upperlimit: '',
            ulRules: [function (v) {
                return !!v || 'Upper limit is required';
            }, function (v)
            {
                return v && v.length <= 4 || 'Enter Upper limit of calories required(0-10000)';
            }]
        };
    },

    methods: {
        submit: function submit() {
            if (this.$refs.form.validate()) {
                // Native form submission is not yet supported
                axios.post('/api/submit', {
                    name: this.name,
                    email: this.email,
                    select: this.select,
                    checkbox: this.checkbox
                });
            }
        },
        clear: function clear() {
            this.$refs.form.reset();
        }
    }
});
