const $FORM = document.querySelector("form");
const $RESULTADO = document.querySelector("#resultado");   

const fetch_data = async(name) => {
    
    let response = await fetch(`index.php?name=${name}`);
    let data = await response.json();

    return await data;
}

$FORM.addEventListener("submit", async(e) => {
    
    e.preventDefault();
    const $name_planeta = (document.querySelector("#name").value).toLowerCase();
    const DATA = await fetch_data($name_planeta);

    if(DATA["existe"] === true){

        $RESULTADO.innerHTML = `Si existe!!!!!!`;
    }else{
        
        
        $RESULTADO.innerHTML = `No existe!!!!!!`;
    }
});