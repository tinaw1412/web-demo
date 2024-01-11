class Calculator {

    add(n1, n2) {
        return n1 + n2;
    }
    sub(n1, n2) {
        return n1 - n2;
    }
    mul(n1, n2) {
        return n1 * n2;
    }
    div(n1, n2) {
        if (n2 == 0) {
            alert("divisor cannot be zero");
            return false;
        }
        return n1 / n2;
    }
    verify(jElement) {
        var v = jElement.val();
        if (v == "") {
            alert("please enter number");
            jElement.focus();
            return false;
        }
        if (isNaN(v)) {
            alert("Input is not a number");
            jElement.focus();
            jElement.val("");
            return false;
        }
        return true;
    }
}