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
        image_prepend_url: "http://localhost:8888/erikmiller-redesign/public/",
        image_list: [
            {title: 'kitty', value: image}
        ]
    });
}).fail(function(f){
    console.log(f.message);
});

