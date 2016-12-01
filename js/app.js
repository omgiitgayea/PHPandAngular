/**
 * Created by Godai Yuusaku on 11/7/2016.
 */
(function () {
    var app = angular.module("funwithcountries", []);
    app.controller("CountryController", function () {
        this.countries = [{
            name: "Germany",
            code: "de",
            states: [{name: "Bavaria"}, {name: "Berlin"}]
            },
            {
                name: "United States",
                code: "us",
                states: [{name: "Utah"}, {name: "Mississippi"}]
            },
            {
                name: "Luxembourg",
                code: "lu"
            }]
    });
})();
