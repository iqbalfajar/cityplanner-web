angular.module('app.routes', [])

.config(function($stateProvider, $urlRouterProvider) {

  // Ionic uses AngularUI Router which uses the concept of states
  // Learn more here: https://github.com/angular-ui/ui-router
  // Set up the various states which the app can be in.
  // Each state's controller can be found in controllers.js
  $stateProvider
    
  

      .state('home', {
    url: '/home',
    templateUrl: 'templates/home.html',
    controller: 'homeCtrl'
  })

  .state('menu.cityBuilder', {
    url: '/citybuilder',
    views: {
      'side-menu21': {
        templateUrl: 'templates/cityBuilder.html',
        controller: 'cityBuilderCtrl'
      }
    }
  })

  .state('menu.cityWatch', {
    url: '/citywatch',
    views: {
      'side-menu21': {
        templateUrl: 'templates/cityWatch.html',
        controller: 'cityWatchCtrl'
      }
    }
  })

  .state('menu', {
    url: '/menu',
    templateUrl: 'templates/menu.html',
    abstract:true
  })

  .state('menu.login', {
    url: '/login',
    views: {
      'side-menu21': {
        templateUrl: 'templates/login.html',
        controller: 'loginCtrl'
      }
    }
  })

  .state('menu.signup', {
    url: '/signup',
    views: {
      'side-menu21': {
        templateUrl: 'templates/signup.html',
        controller: 'signupCtrl'
      }
    }
  })

  .state('detailZona', {
    url: '/zone-detail',
    templateUrl: 'templates/detailZona.html',
    controller: 'detailZonaCtrl'
  })

  .state('formLaporanPelanggaran', {
    url: '/report-form',
    templateUrl: 'templates/formLaporanPelanggaran.html',
    controller: 'formLaporanPelanggaranCtrl'
  })

$urlRouterProvider.otherwise('/home')

  

});