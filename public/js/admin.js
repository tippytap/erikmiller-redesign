(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

/**
 * Created by erikmiller on 11/3/16.
 */

window.admin = window.admin || {};

(function (ns) {

    ns.initEditor = function () {
        ns.requestImages();
    };

    ns.prepTinyMce = function (images) {
        tinymce.init({
            selector: 'textarea',
            plugins: 'image',
            toolbar: 'undo redo | image bold italic underline bullist numlist blockquote removeformat | alignleft aligncenter alignright outdent indent | styleselect fontselect fontsizeselect |',
            relative_urls: false,
            menu: {},
            image_list: images
        });
    };

    ns.requestImages = function () {
        $.get({
            url: 'getImage',
            dataType: 'json'
        }).done(function (d) {
            ns.prepTinyMce(d.images);
        }).fail(function (f) {
            console.log(f.message);
        });
    };
})(window.admin);

},{}]},{},[1]);

//# sourceMappingURL=admin.js.map
