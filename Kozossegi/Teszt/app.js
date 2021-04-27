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

var xhttp = new XMLHttpRequest();
function like(id) {
    /*document.getElementById(x).removeAttribute("onclick");*/
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById(id).innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "like.php?id="+id, true);
    xhttp.send();
}
function komment(id) {
    /*document.getElementById(x).removeAttribute("onclick");*/
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var t="komment"+id;
            document.getElementById(t).innerHTML = this.responseText;
        }
    };
    var test = document.getElementById("floatingTextarea"+id).value;
    document.getElementById("floatingTextarea"+id).value='';
    xhttp.open("GET", "komment.php?id="+id+"&text="+test, true);
    xhttp.send();
}

function kereses() {
    var searchValue = document.getElementById('searchbox').value;

    if (searchValue.length !== 0) {
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("keresesDiv").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "kereses.php?search="+searchValue, true);
        xhttp.send();
    } else {
        document.getElementById("keresesUl").remove();
    }
}




