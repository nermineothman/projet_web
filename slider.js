// definiujemy klase rangeSlider
class rangeSlider {
  // tworzymy konstruktor, któremu będziemy przekazywać parametry
  constructor(minValue, maxValue, minInput, maxInput, container) {
    this.minValue = minValue; // minValue - minimalna wartość w zakresie
    this.maxValue = maxValue; // maksymalna wartosc w zakresie
    this.minInput = minInput; // id inputa na stronie gdzie injectujemy slider
    this.maxInput = maxInput;
    this.container = container; // container na stronie gdzie chcemy inejctowac slider
    // wywolania
    this.sliderWidthPx = null;
    this.mousePositionPx = null; // zmienna z pozycja myszu po klikniecu w wybranym elemencie
    this.elementPositionPx = null; // zmienna z wartosc left kliknietego elementu
    this.mousedown = null; // wartosc mousedown true albo false
    this.mouseDownElement = null; // zmienna z wybranym elementem po kliknieciu
    this.elementNextPositionPx = null;
    this.currentToPositionPct = null;
    this.currentFromPositionPct = null;
    this.findContainer();
    this.findInputs();
    this.injectSlider();
    this.measureSlider();
    this.attachEvents();
    this.processInputs();
  }
  // wywołujemy metodę findContainer, która zapisuje w zmiennej this.container,
  // kontener przekazany do konstruktora
  findContainer() {
    this.container = document.querySelector(this.container);
  }
  // wywołujemy metodę findInputs, która zapisuje w zmiennych, inputy przekazane do konstruktora
  findInputs() {
    this.minInput = document.querySelector(this.minInput); //pobieramy input min
    this.maxInput = document.querySelector(this.maxInput); //pobieramy input max
  }
  // metoda injectSlider wkleja slider w wybrany kontener
  injectSlider() {
    // injectujemy slider w HTML
    this.container.innerHTML = '<div class="slider"><div class="from"></div><div class="to"></div></div>';
    this.from = this.container.querySelector('.from'); // lewy suwak from
    this.to = this.container.querySelector('.to'); // prawy suwak to
    this.slider = this.container.querySelector('.slider'); // slider
  }
  // metoda measureSlider mierzy slider
  measureSlider() {
    this.sliderWidthPx = this.slider.getBoundingClientRect().width; // szerokosc slidera w danym momencie
    this.zipperWidthPx = this.from.getBoundingClientRect().width;
    this.sliderUnitPx = this.sliderWidthPx / (this.maxValue - this.minValue);

  }
  // dodajemy nasłuchiwacze do wybranych elementów
  attachEvents() {
    // korzystamy z funkcji bind(), w celu przekazania odpowiedniej referencji do this
    window.addEventListener('mousemove', this.onMouseMove.bind(this)); // od poczatku dodajemy nasluchiwacz na window, ktory dopiero obslugujemy na mousedown
    this.from.addEventListener('mousedown', this.mouseDownMin.bind(this), false); // nasluchiwacz na lewym suwaku from mousedown
    window.addEventListener('mouseup', this.mouseUpMin.bind(this), false); // nasluchiwacz na mouseup na window ponieważ user może zjechać myszką ze slidera
    this.to.addEventListener('mousedown', this.mouseDownMax.bind(this), false);
    window.addEventListener('mouseup', this.mouseUpMax.bind(this), false);
    window.addEventListener('resize', this.measureSlider.bind(this)); // nasluchiwacz na resize do mierzenia szerokosci slidera przy zmianie wielkosci przegladarki
    this.slider.addEventListener('click', this.moveClosestSlider.bind(this));
  }
  processInputs() {
    let cleanFunction = (v, min, max, defaultValue) => {
      if (!Number.isInteger(v)) {
        v = isNaN(parseInt(v)) ? defaultValue : parseInt(v)
      }
      if (v < min)
        v = min;
      if (v > max)
        v = max;
      return v;
    }
    let max = cleanFunction(this.maxInput.value, this.minValue, this.maxValue, this.maxValue);
    let min = cleanFunction(this.minInput.value, this.minValue, this.maxValue, this.minValue);

    if (min > max) {
      let minTmp = min;
      min = max;
      max = minTmp;
    }

    this.minInput.value = min;
    this.maxInput.value = max;

    this.mouseDownMin({
      clientX: 0
    });
    this.sliderMove(-(min * this.sliderUnitPx));
    this.mouseUpMin();

    this.mouseDownMax({
      clientX: 0
    });
    this.sliderMove(this.sliderWidthPx - (max * this.sliderUnitPx));
    this.mouseUpMax();
  }
  moveClosestSlider(e) {
    let sliderClickPct = (e.clientX / this.sliderWidthPx) * 100;

    if (sliderClickPct < this.currentFromPositionPct) {
      this.mouseDownMin({
        clientX: 0
      });
      this.sliderMove((this.currentFromPositionPct - sliderClickPct) * this.sliderUnitPx + (this.zipperWidthPx / 2));
      this.mouseUpMin();
    } else if (sliderClickPct > this.currentToPositionPct) {
      this.mouseDownMax({
        clientX: 0
      });
      this.sliderMove((this.currentToPositionPct - sliderClickPct) * this.sliderUnitPx);
      this.mouseUpMax();
    } else {
      if (sliderClickPct - this.currentFromPositionPct < this.currentToPositionPct - sliderClickPct) {
        this.mouseDownMin({
          clientX: 0
        });
        this.sliderMove((this.currentFromPositionPct - sliderClickPct) * this.sliderUnitPx + this.zipperWidthPx);
        this.mouseUpMin();

      } else {
        this.mouseDownMax({
          clientX: 0
        });
        this.sliderMove((this.currentToPositionPct - sliderClickPct) * this.sliderUnitPx - this.zipperWidthPx);
        this.mouseUpMax();
      }
    }

    this.changeInputs();

  }

