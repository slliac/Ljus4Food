/**
 *
 * navigation panel component
 *
 * by Gordon Li
 *
 * for the frontend design in the navigation panel
 *
 *
 */

/**
 *
 * Navigation bar
 *
 */

var navigation = new Vue({
  el: '#app',
  data: () => (
    
    
    {
    card_text: '',
      drawer: null,
      dialog: false,
      notifications: false,
      sound: true,
      widgets: false,
      gradient: 'to top right, rgba(63,81,181, .7), rgba(25,32,72, .7)',
      itemMain:{
     // select: { state: 'Florida'},
      items: 
      [
        { heading: 'Navigation' },
        { icon: 'home', text: 'Home page' , link:'https://ljus4food.herokuapp.com/index.php/welcome/index/'},//index.php/welcome/index
        { icon: 'location_searching', text: 'Advanced Search' , link:'https://ljus4food.herokuapp.com/index.php/welcome/advSearch'},//index.php/welcome/advsearch
        { icon: 'help', text: 'Help', link:'https://ljus4food.herokuapp.com/index.php/welcome/help' }
      ]
    //,
     // countrychoice:
     // [
     //   {state : 'London'},
     //   {state : 'Sydney'}
     // ]
    }
    
    
    }),
    props: {
      source: String
    }
   

}




)
/**
 *
 * app2 compoent
 *
 */
var object  = new Vue({
  el: '#app2',
  data () {
    return {
      
    }
  }
})

