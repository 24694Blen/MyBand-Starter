const modaalVenster = {
  allKnoppen: document.querySelectorAll('.modaalKnop'),
  allInhoud: document.querySelectorAll('.modaalinhoud'),


    maakAchtergrond() {
      let achtergrond = document.createElement('div');
      achtergrond.classList.add('modaal-achtergrond');
      achtergrond.addEventListener('click', () => this.sluiten());
      return achtergrond;
    },
    maakModaal() {
      let modaal = document.createElement('div');
      modaal.className = 'modaal';
      modaal.addEventListener('click', (evt) => evt.stopPropagation())
      return modaal;
    },
    maakSluitKnop(){
      let sluitknop = document.createElement('div');
      sluitknop.className = 'sluit-knop';
      sluitknop.innerHTML = '&#x00D7';
      sluitknop.addEventListener('click', () => this.sluiten());
      return sluitknop;
    },
    open(elem) {
      this.achtergrond = this.maakAchtergrond();
      this.sluitknop   = this.maakSluitKnop();
      this.modaal      = this.maakModaal();
      this.modaal      .appendChild(this.sluitknop);
      this.modaal      .appendChild(elem);
      this.achtergrond .appendChild(this.modaal);
      document.body    .appendChild(this.achtergrond);
    },
    sluiten() {
      this.modaal      .innerHTML = '';
      document.body    .removeChild(this.achtergrond);
    }
  }


  for (let i=0; i<modaalVenster.allInhoud.length; i++) {
    modaalVenster.allInhoud[i].parentNode.removeChild(modaalVenster.allInhoud[i]);
  }
  for (let i=0; i<modaalVenster.allKnoppen.length; i++) {
    modaalVenster.allKnoppen[i].addEventListener('click', () => {
      let inhoud = modaalVenster.allInhoud[i];
      modaalVenster.open(inhoud);
    })
  }
