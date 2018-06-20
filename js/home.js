/**
 *
 * home.js
 *
 * by Gordon Li
 *
 * for the frontend design in Welcome=message.php
 *
 *
 *
 *
 */


/**
 * contact
 *
 * contact - card, form each column of contact message
 *
 */
var contact  = Vue.component('contact-card', {
    data: function () {
        return {
            count: 0
        }
    },
    props:['icon','contact'],
    template: '                          <v-list-tile>\n' +
    '                                    <v-list-tile-action>\n' +
    '                                        <v-icon class="blue--text text--lighten-2">{{icon}}</v-icon>\n' +
    '                                    </v-list-tile-action>\n' +
    '                                    <v-list-tile-content>\n' +
    '                                        <v-list-tile-title>{{contact}}</v-list-tile-title>\n' +
    '                                    </v-list-tile-content>\n' +
    '                                </v-list-tile>'
})


/**
 *
 * object
 *
 * object for making the component
 *
 */
var object = new Vue({ el: '#components-demo' })
