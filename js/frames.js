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

    if ((resizeWidth > newWidth) || (resizeHeight > newHeight)) { // Oops, either width or height does not fit
        // So base on height instead
        resizeHeight = newHeight;
        resizeWidth = newHeight * ratio;
    }
    return {
        resizeWidth: resizeWidth,
        resizeHeight: resizeHeight,
    }
}
let vApp = new Vue({
    el: '#vApp',
    delimiters: ["${", "}"],
    mixins: [],
    data: {
        accept: ['image/jpeg', 'image/png'],
        photo: '',
    },
    mounted: function () {
    },
    methods: {
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
                                    // let img = e.target;
                                    // let canvas = document.getElementById("canvas");
                                    // let {resizeWidth, resizeHeight} = resizeDimensions(img.width, img.height, 600, 600)
                                    // canvas.width = resizeWidth;
                                    // canvas.height = resizeHeight;
                                    // let ctx = canvas.getContext("2d");

                                    // ctx.drawImage(img, 0, 0, resizeWidth, resizeHeight);

                                    // me.photo = canvas.toDataURL("image/jpeg");

                                    let yoda = new Konva.Image({
                                        image: blank,
                                        crop: {
                                            x:0,
                                            y:0,
                                            width: 1000,
                                            height: 1000,
                                        },
                                        width: 1000,
                                            height: 1000,
                                    });

                                    layer.add(yoda);

                                    // Konva.Image.fromURL("http://localhost/gsu.edu.ph/wp-content/themes/diana/images/frame.png", function (node) {
                                    Konva.Image.fromURL("/wp-content/themes/diana/images/frame.png", function (node) {
                                        layer.add(node);
                                        me.photo = stage.toDataURL({ pixelRatio: 3 });
                                        let a = document.createElement("a"); //Create <a>
                                        a.href = me.photo; //Image Base64 Goes here
                                        a.download = "frame." + mime.replace('image/', ''); //File name Here
                                        a.click(); //Downloaded file
                                    });
                                }
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