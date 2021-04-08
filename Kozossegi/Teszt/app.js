new Vue({
    el: "#app",
    data: {
        Komment: false,
        like:true
    },
    methods: {
        asd() {
            this.like= !this.like;
        }
    },
    computed: {
        state() {
            return this.name.length >= 4
        },
        invalidFeedback() {
            if (this.name.length > 0) {
                return 'Enter at least 4 characters.'
            }
            return 'Please enter something.'
        }
    },
});


