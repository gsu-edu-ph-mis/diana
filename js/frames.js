let stage = new Konva.Stage({
    container: 'container',
    width: 1000,
    height: 1000,
});

let layer = new Konva.Layer();
stage.add(layer);


function resizeDimensions(width, height, newWidth, newHeight) {
    let ratio = width / height

    // Try basing it on width first
    let resizeWidth = newWidth;
    let resizeHeight = Math.round(newWidth / ratio);

    if ((resizeWidth < newWidth) || (resizeHeight < newHeight)) { // Oops, either width or height does not fit
        // So base on height instead
        resizeHeight = newHeight;
        resizeWidth = newHeight * ratio;
    }
    return {
        resizeWidth: Math.round(resizeWidth),
        resizeHeight: Math.round(resizeHeight),
    }
}
let vApp = new Vue({
    el: '#vApp',
    delimiters: ["${", "}"],
    mixins: [],
    data: {
        pending: false,
        accept: ['image/jpeg', 'image/png'],
        photo: '',
        mime: '',
    },
    mounted: function () {
    },
    methods: {
        openTab: function(data){
            let w = window.open('about:blank');
            let image = new Image();
            image.src = data;
            image.width = 1000
            image.height = 1000
            setTimeout(function(){
                w.document.write(image.outerHTML);
            }, 0);
        },
        download: function(){
            const me = this;
            let a = document.createElement("a"); //Create <a>
            a.href = me.photo; //Image Base64 Goes here
            a.download = "frame." + me.mime.replace('image/', ''); //File name Here
            a.click(); //Downloaded file
        },
        readFile: function (event) {
            let me = this;
            let files = [];
            if ('target' in event) {
                if ('files' in event.target) {
                    files = event.target.files
                }
            }
            if (files) {
                let count = files.length;
                me.photo = "";

                if (count > 1) {
                    // Remove all FileList content
                    event.target.value = "";
                    return alert('Maximum of 1 file only');
                }

                for (let i = 0; i < count; i++) {
                    if (me.accept.indexOf(files.item(i).type) === -1) {
                        // Remove all FileList content
                        event.target.value = "";

                        return alert('File type not allowed. Must be one of the following: ' + me.accept.join(', '));
                    }
                }

                for (let i = 0; i < count; i++) {
                    let file = files.item(i);
                    let reader = new FileReader();
                    reader.onload = function (e) {
                        try {
                            let base64Data = lodash.get(e, 'target.result', '')
                            let mime = base64Data.split(';')[0].replace('data:', '')
                            if (!mime) throw new Error('Not a valid photo.')
                            if (['image/jpeg', 'image/png'].includes(mime)) {

                                let blank = new Image(); // Hold uploaded file
                                blank.onload = function (e) {
                                    const thisImage = this;
                                    const targetWidth = 1000;
                                    const targetHeight = 1000;
                                    let { resizeWidth, resizeHeight } = resizeDimensions(thisImage.width, thisImage.height, targetWidth, targetHeight)
                                    
                                    // console.log(thisImage.width, thisImage.height)

                                    let resizeX = 0
                                    let resizeY = 0
                                    if(resizeWidth > targetWidth){
                                        resizeX = Math.round((targetWidth - resizeWidth) / 2)
                                    }
                                    if(resizeHeight > targetHeight){
                                        resizeY = Math.round((targetHeight - resizeHeight) / 2)
                                    }

                                    // console.log(resizeX, resizeY, resizeWidth, resizeHeight)

                                    let yoda = new Konva.Image({
                                        image: blank,
                                        x: resizeX,
                                        y: resizeY,
                                        width: resizeWidth,
                                        height: resizeHeight,
                                    });
                                    layer.add(yoda);

                                    // Konva.Image.fromURL("http://localhost/gsu.edu.ph/wp-content/themes/diana/images/frame.png", function (node) {
                                    Konva.Image.fromURL("/wp-content/themes/diana/images/frame.png", function (node) {
                                        layer.add(node);
                                        me.photo = stage.toDataURL({ pixelRatio: 3 });
                                        me.mime = mime
                                        me.pending = false
                                        $('html,body').animate({
                                            scrollTop: $('#scrollDL').offset().top - 40
                                        }, 1000, 'swing');
                                    });
                                }
                                me.pending = true
                                blank.src = base64Data; // data URL base64 encoded
                            } else {
                                throw new Error('File type not allowed.')
                            }
                        } catch (err) {
                            console.error(err)
                            alert('Error: ' + err.message)
                        }
                    }
                    reader.readAsDataURL(file);
                }
            }
        }
    }
});