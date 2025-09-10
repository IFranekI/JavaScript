let guzik1 = document.getElementById("but1")
let guzik2 = document.getElementById("but2")
let guzik3 = document.getElementById("but3")

let paragraf1 = document.getElementById("p1")
let paragraf2 = document.getElementById("p2")
let paragraf3 = document.getElementById("p3")

guzik1.addEventListener("click", e => {
    e.preventDefault()
    let liczba1 = document.getElementById("parz1").value
    parzyste(liczba1)
})

guzik2.addEventListener("click", e => {
    e.preventDefault()
    let delta1 = document.getElementById("delta1").value
    let delta2 = document.getElementById("delta2").value
    let delta3 = document.getElementById("delta3").value

    paragraf2.innerHTML = delta(delta1, delta2, delta3)
})

guzik3.addEventListener("click", e => {
    e.preventDefault()
    let lancuch1 = document.getElementById("in1").value
    let lancuch2 = document.getElementById("in2").value
    paragraf3.innerHTML = dwalancuchy(lancuch1, lancuch2)
})

function parzyste(x) {
    y = 2
    if (x % y == 0) {
        paragraf1.innerHTML = "Liczba jest parzysta"
    }
    else {
        paragraf1.innerHTML = "Liczba jest nie parzysta"
    }
}

function delta(a, b, c) {
    wynik = (b * b) - (4 * a * c)

    return wynik
}

function dwalancuchy(c, d) {
    toString(c)
    toString(d)
    e = c + d
    return e

}




