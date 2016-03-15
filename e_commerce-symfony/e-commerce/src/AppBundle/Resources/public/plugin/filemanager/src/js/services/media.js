(function(window, angular) {
    'use strict';
    angular.module('FileManagerApp').service('mediaArticle', ['$http', '$q', 'fileManagerConfig', function ($http, $q, fileManagerConfig) {

        this.addMediaArticle = function(e)
        {
            var url = "";
            return $http.get(url);
        };

    }]);
})(window, angular);