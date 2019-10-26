var l = [
    "admin","user"
]
function login() {
    var a = document.getElementById("lo").value
    var b = document.getElementById("la").value
    
    if (a == l[0] && b == l[0]) {
        alert("Welcome " + a)
    } else if (a == l[1] && b == l[1]){
        alert("Welcome " + a)
    }else{
        alert("wrong password or username")
    }
}