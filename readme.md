# Ljus4Food    


##  ScreenCast Video
https://www.youtube.com/watch?v=JsPuXbw-W1Y&t=48s
##  Link for website
https://ljus4food.herokuapp.com/index.php/welcome/index/

##  Accessories:

Access of Zomato API : input the following code in terminal

curl -X GET --header "Accept: application/json" --header "user-key: 6c58207e8e4ab77f635a964acf10d471" https://developers.zomato.com/api/v2.1/search?entity_id=61&entity_type=city&q=cake&count=2

Access of Edamam API : https://api.edamam.com/search?q=apple&app_id=aada3621&app_key=b684c0316c3e44d1ec0c91799b1a2ef3&from=0&to=3&calories=10-1100&health=alcohol-free

Controller(backend)     : application/controllers/
(Welcome.php is the main controller)

View                    : application/view

Vue.js file(Frontend)   : js/

Backend doc location    :  application/controllers/html/index.html

Frontend doc location   : docs/index.html


##  Architecture

<img src="https://holland.pk/qk0uzb4x"/>

## Description 
It 's quiet upset and had been trouble for many of people to figure out the ideas of food/cuisine that going to eat,especially for the traveler/exchange student like me and which restaurant should go for in our daily life.However, integrated with Zomato API ,Google Map API and Edamam API,this project aims for provided the ideas for those persion who didn 't have any idea for their lunch/dinner,in which proivded them 
some suggestions according to the online recipe offered from Edamam API , also suggested some restaurants regards for those dishes by Zomato API and through Google Map API to represents the exact location by latitude offered from Zomato API.

<img src="https://b.zmtcdn.com/images/logo/zomato_logo.svg" width = "50"/> Zomato API <img src="https://pbs.twimg.com/profile_images/930136809178361856/SbxYYyGm_400x400.jpg" width = "50"/> Edamam Recipe API <img src="https://iphone-mania.jp/wp-content/uploads/2015/11/GoogleMaps.png" width="50"/> Google Map API

## flow chart of the functions

<img src="https://holland.pk/7xdvt3s6"/>

## Technological Specification 

### backend development

PHP with CodeIgniter used as its MVC Structure and its convience to corp with API struff with Curl/OAuth 2.0,and easier to managed json afterwards.


### front end development tool 

Vue.js is used for the project 's frontend architecture.As well as its flexbility and also strong resource fulfillment and support,supported together with VuetifyJs Framework,which is a material based design component framework

### Documentation

DOxygen and ESDocs used for documented the code and represents the description about the parameter and function that used in project.

### Testing

In terms of testing,PHPUnit would be used for testing controller 's Request Method and tried to test output whether the same each time

### Version Control

Git would be used and gitlab would be the platform that I did the version control.

### Integration

Jenkin is used for continous integrate and develop for the project,current building status badge offered by jenkin is shown beside the project name

### Resource support

Composer is used for provided the resources support,and NPM is used for support the front end node mmodule development.

### Deployment

Heroku is used for holding the websites and deploy.

## Author
Li Sing Lun,Gordon