  mouseDownMin(e) {
    this.mousedown = true; // przy kliknieciu na div'a .from zmieniamy mousedown na true, zeby zaczac uzywac onMouseMove, ktore dziala ciagle w tle
    this.mouseDownElement = this.from; // zapisujemy do mouseDownElement, ktory element zlapalismy
    this.mousePositionPx = e.clientX; // zapisujemy pozycje myszy na kliknietym elemencie

    this.elementPositionPx = window.getComputedStyle(this.mouseDownElement, null).getPropertyValue("left");
    this.elementPositionPx = parseInt(this.elementPositionPx);

    this.elementNextPositionPx = window.getComputedStyle(this.to, null).getPropertyValue("left");
    this.elementNextPositionPx = parseInt(this.elementNextPositionPx);
  }
  mouseUpMin() {
    this.mousedown = false; // na mouseup odlaczamy metode onMouseMove
  }
  mouseDownMax(e) {
    this.mousedown = true;
    this.mouseDownElement = this.to;
    this.mousePositionPx = e.clientX;

    this.elementPositionPx = window.getComputedStyle(this.mouseDownElement, null).getPropertyValue("left");
    this.elementPositionPx = parseInt(this.elementPositionPx);

    this.elementNextPositionPx = window.getComputedStyle(this.from, null).getPropertyValue("left");
    this.elementNextPositionPx = parseInt(this.elementNextPositionPx);
  }
  mouseUpMax() {
    this.mousedown = false;
  }
  // metoda onMouseMove decyduje o tym co ma się dziać przy ruszaniu myszą
  onMouseMove(e) {
    let deltaPx;
    // sprawdzamy czy mousedown true
    if (this.mousedown == true) {
      // delta zapisuje absolutna zmiane pozycji suwaka po poruszaniu myszka
      deltaPx = this.mousePositionPx - e.clientX;
      // wywoluje funkcje sliderMove zeby przekazac zmienne delta, direction oraz client z metody onMouseMove
      this.sliderMove(deltaPx);
      this.changeInputs();
      // wywoluje funkcje measureSlider zeby przekazac mu zmienna delta
    }
  }
  // metoda sliderMove porusza oboma sliderami
  sliderMove(deltaPx) {
    // zmienna newpos wylicza procentowa pozycje suwaka na sliderze
    let sliderStartPositionPct = (this.elementPositionPx / this.sliderWidthPx) * 100;
    this.sliderNextPositionPct = (this.elementNextPositionPx / this.sliderWidthPx) * 100;
    let deltaPct = (deltaPx / this.sliderWidthPx) * 100;
    this.newPositionPct = sliderStartPositionPct - deltaPct;
    this.zipperWidthPct = (this.zipperWidthPx / this.sliderWidthPx) * 100;
    // this.sliderElementWidth
    // zmienna delt wylicza procentowa zmiane pozycji suwaka
    this.mouseDownElement.style.left = this.checkCollision() + '%';

    if (this.mouseDownElement == this.from)
      this.currentFromPositionPct = this.newPositionPct;
    if (this.mouseDownElement == this.to)
      this.currentToPositionPct = this.newPositionPct;
  }
  changeInputs() {
    let val = Math.round((this.newPositionPct / 100) * (this.maxValue - this.minValue + this.minValue));

    if (this.mouseDownElement == this.from) {
      this.minInput.value = val;
    } else if (this.mouseDownElement == this.to) {
      this.maxInput.value = val;
    }
  }
  checkCollision() {
    if (this.mouseDownElement == this.to && this.newPositionPct < (this.sliderNextPositionPct + this.zipperWidthPct * 2)) {
      this.newPositionPct = this.sliderNextPositionPct + this.zipperWidthPct * 2;
    } else if (this.mouseDownElement == this.from && this.newPositionPct > (this.sliderNextPositionPct - this.zipperWidthPct * 2)) {
      this.newPositionPct = this.sliderNextPositionPct - this.zipperWidthPct * 2;
    }
    if (this.newPositionPct < 0)
      this.newPositionPct = 0;
    if (this.newPositionPct > 100)
      this.newPositionPct = 100;

    return this.newPositionPct;
  }


} //eo rangeSlider


// uzywamy konstrukotora, przekazujemy parametry w celu utworzenia nowego slidera
var slider = new rangeSlider(10, 100, "#id_cena_od", "#id_cena_do", "#slider");
