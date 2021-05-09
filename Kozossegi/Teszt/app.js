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

new Vue({
    el: "#app6",
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
function klubLike(id) {
    /*document.getElementById(x).removeAttribute("onclick");*/
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById(id).innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "like.php?id="+id+"&klub=true", true);
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


function friendsKereses() {
    var searchValue = document.getElementById('baratkereses').value;

    if (searchValue.length !== 0) {
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("keresesDiv2").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "kereses.php?search="+searchValue + "&barat=true", true);
        xhttp.send();
    } else {
        document.getElementById("keresesUl").remove();
    }
}

function klubKereses() {
    var searchValue = document.getElementById('searchboxclub').value;
    if (searchValue.length !== 0) {
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("klubKeresesDiv").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "klubKereses.php?search="+searchValue, true);
        xhttp.send();
    } else {
        document.getElementById("keresesUl").remove();
    }
}

function getAllGroupMember() {
    let groupId = document.getElementById("groups").value;
    xhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("members").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "csoportokTagokFelvetel.php?groupId="+groupId, true);
    xhttp.send();
}

// Legörgetés
function scrollDown() {
    try {
        let container = document.getElementById("chat-messages");
        container.scroll(0, container.scrollHeight);
    } catch (err) {
        return null;
    }
}

// Értesítések száma + hívása automatikusan 20mp-ként
function ertesitesekSzama() {
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ertesitesekSzama").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "ertesitesekSzama.php", true);
    xhttp.send();
}

ertesitesekSzama();
setInterval(function(){ ertesitesekSzama() }, 20000);