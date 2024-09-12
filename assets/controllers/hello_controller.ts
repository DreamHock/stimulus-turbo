import { Controller } from "@hotwired/stimulus";

export default class extends Controller {
  static targets = ["data", "output"];

  declare outputTarget: HTMLDivElement;
  declare dataTarget: HTMLInputElement;
  createResult() {
    this.outputTarget.innerHTML = this.dataTarget.value;
  }
}
