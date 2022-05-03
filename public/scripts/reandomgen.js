function tkgen(caracteries){
    var a = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890".split("");
    var b = [];
    for (var i=0; i<caracteries; i++) {
        var j = (Math.random() * (a.length-1)).toFixed(0);
        b[i] = a[j];
    }
    return b.join("");
}
function numgen(caracteries){
    var a = "1234567890".split("");
    var b = [];
    for (var i=0; i<caracteries; i++) {
        var j = (Math.random() * (a.length-1)).toFixed(0);
        b[i] = a[j];
    }
    return b.join("");
}
async function apiget(){
    var api = await fetch('http://localhost/nameapi/public/api/v1/namelib/'+numgen(1)+'/'+numgen(4)+'/'+numgen(4)+'/5-'+numgen(4)+'-'+numgen(4)+'/?token='+tkgen(25)).then((resp)=> resp.json());
    document.getElementById('nomeabencoado').innerHTML = api[0]['nome']+" "+ api[0]['segnome']+" "+ api[0]['sobrenome'] 
    console.log(api)
    return api
}
setInterval(function () {apiget();}, 4000);
apiget();
