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
        bejegyzes: []
    },
    methods: {
        asd() {
            this.like= !this.like;
        },
        kommentList(x){
            this.PhpHivas('komment.php',x);
            alert(x);
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
                this.bejegyzes = response.data.komment;
                alert(this.bejegyzes);
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

new Vue({
    el: "#app5",
    data: { },
    methods: { },
});

function like(id) {
    var xhttp = new XMLHttpRequest();
    /*document.getElementById(x).removeAttribute("onclick");*/
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById(id).innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "like.php?id="+id, true);
    xhttp.send();
}




