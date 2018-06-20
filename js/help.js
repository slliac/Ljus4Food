/**
 *
 * help.js
 *
 * by Li Sing Lun,Gordon
 *
 * Page used Vue router combined with Vuetify.js webpack
 *
 *
 *
 */

Vue.use(Vuetify);
Vue.use(VueRouter);


/**
 *  Home
 *
 *  Component based panel return home message
 *
 */
var Home = {
    template: '<h2>Home</h2>'
}


/**
 * technical
 * technical section and incluced figure and answer panel
 */
var technical = {
    template: '<div id="app">\n' +
    '  <v-app id="inspire">\n'+
    '<Figure-panel header="-Operation Help Q&A-" content="How to use Ljus4Food?" src="https://www.rituals.com/on/demandware.static/-/Library-Sites-RitualsContent/default/dwf71cf292/GWP-banners/2018/Banyu/Banyu_GWP_Slices/Premium_GWP_lifestyle_COP_L.jpg" textcolor="black--text"></Figure-panel>\n'+
    '   <Answer-panel title="How can I searched the food?" content="You acn either enter the ingredient by searching bar in the index page or in the advanced search page if you want your diet be halthier :) "></Answer-panel>  \n'+
    '   <Answer-panel title="Why no Sweden allow for choose?" content="Because Zomato didn t support sweden."></Answer-panel>  \n'+
    '   <Answer-panel title="Why sometimes show no choice for ingredient search?" content="Because Eadmam API only supported 3 times searching for each 10 minutes,if too fast,there would blocked my account and API didn t work anymore."></Answer-panel>  \n'+
    '  </v-app>\n' +
    '</div>'
}

/**
 *
 * Contact
 *
 * contact section and incluced figure and answer panel
 */
var Contact = {
    template: '<div id="app">\n' +
    '  <v-app id="inspire">\n'+
    '  <Figure-panel header="-technical aspect-" content="Technical question on TDDD27" src="https://www.rituals.com/on/demandware.static/-/Library-Sites-RitualsContent/default/dw4c6e3d2c/Collection-pages/Sakura/sakura-banner-L-min.jpg" textcolor="white--text"></Figure-panel>'+
    '   <Answer-panel title="How the operation of Ljus4Food Work?" content="You can search the ingredient you like,Eadmam API would find the right choices according to your requirements,Zomato API would suggested the related restaurant and shown with Google Map API. "></Answer-panel>  \n'+
    '   <Answer-panel title="Is it Restful?" content="Sure,it did curl request with Zomato Server and Eadmam API,using the GET request to retrieved the json from Server. And then draw back to our controller and doing json decoding and analysis. Finally draw back the data by array from controller to View"></Answer-panel>  \n'+
    '   <Answer-panel title="How do you do Frontend?" content="I focus working on reusable components ,data binding listing and routing,supported with Vuetify.js, the work become trival,and i tried to make reusable component through these in built component and make other one. Vuetify.js is useful for making th task,for example,Vue router is required another library,but with Vuetify it doesn need any more."></Answer-panel>  \n'+
    '   <Answer-panel title="How do you do Backend?" content="I focus on MVC / curl and RESTful analysis , all are supported by PHP and CodeIgniter.It s complicated for each json and need many of time for cracking it off. "></Answer-panel>  \n'+
    '   <Answer-panel title="What is the limitation?" content="1. Eadmam only supported with 3-5 requests per minutes,more than these would crashed. \n 2. Browser work best in form of Firefox. (otherwise delay is quite often in Chrome,because it need turn from Vue to Vuetify to Vue back, it may form delay easily)\n 3. No Database "></Answer-panel>  \n'+
    '   <Answer-panel title="What would you do if there have more than 1 group mate in group?" content="Implement database"></Answer-panel>  \n'
    +'  </v-app>\n' +
    '</div>'
}

/**
 * figure panel is useful for making the first header
 *
 */
Vue.component('Figure-panel', {
    data: function () {
        return {
            count: 0
        }
    },props:['src','textcolor','content','header'],
    template: '  <v-card>\n' +
    '          <v-card-media\n' +
    '            class="white--text"\n' +
    '            height="350px"\n ' +
    '            v-bind:src="src"\n' +
    '          >\n' +
    '            <v-container fill-height fluid>\n' +
    '              <v-layout fill-height>\n' +
    '                <v-flex xs12 align-end flexbox flat v-bind:class="textcolor">\n' +
    '                   <div flat class="headline" ><br/><br/><br/><br/>{{header}}</div>\n' +
    '                  <div>{{content}}</div>' +
    '                </v-flex>\n' +
    '              </v-layout>\n' +
    '            </v-container>\n' +
    '          </v-card-media>\n' +
    '        </v-card>'

})

/**
 *
 * answer panel is useful for making the Q&A expanding list
 *
 */
Vue.component('Answer-panel', {
    data: function () {
        return {
            count: 0
        }
    },props:['title','content'],
    template:
    '    <v-expansion-panel>\n' +
    '      <v-expansion-panel-content>' +
    '        <div slot="header">{{title}}</div>\n' +
    '        <v-card>\n' +
    '          <v-card-text>{{content}}</v-card-text>\n' +
    '        </v-card>\n' +
    '      </v-expansion-panel-content>\n' +
    '    </v-expansion-panel>\n'
})


/**
 * NorFound
 * @type {{template: string}}
 */
var NotFound = {
    template: '<h2>Not Found</h2>'
}

/**
 *
 * router function
 *
 *
 * Vue.js 's router effect supported with Vuetify.js
 */
var router = new VueRouter({
    history: false,
    routes: [
        { path: '/technical', name: 'technical', component:technical },
        { path: '/contact', name: 'contact', component: Contact },
        { path: '*', name: 'not-found', component: NotFound },
        { path: '/', name: 'home', component: technical }
    ],
});
/**
 *
 *
 * object avaliable for attached.
 */
 new Vue({
    el: '#app',
    router: router
});