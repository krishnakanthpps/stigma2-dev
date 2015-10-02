define(['./module'],
    function(app) {
        'use strict';

        app.controller('ServerHostShowCtrl', [
            '$scope', '$state', 'ServerHostFactory',
            function($scope, $state, ServerHostFactory) {
                $scope.cancel = function() {
                    $state.go('serverHostList');
                };

                ServerHostFactory.show($state.params.name)
                    .then(function(response) {
                        $scope.host = response.data.host;
                    });
            }
        ]);
    }
);