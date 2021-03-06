  let json;
  let valgt;
  let element;

  const popup = document.querySelector("#popup");
  document.addEventListener("DOMContentLoaded", loadJSON);

  let temp = document.querySelector("template");

  let filter = "alle";
  const link = "https://www.selya.dk/kea/10_eksamensprojekt/wordpress/wp-json/wp/v2/produkter?per_page=100";

  async function loadJSON() {
      const respons = await fetch(link);
      json = await respons.json();
      addEventListenerToButtons();
      vis(json);
  }
  const templatePointer = document.querySelector('template');

  function vis() {

      let listPointer = document.querySelector(".list");

      listPointer.innerHTML = " ";

      //løb igennem array "element"
      json.forEach(element => {
          if (filter == "alle" || filter == element.categories[0]) {
              console.log(filter);

              const klon = temp.cloneNode(true).content;
              klon.querySelector("h2").textContent = element.overskrift;
              klon.querySelector(".pris").textContent = element.pris + " kr.";
              klon.querySelector("img").src = element.image.guid;

              klon.querySelector("article").addEventListener("click", () => visDetaljer(element));

              listPointer.appendChild(klon);
          }
      })
  }

  document.querySelector("#luk").addEventListener("click", () => popup.style.display = "none");

  //Vis PopUppen i detaljer

  function visDetaljer(element) {
      console.log(element);

      popup.style.display = "block";
      popup.querySelector("h2").textContent = element.overskrift;
      popup.querySelector(".pris").textContent = element.pris + " kr.";
      popup.querySelector("img").src = element.image.guid;
      popup.querySelector(".beskrivelse").innerHTML = element.beskrivelse;

      //Lyt efter menuklik

  }

  function addEventListenerToButtons() {
      document.querySelectorAll(".filter").forEach((btn) => {
          btn.addEventListener("click", filterBTNs);
          btn.addEventListener("click", lukPop);

      });
  }

  function filterBTNs() {
      filter = this.dataset.element;
      document.querySelector("#kol_h1").textContent = this.textContent;
      document.querySelectorAll(".filter").forEach((navLink) => {
          navLink.classList.remove("valgt");

      })
      this.classList.add("valgt");

      vis(json);

  }

  loadJSON();



  // KILL POPUP HVIS DER KLIKKES PÅ MENUEN IGEN

  // lukPop();
  function lukPop() {
      console.log("Luk SÅ den popUp!!");

      if (popup.style = 'block') {
          popup.style.display = "none";
      }
  }
