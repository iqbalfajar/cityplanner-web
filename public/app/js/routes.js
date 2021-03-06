angular.module('app.routes', [])

.config(function($stateProvider, $urlRouterProvider) {

  // Ionic uses AngularUI Router which uses the concept of states
  // Learn more here: https://github.com/angular-ui/ui-router
  // Set up the various states which the app can be in.
  // Each state's controller can be found in controllers.js
  $stateProvider

    .state('splash', {
      url: '/splash',
      templateUrl: 'templates/splash.html',
      controller: 'splashCtrl'
    })

    .state('home', {
    url: '/home',
    templateUrl: 'templates/home.html',
    controller: 'homeCtrl'
  })

  .state('menu.cityBuilderPre', {
    url: '/citybuilder-pre',
    views: {
      'side-menu21': {
        templateUrl: 'templates/cityBuilder-pre.html',
        controller: 'cityBuilderPreCtrl'
      }
    }
  })

  .state('menu.cityBuilder', {
    url: '/citybuilder/:tabIndex',
    views: {
      'side-menu21': {
        templateUrl: 'templates/cityBuilder.html',
        controller: 'cityBuilderCtrl'
      }
    }
  })

  .state('menu.cityBuildRumah', {
    url: '/citybuild/rumah',
    views: {
      'side-menu21': {
        templateUrl: 'templates/cityBuildRumah.html',
        controller: 'cityBuildRumahCtrl'
      }
    }
  })

  .state('menu.cityBuildHotel', {
    url: '/citybuild/hotel',
    views: {
      'side-menu21': {
        templateUrl: 'templates/cityBuildHotel.html',
        controller: 'cityBuildHotelCtrl'
      }
    }
  })

  .state('menu.cityBuildMinimarket', {
    url: '/citybuild/minimarket',
    views: {
      'side-menu21': {
        templateUrl: 'templates/cityBuildMinimarket.html',
        controller: 'cityBuildMinimarketCtrl'
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

  .state('menu.detailZona', {
    url: '/zone-detail/:kegiatan/:kode',
    views: {
      'side-menu21': {
        templateUrl: 'templates/detailZona.html',
        controller: 'detailZonaCtrl'
      }
    }
  })

  .state('menu.detailZona2', {
    url: '/zone-detail2/:kode',
    views: {
      'side-menu21': {
        templateUrl: 'templates/detailZona2.html',
        controller: 'detailZona2Ctrl'
      }
    }
  })

  .state('menu.formLaporanPelanggaran', {
    url: '/report-form',
    views: {
      'side-menu21': {
        templateUrl: 'templates/formLaporanPelanggaran.html',
        controller: 'formLaporanPelanggaranCtrl'
      }
    }
  })

  .state('menu.profile', {
    url: '/profile',
    views: {
      'side-menu21': {
        templateUrl: 'templates/profile.html',
        controller: 'profileCtrl'
      }
    }
  })

$urlRouterProvider.otherwise('/splash')



});
