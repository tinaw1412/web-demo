    function add(n1,n2) { 
        return n1+n2; 
    }
    function sub(n1,n2) {
        return n1-n2;
    }
    function mul(n1,n2) {
        return n1*n2;
    }
    function div(n1,n2) {
        if (n2==0){
            alert("divisor cannot be zero");
            return false;
        }
        return n1/n2;
    }
    function verify(input) {
        var v=input.value;
        if (v == ""){
            alert("please enter number");
            input.focus();
            return false;
        }
        if (isNaN(v)){
            alert("Input is not a number");
            input.focus();
            input.value="";
            return false;
        }
        return true;
    }