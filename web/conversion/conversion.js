    function fadeIn(id){
        document.getElementById(id).classList.add("fade");
        document.getElementById(id).classList.remove("opaque");
    }

    function fadeInResults(id){
        document.getElementById(id).classList.add("fadeResults");
        document.getElementById(id).classList.remove("opaque");
    }

    function calculateConversion(id){
    	var url = "https://api.myjson.com/bins/boe2z";
        var money = document.getElementById("value").value;
        var type1 = document.getElementById("firstType").value;
        var type2 = document.getElementById("secondType").value;

        var xhttp = new XMLHttpRequest();
        if (!xhttp) {
            alert('Giving up :( Cannot create an XMLHTTP instance');
        return false;
        }

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var info = JSON.parse(this.responseText);
                //document.getElementById("title").innerHTML = generateTitle();
                //document.getElementById("amount").innerHTML = calculate(info[type1], info[type2], money);  
                document.getElementById("title").textContent = generateTitle(type1, type2);
                document.getElementById("amount").textContent = calculate(info[type1], info[type2], money);
            }
        };


        xhttp.open("GET", url, true);
        xhttp.send();

        fadeInResults(id);
    }

    function calculate(type1, type2, value){
        var money = value;
        money = money / type1;
        money = money * type2;

        return Math.round(money * 100) / 100;
    }

    function generateTitle(first, second){
        var message = "The converted amount from " + first + " to " + second + " is:";
        return message;
    }