(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

/**
 * Created by erikmiller on 11/3/16.
 */

var image = '';

$.get({
    url: 'getImage',
    dataType: 'json'
}).done(function (d) {
    console.log(d);
    image = d.image;
    tinymce.init({
        selector: 'textarea',
        plugins: 'image',
        toolbar: 'undo redo | image bold italic underline alignleft aligncenter alignright styleselect bullist numlist outdent indent blockquote removeformat | formatselect fontselect fontsizeselect |',
        relative_urls: false,
        image_list: [{ title: 'kitty', value: image }]
    });
}).fail(function (f) {
    console.log(f.message);
});

},{}]},{},[1]);

//# sourceMappingURL=admin.js.map
