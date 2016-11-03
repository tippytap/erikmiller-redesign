/**
 * Created by erikmiller on 11/3/16.
 */

var image = '';

$.get({
    url: 'getImage',
    dataType: 'json'
}).done(function(d){
    console.log(d);
    image = d.image;
    tinymce.init({
        selector:'textarea',
        plugins: 'image',
        toolbar: 'undo redo | image bold italic underline alignleft aligncenter alignright styleselect bullist numlist outdent indent blockquote removeformat | formatselect fontselect fontsizeselect |',
        relative_urls: false,
        image_list: [
            {title: 'kitty', value: image}
        ]
    });
}).fail(function(f){
    console.log(f.message);
});

