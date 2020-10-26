/** @format */

const list = document.querySelectorAll(
  "input[data-group], textarea[data-group]",
)

const mainHaldner = event => {
  const group = event.target.getAttribute("data-group")
  let valid = true
  list.forEach(check => {
    if (check.getAttribute("data-group") === group) {
      const type = check.getAttribute("type")
      let value =
        type !== "file" ? check.value || check.innertText : check.files
      if (!value) {
        valid = false
        return
      }
      if (type !== "file") {
        if (value.trim().length === 0) {
          valid = false
        }
      } else {
        if (value.length === 0) valid = false
      }
    }
  })
  if (valid) {
    document.querySelector(`#${group}`).removeAttribute("disabled")
  } else {
    document.querySelector(`#${group}`).setAttribute("disabled", "true")
  }
}
list.forEach(el => {
  const type = el.getAttribute("type")
  if (type === "file") {
    el.addEventListener("change", mainHaldner)
  } else {
    el.addEventListener("keyup", mainHaldner)
  }
})

document.getElementById("non-merci").addEventListener("click", function() {
  document.getElementById("my-welcome-message").style.display = "none"
})

// script de popup
var reviews = document.getElementById("btn-reviews")
console.log(reviews)
reviews.addEventListener("click", function() {
  document.querySelector("div.annexe").style.display = "block"
})
// console.log(reviews)

const close = document.getElementById("close-btn")
console.log(close)
close.addEventListener("click", function() {
  document.querySelector("div.annexe").style.display = "none"
})

const closepopup = document.getElementById("close-popup")
console.log(close)
close.addEventListener("click", function() {
  document.querySelector("#my-welcome-message").style.display = "none"
})
