function show(obj){
    //console.log(obj.value)
    document.getElementById(`pontErtek`).innerHTML=obj.value
}

let pers={}

function kuldes(){
    document.querySelector(".msg").innerHTML="A név kitöltése kötelező"
    console.log("Adatok ellenorzese")
    let nev= document.getElementById("nev").value
    console.log(nev)
    if(nev.lenght>3){
        pers.nev=nev
    }
    else{
        document.querySelector(".msg").innerHTML="A név kitöltése kötelező"
    }

    let szev=document.getElementById("szev").value
    if(szev>1937){
        pers.szev=szev
    }
    else{
        hibak.push("helytelen évszám")
    }
}