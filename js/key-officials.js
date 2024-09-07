
var vApp = new Vue({
    el: '#vApp',
    delimiters: ["${", "}"],
    mixins: [
    ],
    data: {
        pending: false,

    },
    computed: {

    },
    methods: {
        rot13: function (s) {
            return s.replace(/[A-Z]/gi, c =>
                "NOPQRSTUVWXYZABCDEFGHIJKLMnopqrstuvwxyzabcdefghijklm"[
                "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz".indexOf(c)])
        },
        toggle: function (e) {
            if (!$(e.srcElement).data('no')) {
                $(e.srcElement).data('no', $(e.srcElement).attr('src'))
                $(e.srcElement).attr('src', $(e.srcElement).data('me'))

            } else {
                $(e.srcElement).attr('src', $(e.srcElement).data('no'))
                $(e.srcElement).data('no', '')

            }
        },
        toggleM: function (e) {
            e.stopPropagation()
            if ($(e.srcElement).html() === '***click to show email***') {
                $(e.srcElement).html(this.rot13($(e.srcElement).data('show')))
            } else {
                $(e.srcElement).html('***click to show email***')
            }
        }
    }
});
