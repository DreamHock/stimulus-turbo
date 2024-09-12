import { Controller } from "@hotwired/stimulus";

export default class extends Controller {
  static targets = ["slide"];
  static values = { index: Number };

  declare indexValue: number;
  declare slideTargets: HTMLDivElement[];

  indexValueChanged(): void {
    this.showCurrentSlide();
  }

  next(): void {
    if (this.indexValue < 3) {
      this.indexValue++;
    }
  }

  previous(): void {
    if (this.indexValue > 0) {
      this.indexValue--;
    }
  }

  showCurrentSlide(): void {
    this.slideTargets.forEach((element, index) => {
      element.hidden = index !== this.indexValue;
    });
  }
}
