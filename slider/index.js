class Slider {
    constructor(wrapper, options) {
      if (wrapper instanceof HTMLElement) {
        this.wrapper = wrapper;
      } else {
        console.error("Bad wrapper !");
      }
  
      this.width = 650;
      this.height = 425;
      this.currentSlide = 0;
      this.interval = 1000;
      this.loop = false;
      this.autoplay = false;
  
      if (options != null && typeof options === "object") {
        if (options.width && typeof options.width === "number")
          this.width = options.width;
        if (options.height && typeof options.height === "number")
          this.height = options.height;
        if (options.StartSLide && typeof options.StartSLide === "number")
          this.currentSlide = options.StartSLide;
        if (options.interval && typeof options.interval === "number")
          this.interval = options.interval;
        if (options.loop && typeof options.loop === "boolean")
          this.loop = options.loop;
        if (options.autoplay && typeof options.autoplay === "boolean")
          this.autoplay = options.autoplay;
      }
  
      this.wrapper.style.width = this.width + "px";
      this.wrapper.style.height = this.height + "px";
  
      this.pictures = document.querySelectorAll(".slider > img");
  
      const newImg = document.createElement("img");
      newImg.src = this.pictures[this.currentSlide].src;
      this.wrapper.innerText = "";
  
      this.wrapper.appendChild(newImg);
  
      if (this.autoplay) {
        const intervalID = setInterval(() => {
          this.currentSlide++;
          if (this.loop) {
            if (this.currentSlide >= this.pictures.length) this.currentSlide = 0;
          } else {
            if (this.currentSlide >= this.pictures.length - 1)
              clearInterval(intervalID);
          }
          newImg.src = this.pictures[this.currentSlide].src;
        }, this.interval);
      }
  
      this.createPrevArrow();
      this.createNextArrow();
    }
  
    createPrevArrow() {
      const divPrevArrow = document.createElement("div");
      divPrevArrow.innerText = "Prev";
      divPrevArrow.classList.add("arrow");
      divPrevArrow.classList.add("prev");
      divPrevArrow.addEventListener("click", this.prev);
  
      this.wrapper.appendChild(divPrevArrow);
    }
  
    createNextArrow() {
      const divNextArrow = document.createElement("div");
      divNextArrow.innerText = "Next";
      divNextArrow.classList.add("arrow");
      divNextArrow.classList.add("next");
      divNextArrow.addEventListener("click", this.next);
  
      this.wrapper.appendChild(divNextArrow);
    }
  
    prev = () => {
      const img = document.querySelector(".slider > img");
  
      this.currentSlide--;
  
      if (this.currentSlide < 0) {
        if (this.loop) this.currentSlide = this.pictures.length - 1;
        else this.currentSlide++;
      }
  
      img.src = this.pictures[this.currentSlide].src;
    };
  
    next = () => {
      const img = document.querySelector(".slider > img");
  
      this.currentSlide++;
  
      if (this.currentSlide > this.pictures.length - 1) {
        if (this.loop) this.currentSlide = 0;
        else this.currentSlide--;
      }
      img.src = this.pictures[this.currentSlide].src;
    };
  }
  