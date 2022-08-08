var stage = new Konva.Stage({
  container: 'container',
  width: 1000,
  height: 1000,
});

var layer = new Konva.Layer();
stage.add(layer);


function resizeDimensions(width, height, newWidth, newHeight){
    var ratio = width / height

    // Try basing it on width first
    var resizeWidth  = newWidth;
    var resizeHeight = Math.round(newWidth / ratio);

    if ((resizeWidth > newWidth) || (resizeHeight > newHeight)) { // Oops, either width or height does not fit
        // So base on height instead
        resizeHeight = newHeight;
        resizeWidth  = newHeight * ratio;
    }
    return {
        resizeWidth: resizeWidth,
        resizeHeight: resizeHeight,
    }
}
var vApp = new Vue({
    el: '#vApp',
    delimiters: ["${", "}"],
    mixins: [],
    data: {
        accept: ['image/jpeg', 'image/png'],
        photo: '',
    },
    mounted: function(){
    },
    methods: {
        readFile: function(event){
            var me = this;
            var files = [];
            if('target' in event){
                if('files' in event.target){
                    files = event.target.files
                }
            }
            if(files){
                var count = files.length;
                me.photo = "";

                if(count > 1){
                    // Remove all FileList content
                    event.target.value = "";
                    return alert('Maximum of 1 file only');
                }

                for(var i = 0; i < count; i++){
                    if(me.accept.indexOf(files.item(i).type) === -1){
                        // Remove all FileList content
                        event.target.value = "";

                        return alert('File type not allowed. Must be one of the following: ' + me.accept.join(', '));
                    }
                }
                
                for(var i = 0; i < count; i++){
                    let file = files.item(i);
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        var base64Data = e.target.result
                        var mime = base64Data.split(';')[0].replace('data:','')
                        if (['image/jpeg', 'image/png'].includes(mime)) {

                            let blank = new Image();
                            blank.onload = function(e) {
                                // let img = e.target;
                                // let canvas = document.getElementById("canvas");
                                // let {resizeWidth, resizeHeight} = resizeDimensions(img.width, img.height, 600, 600)
                                // canvas.width = resizeWidth;
                                // canvas.height = resizeHeight;
                                // let ctx = canvas.getContext("2d");

                                // ctx.drawImage(img, 0, 0, resizeWidth, resizeHeight);
                                
                                // me.photo = canvas.toDataURL("image/jpeg");

                                var yoda = new Konva.Image({
                                    image: blank,
                                    width: 1000,
                                    height: 1000,
                                });
                                layer.add(yoda);
                                
                                // Konva.Image.fromURL("http://localhost/gsu.edu.ph/wp-content/themes/diana/images/frame.png", function (node) {
                                Konva.Image.fromURL("/wp-content/themes/diana/images/frame.png", function (node) {
                                    layer.add(node);
                                    me.photo = stage.toDataURL({ pixelRatio: 3 });
                                    var a = document.createElement("a"); //Create <a>
                                    a.href = me.photo; //Image Base64 Goes here
                                    a.download = "frame."+mime.replace('image/',''); //File name Here
                                    a.click(); //Downloaded file
                                });
                            }
                            blank.src = base64Data; // data URL base64 encoded
                        }
                    }
                    reader.readAsDataURL(file);
                }
            }
        }
    }
});