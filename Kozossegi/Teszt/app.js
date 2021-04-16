new Vue({

    el: "#app",
    data: {
        adat: '',
    },
    methods: {
        asd() {
            this.adat= 'igen';
        }
    },

});

new Vue({
    el: "#app2",
    data: {
        Komment: false,
        like:true,
        text:'',
        object: {
            nev: 'Sanyi',
            komment: 'szia',
        },
        object2: {
            nev: 'Legenda',
            komment: 'cso',
        },
        bejegyzes: [{
            nev: 'Sanyi',
            komment: 'szia',
        },{
            nev: 'Legenda',
            komment: 'cso',
        }]
    },
    methods: {
        asd() {
            this.like= !this.like;
        },
        Submit(){
            var t= this.text;
            var list = ['Nev', t, '']
            this.PhpHivas('TesztKozzetetel.php',list);
        },
        komm(){
          this.bejegyzes.push({nev:'Teszt elek', komment: this.text});
            this.text='';
        },
        PhpHivas(url, list){
            var self=this;
            axios({
                method: 'post',
                url: url,
                timeout: 10000,
                data: list
            }).then(function (response) {
            }).catch(function (error) {
                error => console.log(error);
            });
        },
    },
});

new Vue({
    el: "#app3",
    data: { },
    methods: { },
});

new Vue({
    el: "#app4",
    data: { },
    methods: { },
});




