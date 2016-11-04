/**
 * Created by erikmiller on 11/3/16.
 */

window.admin = window.admin || {};

(function(ns){

    ns.initEditor = function(){
        ns.requestImages();
    };

    ns.prepTinyMce = function(images){
        tinymce.init({
            selector:'textarea',
            plugins: 'image',
            toolbar: 'undo redo | image bold italic underline alignleft aligncenter alignright styleselect bullist numlist outdent indent blockquote removeformat | formatselect fontselect fontsizeselect |',
            relative_urls: false,
            image_list: images
        });
    };


    ns.requestImages = function(){
        $.get({
            url: 'getImage',
            dataType: 'json'
        }).done(function(d){
            ns.prepTinyMce(d.images);
        }).fail(function(f){
            console.log(f.message);
        });
    };


})(window.admin);


