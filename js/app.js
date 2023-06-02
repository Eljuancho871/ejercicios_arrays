const $FORM = document.querySelector("form");
const $RESULTADO = document.querySelector("#resultado");    

const fetch_data = async(num) => {
    
    let response = await fetch(`index.php?num=${num}`);
    let data = await response.json();

    return await data;
}

$FORM.addEventListener("submit", async(e) => {
    
    e.preventDefault();
    const num = document.querySelector("#num").value;
    const DATA = await fetch_data(num);
    $RESULTADO.innerHTML = "";

    DATA.forEach((el, index) => {

        $RESULTADO.innerHTML += `Planeta ${index + 1} = ${el}, `;
    });
});