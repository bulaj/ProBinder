(function() {
    var app = angular.module('proBinder', ['ngRoute']);

    app.controller('StoreController', function(){
        this.products = gems;
    });

    var gems = [
        { name: 'Azurite', price: 2.95 },
        { name: 'Bloodstone', price: 5.95 },
        { name: 'Zircon', price: 3.95 },
    ];




    // // create the controller and inject Angular's $scope
    // app.controller('RouteController', function($scope) {
    //     // create a message to display in our view
    //     $scope.message = 'Everyone come and see how good I look!';
    // });

    app.config(function($routeProvider) {
        $routeProvider
            // route for the home page
            .when('/', {
                templateUrl : 'pages/home.html',
                controller  : 'mainController'
            })
            .when('/home', {
                templateUrl : 'pages/home.html',
                controller  : 'mainController'
            })
            // route for the about page
            .when('/collection', {
                templateUrl : 'pages/collection.html',
                controller  : 'aboutController'
            })

            // route for the contact page
            .when('/contact', {
                templateUrl : 'pages/contact.html',
                controller  : 'contactController'
            });

        // use the HTML5 History API
        // $locationProvider.html5Mode(true);
    });

    // create the controller and inject Angular's $scope
    app.controller('mainController', function($scope) {
        // create a message to display in our view
        $scope.message = 'Everyone come and see how good I look!';
    });

    app.controller('aboutController', function($scope) {
        $scope.message = 'Look! I am an about page.';
    });

    app.controller('contactController', function($scope) {
        $scope.message = 'Contact us! JK. This is just a demo.';
    });

    app.controller('cardsController', function($scope, $http) {
        getCards(); // Load all available tasks
        function getCards(){
            $http.get('controllers/getCards.php').success(function(data){
                $scope.cards = data;
            });
        }
        function addQuantity(card) {
            $http.get("controllers/addQuantity.php?card="+card).success(function(data){
                getCards();
                console.log(data);
            });
        }
        $scope.addCard = function addCard(id, card, colors, price) {
            card = $("#cardname").val().replace(/'/g, "\\'");
            colors = parseColors();
            price = ((selectedCard[0].editions[0].price.median / 100) * 3.36).toFixed(2); // decimal points + convert to pln
            if (!($('#collectionTable').text().indexOf($("#cardname").val()) > -1)) {
                if (card !== "") {
                    $http.get("controllers/addCard.php?card="+card+"&colors="+colors+"&price="+price).success(function(data){
                        getCards();
                        console.log(data);
                    });
                }
                else { alert ();}
            }
            else {
                addQuantity(card);
            }
        };

        // $scope.deleteTask = function (task) {
        //     if(confirm("Are you sure to delete this line?")){
        //         $http.get("ajax/deleteTask.php?taskID="+task).success(function(data){
        //             getTask();
        //         });
        //     }
        // };
    });
})();
function parseColors() {
    if (String(selectedCard[0].types) === 'artifact') {
        return "Artifact";
    }
    else if (String(selectedCard[0].types) === 'land') {
        return "Land";
    }
    else if (String(selectedCard[0].subtypes) === 'eldrazi') {
        return "Colorless"; 
    }
    else {
        if (selectedCard[0].colors.length > 1) {
            return 'Multicolored';
        }
        else if (String(selectedCard[0].colors) === 'white') {
            return 'White';
        }
        else if (String(selectedCard[0].colors) === 'blue') {
            return 'Blue';
        }
        else if (String(selectedCard[0].colors) === 'black') {
            return 'Black';
        }
        else if (String(selectedCard[0].colors) === 'red') {
            return 'Red';
        }
        else if (String(selectedCard[0].colors) === 'green') {
            return 'Green';
        }
        else { 
            return "Colorless"; 
        }
    }
}